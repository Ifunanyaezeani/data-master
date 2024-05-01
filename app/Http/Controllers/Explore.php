<?php

namespace App\Http\Controllers;

use App\Enums\DormStatus;
use App\Models\Dormitory;
use Illuminate\Http\Request;

class Explore extends Controller
{
    public function index()
    {
        $ActiveDormitories = Dormitory::latest()->whereStatus(DormStatus::DRAFT->name)->paginate(10);
        return view('pages.explore', [
            "ActiveDormitories" => $ActiveDormitories
        ]);
    }
}
