<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'contact' => 'numeric',
            'gender' => 'string',
            'address' => 'string',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('profile_image')) {
            $gallery = $request->file('profile_image');
            $extension = $gallery->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            // Store the file in the 'public' disk under the 'profile_images' directory
            $path = $gallery->storeAs('profile_images', $filename, 'public');

            // Save the file path to the 'profile_image' attribute of the user model
            $profileImagePath = 'profile_images/' . $filename;
            dd($profileImagePath);
        } else {
            $profileImagePath = null;
        }

  

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'contact' => $request['contact'],
            'gender' => $request['gender'],
            'address' => $request['address'],
            // Handle profile image upload
            'profile_image' => $profileImagePath,
        
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
