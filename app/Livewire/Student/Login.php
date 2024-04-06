<?php

namespace App\Livewire\Student;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.auth')]
class Login extends Component
{
    public function render()
    {
        return view('livewire.student.login');
    }
}
