<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
class Categories extends Model
{
    use HasRoles;
    protected $guard_name = 'web';
    protected $table = 'categories';
    protected $fillable = [
        'category_name',
    ];
}
