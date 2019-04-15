<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WareHouseManagement extends Model
{
    protected $table = 'ware_house_managements';
    protected $fillable = [
        'name', 'address', 'city', 'state', 'country', 'start_date', 'user_id',
    ];
}
