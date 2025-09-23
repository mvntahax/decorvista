<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    // Allow mass assignment for these fields
    protected $fillable = [
        "name",
        "title",
        "years_of_experience",
        "phone",
        "email",
        "address",
        "description",
        "specialization",
        "image",
    ];

    // A designer can have many designs
    public function designs()
    {
        return $this->hasMany(Design::class, 'designer_id');
    }
}
