<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function dormitories()
    {
        return $this->hasMany(Dormitory::class, 'dorm_owner_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function profileCompletion()
    {
        // List of fields to check for completion
        $fields = [
            'first_name',
            'last_name',
            'email',
            'phone_number',
            'nationality',
            'birth_day',
            'gender',
            'profile_picture'
        ];

        // Count the number of filled fields
        $filledFields = 0;
        foreach ($fields as $field) {
            if (!empty($this->$field)) {
                $filledFields++;
            }
        }

        // Calculate the completion percentage
        $totalFields = count($fields);
        $completionPercentage = ($filledFields / $totalFields) * 100;

        return $completionPercentage;
    }
}
