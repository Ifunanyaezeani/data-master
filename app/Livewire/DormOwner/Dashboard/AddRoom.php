<?php

namespace App\Livewire\DormOwner\Dashboard;

use App\Models\Room;
use Livewire\Component;
use App\Models\Dormitory;
use App\Traits\SaveToCloud;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

#[Layout('layouts.dorm-owner')]
class AddRoom extends Component
{
    use  WithFileUploads, SaveToCloud;

    #[Validate('required')]
    public $roomName;

    #[Validate('required')]
    public $roomType;

    #[Validate('required')]
    public $capacity;

    #[Validate('required')]
    public $price;

    #[Rule('required')]
    #[Rule(['roomPictures.*' => 'image|max:2048'])]
    public $roomPictures = [];

    public $id;

    public function save()
    {
        $this->validate();
        $roomImages = [];
        if(!is_null($this->roomPictures)){
            foreach ($this->roomPictures as $roomPicture) {
                $roomImages[] = $this->cloudinary($roomPicture);
            }
        }
        Room::create([
            'dormitory_id' => $this->id,
            'room_name' => $this->roomName,
            'room_type' => $this->roomType,
            'capacity' => $this->capacity,
            'price' => $this->price,
            'availability' => "Available",
            'room_pictures' => $roomImages
        ]);
        Session::flash('message', 'You have successfully added a room to this dormitory');
        $this->roomName = '';
        $this->roomType = '';
        $this->capacity = '';
        $this->price = '';
        $this->roomName = '';
        $this->roomPictures = '';
    }

    public function render()
    {
        return view('livewire.dorm-owner.dashboard.add-room', [
            'dorm' => Dormitory::whereDormOwnerId(Auth::user()->id)->whereId($this->id)->with('rooms')->first(),
        ]);
    }
}
