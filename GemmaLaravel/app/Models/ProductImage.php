<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'images';

    protected $fillable = [
        'path',
        'id_product'
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'id_product');
    }
}
