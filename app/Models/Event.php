<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vendor_id',
        'title',
        'description',
        'event_date',
        'expire_date',
        'venue',
        'status'
    ];

    // public function user(): BelongsTo {
    //     return $this->belongsTo(User::class);
    // }

    // public function bookings(): HasMany {
    //     return $this->hasMany(Booking::class);
    // }

    // public function invitations(): HasMany {
    //     return $this->hasMany(EventInvitation::class);
    // }

    // public function feedbacks(): HasMany {
    //     return $this->hasMany(Feedback::class);
    // }
}
