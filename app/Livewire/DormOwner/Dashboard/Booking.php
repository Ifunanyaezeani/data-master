<?php

namespace App\Livewire\DormOwner\Dashboard;

use App\Models\Dormitory;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.dorm-owner')]
class Booking extends Component
{
    // Initialize an array to hold booked rooms
    public $bookedRooms = [];

    public function render()
    {
        $dormitories = Dormitory::where('dorm_owner_id', Auth::user()->id)->get();
        // Iterate over each dormitory
        foreach ($dormitories as $dormitory) {
            // Fetch rooms with any bookings for each dormitory
            $rooms = $dormitory->rooms()->whereHas('booking')->with('booking')->get();
            // Merge the booked rooms into the array
            $this->bookedRooms = array_merge($this->bookedRooms, $rooms->all());
        }

        return view('livewire.dorm-owner.dashboard.booking',[
            'bookings' => $this->bookedRooms,
        ]);
    }
}
