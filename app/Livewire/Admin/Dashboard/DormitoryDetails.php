<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.admin')]
class DormitoryDetails extends Component
{
    public $dormId;
    public function render()
    {
        return view('livewire.admin.dashboard.dormitory-details');
    }
}
