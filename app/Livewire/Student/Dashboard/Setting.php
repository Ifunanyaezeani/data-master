<?php

namespace App\Livewire\Student\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.student')]
class Setting extends Component
{
    public function render()
    {
        return view('livewire.student.dashboard.setting');
    }
}
