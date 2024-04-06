<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserMenu extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(): void
    {
        Auth::guard('web')->logout();

        Session::invalidate();
        Session::regenerateToken();
        $this->redirect(route('index'), navigate: true);
    }

    public function active_link($route_name)
    {
        return route($route_name) == request()->url() ? 'active' : '';
    }
    
    public function render()
    {
        return view('livewire.pages.user-menu');
    }
}
