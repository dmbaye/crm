<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user();

        return view('profile.show', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Validate submitted data
        $this->validate($request, [
            'name' => 'required|string|min:6'
        ]);

        $user = $user;

        $user->name = $request->name;

        if (!$user->save()) {
            return redirect()->back()
                ->with('error', 'The form contains errors. Please try again.');
        }

        return redirect()->back()
            ->with('success', 'Your profile was updated successfully.');
    }
}
