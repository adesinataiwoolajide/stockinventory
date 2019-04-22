<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class WareHouseManagement extends Model
{
    use SoftDeletes;
    protected $table = 'ware_house_managements';
    protected $primaryKey = 'ware_house_id';
    protected $fillable = [
        'name', 'address', 'city', 'state', 'country', 'start_date', 'user_id',
    ];
}
