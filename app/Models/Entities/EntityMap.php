<?php

namespace App\Models\Entities;

class EntityMap
{
    /**
     * @param object $query
     * @return Stock
     */
    public function stock(object $query) : Stock
    {
        return new Stock($query);
    }
    
    /**
     * @param object $query
     * @return Product
     */
    public function product(object $query) : Product
    {
        return new Product($query);
    }
    
    /**
     * @param object $query
     * @return Registration
     */
    public function registration(object $query) : Registration
    {
        return new Registration($query);
    }
    
    /**
     * @param object $query
     * @return UserPhoto
     */
    public function userPhoto(object $query) : UserPhoto
    {
        return new UserPhoto($query);
    }
    
    /**
     * @param object $query
     * @return Timezone
     */
    public function timezone(object $query) : Timezone
    {
        return new Timezone($query);
    }
    
    /**
     * @param object $query
     * @return Currency
     */
    public function currency(object $query) : Currency
    {
        return new Currency($query);
    }
    
    /**
     * @param object $query
     * @return District
     */
    public function district(object $query) : District
    {
        return new District($query);
    }
    
    /**
     * @param object $query
     * @return City
     */
    public function city(object $query) : City
    {
        return new City($query);
    }
    
    /**
     * @param object $query
     * @return TableChange
     */
    public function tableChange(object $query) : TableChange
    {
        return new TableChange($query);
    }
    
    /**
     * @param object $query
     * @return Permission
     */
    public function permission(object $query) : Permission
    {
        return new Permission($query);
    }
    
    /**
     * @param object $query
     * @return Role
     */
    public function role(object $query) : Role
    {
        return new Role($query);
    }
    
    /**
     * @param object $query
     * @return SuperAdmin
     */
    public function superAdmin(object $query) : SuperAdmin
    {
        return new SuperAdmin($query);
    }
    
    /**
     * @param object $query
     * @return Language
     */
    public function language(object $query) : Language
    {
        return new Language($query);
    }
    
    /**
     * @param object $query
     * @return Localization
     */
    public function localization(object $query) : Localization
    {
        return new Localization($query);
    }
    
    /**
     * @param object $query
     * @return Country
     */
    public function country(object $query) : Country
    {
        return new Country($query);
    }

    /**
     * @param object $query
     * @return User
     */
    public function user(object $query) : User
    {
        return new User($query);
    }
}
