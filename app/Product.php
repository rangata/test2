<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'title',
        'model',
        'description'
    ];

    public function price()
    {
        return $this->hasMany(Price::class);
    }
}
