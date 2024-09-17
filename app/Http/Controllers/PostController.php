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
        //
        $posts = Post::query()->orderBy('created_at', 'desc')->paginate(30);
        return view('post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'content' => 'required|min:3',
        ]);

        $data['user_id'] = 1; //hardcoded for now. In the future, we will use the authenticated user.

        $post = Post::create($data);
        
        if ($post) 
        {
            return to_route('posts.show', $post)->with('message', 'Post created successfully');
        } 
        else 
        {
            return back()->with('message', 'Post was not created');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        $post = Post::query()->findOrFail($post->id);
        return view('post.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        
        return view('post.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
        $data = $request->validate([
            'content' => 'required|min:3',
        ]);

        $post->update($data);

        if ($post) 
        {
            return to_route('posts.show', $post)->with('message', 'Post updated successfully.');
        } 
        else 
        {
            return back()->with('message', 'Post was not created');
        }
        
    }

    /**
     * Delete confirmation view..
     */
    public function delete(Post $post)
    {
        //
        return view('post.delete', ['post' => $post]);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();

        return to_route('posts.index')->with('message', 'Post deleted successfully.');
    }
}
