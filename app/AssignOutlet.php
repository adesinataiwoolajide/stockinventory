<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignOutlet extends Model
{
    protected $table = 'assign_outlets';
    protected $fillable = [
        'outlet_id','distributor_id',
    ];
}
