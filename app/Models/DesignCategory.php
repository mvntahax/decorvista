<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesignCategory extends Model
{
    // Allow mass assignment for these fields
    protected $fillable = [
        "name",
        "slug",
    ];

    // A category can have many designs
    public function designs()
    {
        return $this->hasMany(Design::class, 'category_id');
    }
}