<?php

namespace App\Livewire\DormOwner\Dashboard;

use App\Models\Dormitory as ModelsDormitory;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.dorm-owner')]
class Dormitory extends Component
{
    public function render()
    {
        return view('livewire.dorm-owner.dashboard.dormitory',[
            'totalDorm' => ModelsDormitory::whereDormOwnerId(Auth::user()->id)->count(),
            'dormitories' => ModelsDormitory::latest()->whereDormOwnerId(Auth::user()->id)->paginate(10),
        ]);
    }
}
