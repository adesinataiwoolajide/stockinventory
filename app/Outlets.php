<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Outlets extends Model
{
    use SoftDeletes;
    protected $table = 'outlets';
    protected $primaryKey = 'outlet_id';
    protected $fillable = [
        'outlet_name'
    ];
}
