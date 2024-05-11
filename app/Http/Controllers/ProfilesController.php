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
    public function index($user)
    {
        dd(User::find($user));
        return view('home');
        // TODO skończyłęm na 1:08:57s
    }


}
