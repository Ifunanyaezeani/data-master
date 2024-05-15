<?php

namespace App\Livewire\DormOwner\Dashboard;

use Livewire\Component;
use App\Models\Dormitory;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.dorm-owner')]
class AddAmenity extends Component
{
    public $id;

    public function render()
    {
        return view('livewire.dorm-owner.dashboard.add-amenity',[
            'dorm' => Dormitory::whereDormOwnerId(Auth::user()->id)->whereId($this->id)->first(),
        ]);
    }
}
