<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Show the profile images.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('profiles.index', [
            'user' => $user,
        ]);
    }

}
