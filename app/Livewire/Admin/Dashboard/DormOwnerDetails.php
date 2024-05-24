<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\Booking;
use Livewire\Component;
use App\Models\Dormitory;
use App\Models\DormOwner;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\WithoutUrlPagination;
use Illuminate\Support\Facades\Session;

#[Layout('layouts.admin')]
class DormOwnerDetails extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $id;

    public function approvedDormOwner(DormOwner $dormOwner)
    {
        $dormOwner->update([
            'email_verified_at' => now()
        ]);
        Session::flash('message', 'dormitory owner account was successfully verified');
        $this->redirect(route('admin.dorm-owner.details', $this->id), navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.dashboard.dorm-owner-details', [
            'dormOwner' => DormOwner::whereId($this->id)->first(),
            'dorm' => Dormitory::whereDormOwnerId($this->id)->latest()->paginate(6),
            'totalDorm' => Dormitory::whereDormOwnerId($this->id)->count(),
            'totalBookedDorm' => Booking::count(),
        ]);
    }
}
