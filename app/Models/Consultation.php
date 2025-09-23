<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    // Allow mass assignment for these fields
    protected $fillable = [
        "user_id",
        "designer_id",
        "scheduled_datetime",
        "purpose",
        "status",
        "notes",
    ];

    // A consultation belongs to a user (who booked it)
    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    // A consultation belongs to a designer (who provides the service)
    public function designer()
    {
        return $this->belongsTo(Designer::class, 'designer_id');
    }
}