<?php

namespace App\Livewire\Student\Dashboard;

use Livewire\Component;
use App\Models\RoommatePairing;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.student')]
class Pair extends Component
{
    public function render()
    {
        return view('livewire.student.dashboard.pair', [
            'pair_requests' => RoommatePairing::wherePairId(Auth::user()->id)->get(),
        ]);
    }
}
