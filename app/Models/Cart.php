<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // Allow mass assignment for these fields
    protected $fillable = [
        "user_id",
        "product_id",
        "quantity",
    ];

    // Each cart item belongs to a single product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}