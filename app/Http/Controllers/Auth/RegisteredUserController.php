<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfileRequest;
use App\Models\Profile;
use App\Models\Technology;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $technologies = Technology::all();
        return view('auth.register', compact('technologies'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {


        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'surname' => 'required | max:255|min:3',
            'mobile' => 'nullable|max:100|unique:profiles',
            'phone' => 'nullable|max:100|unique:profiles',
            'photo' => 'nullable',
            'cv' => 'nullable',
            'address' => 'required',
            'city' => 'required',
            'technologies' => 'required|max:255',
            'user_id' => 'nullable',
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //Salvataggio dell'immagini
        if ($request->hasFile('photo')) {
            $path = $request->photo->store('photo', 'public');
            $data['photo'] =  '/' . $path;
        }

        if ($request->hasFile('cv')) {
            $path = $request->cv->store('cv', 'public');
            $data['cv'] =  '/' . $path;
        }

        $data['user_id'] = $user->id;

        $profile = Profile::create(
            $data
        );
        // dd($request->technologies);

        $profile->technology()->attach($request->technologies);

        // if ($request->has('technologies')) {

        // }



        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
