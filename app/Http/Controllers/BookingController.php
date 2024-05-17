<?php

namespace App\Http\Controllers;

use App\Models\Dormitory;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingPage($dormId, Room $roomId, $slug)
    {
        return view('pages.book-now',[
            'dorm' => Dormitory::whereId($dormId)->with('amenities')->first(),
            'room' => $roomId
        ]);
    }
}
