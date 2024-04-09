<?php

namespace App\Livewire\Student\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.auth')]
class Register extends Component
{
    public function render()
    {
        return view('livewire.student.auth.register');
    }
}
