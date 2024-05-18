<?php

namespace App\Http\Controllers;

use App\Enums\DormStatus;
use App\Models\Amenity;
use App\Models\Dormitory;
use Illuminate\Http\Request;

class Explore extends Controller
{
    public function index()
    {
        $ActiveDormitories = Dormitory::latest()->whereStatus(DormStatus::PENDING->name)->with('amenities')->paginate(10);
        return view('pages.explore', [
            "ActiveDormitories" => $ActiveDormitories,
            "amenities" => Amenity::all()
        ]);
    }

    public function singleDorm($slug)
    {
        return view('pages.single-dorm',[
            'dorm_details' => Dormitory::whereSlug($slug)->with('amenities', 'rooms')->first(),
        ]);
    }
}
