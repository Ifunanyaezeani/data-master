<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Amenity;
use App\Enums\DormStatus;
use App\Models\Dormitory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function search(Request $request)
    {
        $query = $request->input('query');
        $dormitories = Dormitory::where(function ($q) use ($query) {
            $q->where('dorm_name', 'LIKE', "%{$query}%")
                ->orWhere('regin', 'LIKE', "%{$query}%")
                ->orWhere('city', 'LIKE', "%{$query}%")
                ->orWhere('policy', 'LIKE', "%{$query}%")
                ->orWhere('description', 'LIKE', "%{$query}%");
        })
        ->where('status', DormStatus::PENDING->name)
        ->latest()
        ->paginate(10);

        return view('pages.explore', [
            "ActiveDormitories" => $dormitories,
            "amenities" => Amenity::all()
        ]);
    }

    public function singleDorm($slug)
    {
        $dormitory = Dormitory::whereSlug($slug)->with('amenities', 'rooms', )->first();
        $reviews = Review::where('dormitory_id', $dormitory->id)->get();
        $totalReviews = $reviews->count();
        $averageRating = $reviews->avg('rating');

        // Calculate the percentage of each rating
        $ratingDistribution = $reviews->groupBy('rating')->map(function ($group) use ($totalReviews) {
            return ($group->count() / $totalReviews) * 100;
        });
        return view('pages.single-dorm',[
            'dorm_details' => $dormitory,
            'reviews' => $reviews,
            'totalReviews' => $totalReviews,
            'averageRating' => $averageRating,
            'ratingDistribution' => $ratingDistribution,
        ]);
    }
}
