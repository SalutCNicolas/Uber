<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function client(){
        return $this->BelongsTo(Client::class);
    }

    public function product(){
        return $this->BelongsToMany(Product::class);
    }

    public function seller(){
        return $this->BelongsTo(Seller::class);
    }

    public function shipper(){
        return $this->BelongsTo(Seller::class);
    }
}
