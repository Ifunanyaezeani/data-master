<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $casts = [
        'room_pictures' => 'array',
    ];

    public function dormitory()
    {
        return $this->belongsTo(Dormitory::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function priceHistory()
    {
        return $this->hasMany(PriceHistory::class);
    }
}
