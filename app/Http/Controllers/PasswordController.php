<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class PasswordController extends Controller
{
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        $user = $user;
        $user->password = Hash::make($request->new_password);

        if (!$user->save()) {
            return redirect()->back()
                ->with('error', '');
        }

        return redirect()->back()
            ->with('success', 'Password was changed successfully.');
    }
}
