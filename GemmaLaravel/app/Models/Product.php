<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'material',
        'stone_color',
        'purpose',
        'quantity',
        'price'
    ];



    public function image(){
        return $this->hasMany(ProductImage::class, 'id_product');
    }

    public function change(){
        return $this->hasMany(ProductChange::class, 'id_product');
    }

    public function favorites(){
        return $this->hasMany(Favorite::class, 'id_product');
    }

    public function cart(){
        return $this->hasMany(Cart::class, 'id_product');
    }

    public function order(){
        return $this->hasMany(OrderItem::class, 'id_product');
    }
}
