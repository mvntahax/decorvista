<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    // Show the logged-in user's profile edit form
    public function edit(): View
    {
        $user = User::find(auth()->id());
        return view('users.profile', [
            'user' => $user,
        ]);
    }

    // Update the logged-in user's profile information
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users,email,' . $request->user()->id],
            'username' => ['nullable', 'string', 'max:255', 'unique:users,username,' . $request->user()->id],
            'phone' => ['nullable', 'string', 'max:20'],
        ]);

        $user = $request->user();

        // Only update fields with non-empty values
        foreach ($validated as $field => $value) {
            if (!is_null($value) && $value !== '') {
                $user->{$field} = $value;
            }
        }

        // (Optional) handle email-specific logic if changed
        if ($user->isDirty('email')) {
            // Example: send email verification (currently not implemented)
        }

        $user->save();

        return redirect()->route('users.profile')->with('success', 'Profile updated successfully!');
    }

    // Delete the logged-in user's account (currently commented out)
    // public function destroy(Request $request): RedirectResponse
    // {
    //     $request->validateWithBag('userDeletion', [
    //         'password' => ['required', 'current_password'],
    //     ]);

    //     $user = $request->user();
    //     Auth::logout();
    //     $user->delete();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return Redirect::to('/');
    // }
}
