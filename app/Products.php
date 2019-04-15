<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'product_name', 'product_slug', 'supplier_id', 'variant_id', 'amount', 'quantity', 'unit_price', 
        'outlet_id', 'category_id'
    ];
}
