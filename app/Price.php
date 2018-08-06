<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'priceIn',
        'priceOut',
        'max_discount',
        'product_id'
    ];

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
