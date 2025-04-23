<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'profile_image' => 'nullable|image|max:2048',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|string',
            'residence' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'bio' => 'nullable|string|max:1000',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'whatsapp' => 'nullable|url',
        ]);

        if ($request->hasFile('profile_image')) {
            if ($user->profile_image) {
                Storage::delete('public/' . $user->profile_image);
            }
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $path;
        }

        $user->fill($request->except(['profile_image']));
        $user->save();

        return back()->with('success', 'Profilo aggiornato con successo.');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password attuale non corretta.']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password aggiornata con successo.');
    }

    

    public function index()
    {
        return view('profile.index'); // Adatta il nome del file blade se diverso
    }
}
