<?php

namespace App\Livewire\Student\Dashboard;

use Livewire\Component;

#[\Livewire\Attributes\Layout('layouts.student')]
class Forum extends Component
{
    public function render()
    {
        return view('livewire.student.dashboard.forum');
    }
}
