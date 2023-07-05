<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Profile;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technologies = Technology::all();
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        return view('admin.profiles.index', compact('profile', 'technologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileRequest $request)
    {
        $data = $request->validated();
        // $data['slug'] = Str::slug($data['name']);
        $data['user_id'] = Auth::user()->id;
        $profile = Profile::create($data);



        return redirect()->route('admin.profiles.show', $profile->id)->with('message', "Your profile has been created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        if ($profile->id == Auth::user()->id) {
            $technologies = Technology::all();
            return view('admin.profiles.show', compact('profile', 'technologies'));
        } else {
            return view('errors.403');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::findOrFail($id);

        if ($profile->user_id == Auth::user()->id) {
            $technologies = Technology::all();
            return view('admin.profiles.edit',  compact('profile', 'technologies'));
        } else {
            return view('errors.403');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request, $id)
    {
        $data = $request->validated();
        $profile = Profile::where('user_id', Auth::user()->id)->first();

        // Aggiornamento dell'immagine
        if ($request->hasFile('photo')) {
            if ($profile->photo) {
                Storage::delete($profile->photo);
            }
            $path = Storage::disk('public')->put('photo', $request->photo);
            $data['photo'] = '/' . $path;
        }

        $profile->update($data);
        if ($request->has('technologies')) {
            $profile->technology()->sync($request->technologies);
        } else {
            $profile->technology()->detach($request->technologies);
        }



        return redirect()->route('admin.profiles.index')->with('message', "{$profile->title} è stato modificato con successo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $profile = Profile::findOrFail($id);
        // $profile->technology()->detach();
        // $profile->delete();
        // return redirect()->route('admin.profiles.index');
    }
}
