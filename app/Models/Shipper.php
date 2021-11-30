<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    use HasFactory;

    public function order(){
        return $this->HasOne(Shipper::class);
    }

    public function seller(){
        return $this->HasOne(Seller::class);
    }

}
