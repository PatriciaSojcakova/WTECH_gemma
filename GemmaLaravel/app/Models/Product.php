<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
        'price',
        'subcategory_id'
    ];


    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('material')->nullable();
            $table->string('stone_color')->nullable();
            $table->enum('purpose', ['muži', 'ženy', 'unisex']);
            $table->integer('quantity')->default(0);
            $table->decimal('price', 8, 2);
            $table->foreignId('subcategory_id')->constrained();
            $table->string('image');
            $table->timestamps();
        });
    }


    public function image(){
        return $this->hasMany(ProductImage::class, 'id_product');
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

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
