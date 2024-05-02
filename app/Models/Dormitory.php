<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dormitory extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->belongsTo(User::class, 'dorm_owner_id');
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(DormitoryAmenity::class, 'dormitory_amenity');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
