<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        $posts = $user->posts()->paginate(9);
        return view('profiles.index', compact('user',  'follows', 'posts'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function updateUserProfile(User $user)
    {
        try {
            $this->authorize('update', $user->profile);
        } catch (AuthorizationException $e) {
        }

        $data = request()->validate([
            'title' => 'required',
            'description' => request('description') ? 'required' : '',
            'url' => request('image') ? 'url' : '',
            'image' => 'image',
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));
        return redirect("/profile/{$user->id}");
    }

}
