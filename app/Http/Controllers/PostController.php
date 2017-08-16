<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        
        return view('posts.index', compact('posts'));
    }
    
    
    public function show(Post $post)
    {
        
        return view('posts.single', compact('post'));
    }
    
    
    public function create()
    {
        return view('posts.create');
    }

    
    public function store(Request $request)
    {    
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'groups' => 'required',
            'tags' => 'required'

        ]);
        $post = new Post;

            $post->author = 'Andres Quintero';  
            $post->type = 'idea';   
            $post->title = $request['title'];   
            $post->body = $request['body'];  
            $post->groups = $request['groups'];   
            $post->tags = $request['tags'];   
            $post->authors = $request['authors'];   
            $post->status = true;  
            $post->annonymous = false;   
            $post->image = 'image.jpg';  
        $post->save();
        
        return redirect('/');
    }
}
