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
        'datum_odstranenia',
        'id_admin_pridania',
        'posledna_uprava',
        'id_admin_uprava'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_produktu');
    }
}
