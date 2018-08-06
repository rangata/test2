<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $fillable =
        [
            'offer_uid',
            'valid_from',
            'valid_until',
            'period',
            'customer_id'
        ];

    public function client()
    {
        return $this->belongsTo(Customers::class);
    }
}
