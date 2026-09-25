<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersKeyController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'is_private' => ['required', 'boolean'],
        ]);

        Auth::user()->usersKey()->updateOrCreate(
            [],
            [
                'is_private' => $request->boolean('is_private'),
            ]
        );

        return back();
    }
}
