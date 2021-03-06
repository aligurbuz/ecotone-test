<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Localizations;

use App\Models\Language;
use App\Repositories\EloquentRepository;
use App\Repositories\Resources\Localizations\Contracts\LanguageRepositoryContract;

class LanguageRepository extends EloquentRepository implements LanguageRepositoryContract
{
    /**
     * @var bool
     */
    protected bool $paginator = false;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Language::class;

	/**
	 * get client ranges for repository
	 *
	 * @var array|string[]
	 */
	protected array $ranges = [];

    /**
     * get auto LanguageRepository scope method
     * @param object|null $builder
     * @return object
     */
	public function languageRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}

    /**
     * the fired event after create method for repository
     *
     * @param array $result
     * @param array $clientData
     * @return void
     */
    public function eventFireAfterCreate(array $result = [],array $clientData = []): void
    {
        //
    }


    /**
     * the fired event after update method for repository
     *
     * @param array $result
     * @param array $clientData
     * @return void
     */
    public function eventFireAfterUpdate(array $result = [],array $clientData = []): void
    {
        //
    }

    /**
     * find by name for language repository
     *
     * @param null $name
     * @return $this
     */
	public function name($name = null) : LanguageRepositoryContract
    {
        $this->repository = $this->instance()->where('name',$name);

        return $this;
    }
}
