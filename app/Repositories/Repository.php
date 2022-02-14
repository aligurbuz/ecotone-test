<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\Resources\User\Contracts\UserRepositoryContract;
use App\Repositories\Resources\Stocks\Contracts\StocksRepositoryContract;
use App\Repositories\Resources\Products\Contracts\ProductsRepositoryContract;
use App\Repositories\Resources\Registration\Contracts\RegistrationRepositoryContract;
use App\Repositories\Resources\User\Contracts\PhotosRepositoryContract;
use App\Repositories\Resources\Timezones\Contracts\TimezonesRepositoryContract;
use App\Repositories\Resources\Currencies\Contracts\CurrenciesRepositoryContract;
use App\Repositories\Resources\Countries\Contracts\DistrictsRepositoryContract;
use App\Repositories\Resources\Countries\Contracts\CitiesRepositoryContract;
use App\Repositories\Resources\Mix\Contracts\TableChangesRepositoryContract;
use App\Repositories\Resources\Gate\Contracts\PermissionsRepositoryContract;
use App\Repositories\Resources\Gate\Contracts\RolesRepositoryContract;
use App\Repositories\Resources\SuperAdmins\Contracts\SuperAdminsRepositoryContract;
use App\Repositories\Resources\Localizations\Contracts\LanguageRepositoryContract;
use App\Repositories\Resources\Localizations\Contracts\LocalizationsRepositoryContract;
use App\Repositories\Resources\Logger\Contracts\LoggerRepositoryContract;
use App\Repositories\Resources\Countries\Contracts\CountriesRepositoryContract;

/**
 * Class Repository
 * @package App\Repositories
 */
class Repository
{
    /**
     * get stock repository instance
     *
     * @return StocksRepositoryContract
     */
    public static function stock() : StocksRepositoryContract
    {
        return app()->get(StocksRepositoryContract::class);
    }
    
    /**
     * get product repository instance
     *
     * @return ProductsRepositoryContract
     */
    public static function product() : ProductsRepositoryContract
    {
        return app()->get(ProductsRepositoryContract::class);
    }
    
    /**
     * get registration repository instance
     *
     * @return RegistrationRepositoryContract
     */
    public static function registration() : RegistrationRepositoryContract
    {
        return app()->get(RegistrationRepositoryContract::class);
    }
    
    /**
     * get userPhoto repository instance
     *
     * @return PhotosRepositoryContract
     */
    public static function userPhoto() : PhotosRepositoryContract
    {
        return app()->get(PhotosRepositoryContract::class);
    }

    /**
     * get timezone repository instance
     *
     * @return TimezonesRepositoryContract
     */
    public static function timezone() : TimezonesRepositoryContract
    {
        return app()->get(TimezonesRepositoryContract::class);
    }

    /**
     * get currency repository instance
     *
     * @return CurrenciesRepositoryContract
     */
    public static function currency() : CurrenciesRepositoryContract
    {
        return app()->get(CurrenciesRepositoryContract::class);
    }

    /**
     * get district repository instance
     *
     * @return DistrictsRepositoryContract
     */
    public static function district() : DistrictsRepositoryContract
    {
        return app()->get(DistrictsRepositoryContract::class);
    }

    /**
     * get city repository instance
     *
     * @return CitiesRepositoryContract
     */
    public static function city() : CitiesRepositoryContract
    {
        return app()->get(CitiesRepositoryContract::class);
    }

    /**
     * get tableChange repository instance
     *
     * @return TableChangesRepositoryContract
     */
    public static function tableChange() : TableChangesRepositoryContract
    {
        return app()->get(TableChangesRepositoryContract::class);
    }

    /**
     * get permission repository instance
     *
     * @return PermissionsRepositoryContract
     */
    public static function permission() : PermissionsRepositoryContract
    {
        return app()->get(PermissionsRepositoryContract::class);
    }

    /**
     * get role repository instance
     *
     * @return RolesRepositoryContract
     */
    public static function role() : RolesRepositoryContract
    {
        return app()->get(RolesRepositoryContract::class);
    }

    /**
     * get superAdmin repository instance
     *
     * @return SuperAdminsRepositoryContract
     */
    public static function superAdmin() : SuperAdminsRepositoryContract
    {
        return app()->get(SuperAdminsRepositoryContract::class);
    }

    /**
     * get language repository instance
     *
     * @return LanguageRepositoryContract
     */
    public static function language() : LanguageRepositoryContract
    {
        return app()->get(LanguageRepositoryContract::class);
    }

    /**
     * get localization repository instance
     *
     * @return LocalizationsRepositoryContract
     */
    public static function localization() : LocalizationsRepositoryContract
    {
        return app()->get(LocalizationsRepositoryContract::class);
    }

    /**
     * get country repository instance
     *
     * @return CountriesRepositoryContract
     */
    public static function country() : CountriesRepositoryContract
    {
        return app()->get(CountriesRepositoryContract::class);
    }

    /**
     * get user repository instance
     *
     * @return UserRepositoryContract
     */
    public static function user() : UserRepositoryContract
    {
        return app()->get(UserRepositoryContract::class);
    }

    /**
     * get logger repository instance
     *
     * @return LoggerRepositoryContract
     */
    public static function logger() : LoggerRepositoryContract
    {
        return app()->get(LoggerRepositoryContract::class);
    }

    /**
     * get call static for repository
     *
     * @param string|null $name
     * @param array $arguments
     * @return bool;
     */
    public static function __callStatic(?string $name,array $arguments = []) : bool
    {
        return false;
    }
}
