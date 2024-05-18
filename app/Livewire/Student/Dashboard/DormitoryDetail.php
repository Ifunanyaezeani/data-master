<?php

namespace App\Livewire\Student\Dashboard;

use App\Models\Room;
use App\Models\Booking;
use Livewire\Component;
use App\Models\Dormitory;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.student')]
class DormitoryDetail extends Component
{
    public $bookingId;

    public function render()
    {

        return view('livewire.student.dashboard.dormitory-detail',[
            'booking' => Booking::whereId($this->bookingId)
                        ->whereUserId(Auth::user()->id)
                        ->with('room.dormitory')
                        ->first(),
        ]);
    }
}
