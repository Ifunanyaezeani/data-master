<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.auth')]
class Login extends Component
{
    public function render()
    {
        return view('livewire.admin.login');
    }
}
