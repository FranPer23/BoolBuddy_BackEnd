<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::where('profile_id', Auth::user()->profile->id)->orderBy('created_at','desc')->get();
        return view('admin.reviews.index', compact('reviews'));

    }
}
