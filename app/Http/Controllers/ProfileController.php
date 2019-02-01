<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user();

        return view('profile.show', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $user->name = $request->name;

        if (!$user->save()) {
            return redirect()->back()->with('error', '');
        }

        return redirect()->back()->with('success', 'Your profile was updated successfully.');
    }
}
