<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariants extends Model
{
    protected $table = 'product_variants';
    protected $fillable = [
        'variant_name', 'category_id', 'variant_size',
    ];
}
