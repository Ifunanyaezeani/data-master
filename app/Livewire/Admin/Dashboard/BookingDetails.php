<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\Booking;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.admin')]
class BookingDetails extends Component
{
    public Booking $booking;
    public function render()
    {
        return view('livewire.admin.dashboard.booking-details',[
            'booking' => $this->booking,
        ]);
    }
}
