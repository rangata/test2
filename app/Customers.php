<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'city',
        'email',
        'phone',
        'mobile'
    ];

    public function offers()
    {
        return $this->hasMany(Offer::class);

    }


}
