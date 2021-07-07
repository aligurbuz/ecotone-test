<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Features\BaseManager;

class Permission extends Model
{
    use HasFactory,BaseManager;

    protected array $searchable = [];

    protected array $withQuery = [];

    protected $hidden = ['id'];
}
