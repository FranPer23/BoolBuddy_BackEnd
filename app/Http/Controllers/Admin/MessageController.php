<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::where('profile_id',  Auth::user()->profile->id)->get();
        return view('admin.messages.index', compact('messages'));

    }
}
