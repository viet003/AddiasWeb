<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_product',
        'price',
        'quantity',
        'gender'
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
  
    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }
}
