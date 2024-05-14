<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $newGallery = new Gallery();
//        $newGallery->g_tytul = $request->galleryTitle;
//        $newGallery->g_podtytul = $request->gallerySubTitle;
//        $newGallery->g_kategoria = $request->galleryCategory;
//        $newGallery->g_katalog = $request->galleryCatalog;
//        $newGallery->g_data = $request->galleryDate;
//        $newGallery->save();

        $data = request()->validate([
            'caption' => 'required',
            'image' => 'required', 'image',
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

    /**
     * Display the specified resource.
     * Laravel automatically fetch $post with Posts in database
     * if function's argument is Post $post instead of $post
     * , so we don't need to
     * $user = User::findOrFail($user_id); - ProfilesController
     */
    public function show(Post $post) : Factory|View
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
