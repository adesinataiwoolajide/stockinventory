<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'product_slug', 'transaction_id', 'order_date', 'quantity', 'unit_price', 'total_price', 
        'total_order', 'customer_name','payment_method', 'outlet_id', 'user_id'
    ];
}
