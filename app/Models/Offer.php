<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'trader_id',
        'name',
        'desc',
        'discount'
    ];

    public function trader(){
        return $this->belongsTo(Trader::class);
    }
}
