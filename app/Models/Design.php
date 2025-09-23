<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    // Allow mass assignment for these fields
    protected $fillable = [
        "title",
        "description",
        "image",
        "designer_id",
        "category_id",
    ];

    // Each design belongs to one designer
    public function designer()
    {
        return $this->belongsTo(Designer::class, 'designer_id');
    }

    // Each design belongs to one category
    public function category()
    {
        return $this->belongsTo(DesignCategory::class, 'category_id');
    }

    // A design can be saved/liked by many users (many-to-many relation)
    public function users()
    {
        return $this->belongsToMany(User::class, 'design_id');
    }
}