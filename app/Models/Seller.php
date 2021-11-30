<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    
    public function order(){
        return $this->HasMany(Order::class);
    }

    public function shipper(){
        return $this->belongsTo(Shipper::class);
    }
}
