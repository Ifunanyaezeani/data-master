<?php

namespace App\Livewire\DormOwner;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.auth')]
class Login extends Component
{
    public function render()
    {
        return view('livewire.dorm-owner.login');
    }
}
