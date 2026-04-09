<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trader extends Model
{
    protected $fillable = [
        'name',
        'uploadStatus'
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
    public function delivery(){
        return $this->hasMany(Delivery::class);
    }
    public function order(){
        return $this->hasMany(Order::class);
    }

}
