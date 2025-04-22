<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'id_user',
        'address',
        'city',
        'zipcode',
        'phone',
        'shipping',
        'payment',
        'sum',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class, 'id_order');
    }
}
