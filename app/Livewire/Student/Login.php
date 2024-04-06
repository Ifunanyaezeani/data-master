<?php

namespace App\Livewire\Student;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

#[Layout('layouts.auth')]
class Login extends Component
{

    #[Validate('required|email')]
    public $email;
    #[Validate('required')]
    public $password;

    public $remember = false;

    public function attemptLogin(): void
    {

        $credentials = $this->validate();
        if (Auth::attempt($credentials, $this->remember)) {
            session()->regenerate();
            $this->redirectIntended('/', true);
        } else {
            $this->addError('email', 'Invalid email or password.');
        }
    }

    public function render()
    {
        return view('livewire.student.login');
    }
}
