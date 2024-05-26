<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'roommate_pairing_id', 'message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pairing()
    {
        return $this->belongsTo(RoommatePairing::class, 'roommate_pairing_id');
    }
}
