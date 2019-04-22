<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Distributors extends Model
{
    use SoftDeletes;
    protected $table = 'distributors';
    protected $primaryKey = 'distributor_id';
    protected $fillable = [
        'name', 'phone_one', 'phone_two', 'email', 'address', 'credit_limit', 'credit_reduction_per_month'
    ];
}
