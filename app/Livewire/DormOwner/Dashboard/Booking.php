<?php

namespace App\Livewire\DormOwner\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.dorm-owner')]
class Booking extends Component
{
    public function render()
    {
        return view('livewire.dorm-owner.dashboard.booking');
    }
}
