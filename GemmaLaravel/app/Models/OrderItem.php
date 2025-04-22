<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Tests\Integration\Queue\Order;

class OrderItem extends Model
{
    protected $table = 'order_items';

    protected $fillable = [
        'id_order',
        'id_product',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class,'id_product');
    }

    public function order()
    {
        return $this->belongsTo(Order::class,'id_order');
    }
}
