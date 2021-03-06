<?php

declare(strict_types=1);

namespace App\Models\Features;

use App\Constants;
use App\Exceptions\Exception;
use App\Services\Db;
use App\Services\Response\Response;
use Illuminate\Support\Str;
use App\Repositories\Repository;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Trait BaseManager
 * @property object localization
 * @package App\Models\Features
 */
trait BaseManager
{
    use ScopeManager,GeneralAppends;

    /**
     * @var array
     */
    protected array $relationLists = [];

    /**
     * @var array|string[]
     */
    protected array $autoModelAppends = [
        'created_at_human' => 'Displays the created_at value in diffForHumans format.',
        'updated_at_human' => 'Displays the updated_at value in diffForHumans format.'
    ];

    protected array $localizationWithQuery = [
        'localization' => [
            'foreignColumn' => 'localized_code',
            'table' => 'localizations',
            'description' => 'You can use localizations relation belonging to product data.',
            'repository' => 'localization',
        ],
    ];

    /**
     * BaseManager constructor.
     * @param array $attributes
     * @param bool $withQueryConstructor
     */
    public function __construct(array $attributes = [],bool $withQueryConstructor = true)
    {
        $this->fillable = Db::columns($this->getTable());

        foreach (Db::types($this->getTable()) as $dbTypeColumn => $dbType){
            if($dbType=='array'){
                $this->casts[$dbTypeColumn] = 'array';
            }
        }

        $this->assignAppends();
        $this->localizationWithQuery['localization']['localColumn'] = getTableCode($this->getModelName());

        if(in_array('sequence',$this->fillable,true) && request()->method()=='GET'){
            $this->setHidden(array_merge($this->getHidden(),['sequence','sequence_time']));
        }

        if($withQueryConstructor){
            $this->withQueryConstructor();
        }

        parent::__construct($attributes);
    }

    /**
     * model boot process
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
    }

    /**
     * get eager loading constructor for localization
     *
     * @return void
     */
    protected function withQueryConstructor()
    {
        $this->withModelHandler();

        if(property_exists($this,'withQuery') && is_array($this->withQuery)){
            $this->withQuery = array_merge_recursive($this->withQuery,$this->localizationWithQuery);
        }
    }

    /**
     * get model normalize for base manager class
     *
     * @param $model
     * @return string
     */
    public function getModelNormalize($model): string
    {
        if(Str::endsWith($model,'y')){
            return substr(Str::camel($model),0,-1).'ies';
        }
        else{
            return Str::camel($model).'s';
        }
    }

    /**
     * get model relations
     *
     * @param string|null $model
     * @param bool $nested
     * @return void
     */
    public function getModelRelationsForCode(?string $model = null,bool $nested = false) : void
    {
        $modelName                  = $model ?? $this->getModelName();
        $relationCodes              = Db::relationCodes();
        $currentModelName           = ucfirst($modelName);
        $relationsAccordingToCode   = $relationCodes[$tableCode = getTableCode($modelName)] ?? [];
        $camelCaseTableCode         = Str::camel($tableCode);
        $globalScopes               = config('repository.globalScopes');
        $repository                 = $this->getRepository();
        $deniedEagerLoadings        = (is_object($repository) && method_exists($repository,'getDeniedEagerLoadings')) ? $repository->getDeniedEagerLoadings() : [];

        $clientEagerLoadingData     = request()->query->get('with',[]);

        if(count($deniedEagerLoadings)){
            foreach ($deniedEagerLoadings as $deniedEagerLoading){
                if(isset($clientEagerLoadingData[$deniedEagerLoading])){
                    Exception::customException(trans('exception.deniedEagerLoadings',['key' => $deniedEagerLoading]));
                }
            }
        }

        foreach ($relationsAccordingToCode as $modelRelation){

            if(
                $modelRelation!==$currentModelName
                && $modelRelation!=='Localization'
            ){
                $modelNamespace = Constants::modelNamespace.'\\'.$modelRelation;
                $withModelKey = $this->getModelNormalize($modelRelation);

                if(!in_array($camelCaseTableCode,$globalScopes)){
                    if(class_exists($modelNamespace) && !isset($this->withQuery[$withModelKey])){
                        $this->relationLists[] = '[with]['.$withModelKey.']';
                        $relationListImplode = implode('',$this->relationLists);
                        $relationListHandling = substr_replace($relationListImplode,'',0,1);
                        $relationListHandling = substr_replace($relationListHandling,'',4,1);

                        $this->withQuery[$withModelKey] = [
                            'hasMany' => true,
                            'nested' => $nested,
                            'foreignColumn' => getTableCode($currentModelName),
                            'localColumn' => getTableCode($currentModelName),
                            'table' => $withModelKey,
                            'description' => 'You can use '.$withModelKey.' relation belonging to '.$currentModelName.' data.',
                            'repository' => Str::camel($modelRelation),
                            'withQuery' => $relationListHandling,
                        ];
                    }

                    $this->getModelRelationsForCode($modelRelation,true);
                }
            }
        }

        $this->relationLists = [];
    }


    /**
     * get with model handler for model
     *
     * @return void
     */
    protected function withModelHandler()
    {
        $columns = Db::columns($this->getTable());

        $this->getModelRelationsForCode();

        foreach ($columns as $column){
            if(Str::endsWith($column,'_code')){
                $relationModel = Str::camel(str_replace('_code','',$column));

                if($relationModel!==$this->getModelName()){
                    $relationModelNamespace = Constants::modelNamespace.'\\'.Str::ucfirst($relationModel);

                    if(class_exists($relationModelNamespace)){
                        $relationTable = (new $relationModelNamespace([],false))->getTable();

                        $this->withQuery[$relationModel] = [
                            'hasMany' => false,
                            'nested' => false,
                            'foreignColumn' => Str::snake($relationModel).'_code',
                            'localColumn' => Str::snake($relationModel).'_code',
                            'table' => $relationTable,
                            'description' => 'You can use '.$relationModel.' relation belonging to '.$this->getModelName().' data.',
                            'repository' => Str::camel($relationModel)
                        ];
                    }
                }
            }
        }

    }

    /**
     * get model name
     *
     * @return string
     */
    public function getModelName() : string
    {
        return getModelName(get_called_class());
    }

    /**
     * get repository object
     *
     * @return object|bool
     */
    public function getRepository() : object|bool
    {
        $model = $this->getModelName();
        return Repository::$model();
    }

    /**
     * get with queries for model
     *
     * @return array
     */
    public function getWithQueries() : array
    {
        return property_exists($this,'withQuery') ? $this->withQuery : [];
    }

    /**
     * get with queries for model
     *
     * @return array
     */
    public function getWithValues() : array
    {
        $list = [];

        foreach ($this->getWithQueries() as $relation => $withQuery){
            $list[] = $relation;
        }

        return $list;
    }

    /**
     * get localization model
     *
     * @return HasOne
     */
    public function localization(): HasOne
    {
        return $this->getRepository()->withLocalization($this);
    }

    /**
     * set appends according to client
     *
     * @return void
     */
    public function assignAppends()
    {
        $list = [];
        $modelAppends = array_merge($this->autoModelAppends,($this->modelAppends ?? []));
        Response::formatterSupplement(['appends' => $modelAppends]);

        $clientAppends = (request()->query->all())['append'] ?? null;

        if(!is_null($clientAppends)){
            $appendsList = explode(',',$clientAppends);

            foreach ($appendsList as $item){
                if(isset($modelAppends[$item])){
                    $list[] = $item;
                }
            }
        }

        $this->setAppends($list);
    }

    /**
     * get __call method for base manager
     *
     * @param $name
     * @param array $args
     * @return mixed
     */
    public function __call($name,$args = [])
    {
        $queries = $this->getWithQueries();

        if(isset($queries[$name])){
            $withName = 'with'.Str::ucfirst($name);
            return $this->getRepository()->{$withName}($this);
        }

        return parent::__call($name,$args);
    }
}
