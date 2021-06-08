<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequet;

class PostController extends Controller
{   
    

    public function index() 
    {
        // $posts = Post::all();
         $posts = Post::latest()->get();

        return view('index')
            ->with(['posts' => $posts]);
    }

    #Implicit Binding
    public function show(Post $post)
    {
        // $post = Post::findOrFail($id);
        return view('posts.show')
            ->with(['post'=> $post]);
    }
    
    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequet $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()
            ->route('posts.index');
    }

    public function edit(Post $post)
    {
        // $post = Post::findOrFail($id);
        return view('posts.edit')
            ->with(['post' => $post]);
    }

    public function update(PostRequet $request,Post $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()
            ->route('posts.show',$post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        
        return redirect()
            ->route('posts.index');
    }


}
