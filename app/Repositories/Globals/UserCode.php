<?php

declare(strict_types=1);

namespace App\Repositories\Globals;

use Illuminate\Database\Eloquent\Builder;
use App\Facades\Authenticate\Authenticate;

/**
 * Class UserId
 * @package App\Repositories
 */
class UserCode
{
    /**
     * @var Builder
     */
    protected mixed $builder;

    /**
     * UserId constructor.
     * @param $builder
     */
    public function __construct($builder)
    {
        $this->builder = $builder;
    }

    /**
     * handler for global scope process
     *
     * @param $column
     * @return object
     */
    public function handle($column) : object
    {
        return $this->builder->where($column,Authenticate::code());
    }
}

