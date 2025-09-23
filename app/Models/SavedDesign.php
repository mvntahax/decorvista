<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavedDesign extends Model
{
    protected $fillable = [
        "user_id",
        "design_id",
    ];

    // A saved design belongs to a single design
    public function design()
    {
        return $this->belongsTo(Design::class);
    }
}
