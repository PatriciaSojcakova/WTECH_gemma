<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductChange extends Model
{
    protected $table = 'product_changes';

    protected $fillable = [
        'add_date',
        'deletion_date',
        'last_change',
        'id_product',
        'id_admin_add',
        'id_admin_deletion',
        'id_admin_change'
    ];



    public function product(){
        return $this->belongsTo(Product::class, 'id_product');
    }
}
