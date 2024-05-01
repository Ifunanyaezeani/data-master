<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SideMenu extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(): void
    {
        Auth::guard('admin')->logout();

        Session::invalidate();
        Session::regenerateToken();
        $this->redirect(route('admin.login'), navigate: true);
    }


    public function render()
    {
        return view('livewire.admin.side-menu');
    }
}
