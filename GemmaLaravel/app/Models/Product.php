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



    public function images()
    {
        return $this->hasMany(ProductImage::class, 'id_product');
    }

    public function changes()
    {
        return $this->hasMany(ProductChange::class, 'id_product');
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorites', 'id_product', 'id_user');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'id_product');
    }

    public function orders()
    {
        return $this->hasMany(OrderItem::class, 'id_product');
    }
}
