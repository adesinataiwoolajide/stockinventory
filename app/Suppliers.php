<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $table = 'suppliers';
    protected $fillable = [
        'name', 'phone_one', 'phone_two', 'email', 'address', 'city', 
        'state', 'country'
    ];
}
