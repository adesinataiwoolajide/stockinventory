<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Employee extends Model
{
    use SoftDeletes;
    protected $table = 'employees';
    protected $primaryKey = 'employee_id';
    protected $fillable = [
        'full_name', 'address', 'phone_number', 'contract_type',
    ];
}
