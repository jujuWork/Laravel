<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // on which page to return
        $posts = Post::all(); // Grabbing all the data in the database that is a post
        return view('posts.index', compact('posts')); // returning into this page
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
            // TO validate data in the required field
        $validated = $request->validate([
            'title' => 'required', // this targeted the required in the HTML
            'body' => 'required', // this targeted the required in the HTML
        ]);

        Post::create($validated);
        return redirect()->route('posts.index')->with('sucess', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $id)
    {
        $post = Post::findOrFail($id); // targets the ID of the user
        return view('posts.edit', compact('posts'));
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
