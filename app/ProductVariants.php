<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProductVariants extends Model
{

    use SoftDeletes;
    protected $table = 'product_variants';
    protected $primaryKey = 'variant_id';
    protected $fillable = [
        'variant_name', 'category_id', 'variant_size',
    ];
}
