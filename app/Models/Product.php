<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Allow mass assignment for product fields
    protected $fillable = [
        "name",
        "category",
        "brand",
        "price",
        "description",
        "image",
    ];

    // Each product belongs to a category
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    // Return formatted price (with commas)
    public function price()
    {
        return number_format($this->price);
    }
}