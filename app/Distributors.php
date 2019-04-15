<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributors extends Model
{
    protected $table = 'distributors';
    protected $fillable = [
        'name', 'phone_one', 'phone_two', 'email', 'address', 'credit_limit', 'credit_reduction_per_month'
    ];
}
