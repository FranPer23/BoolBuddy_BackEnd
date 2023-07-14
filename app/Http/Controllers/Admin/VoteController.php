<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function index()
    {
        $votes = Vote::where('profile_id',  Auth::user()->profile->id)->get();
        return view('admin.votes.index', compact('votes'));

    }
}
