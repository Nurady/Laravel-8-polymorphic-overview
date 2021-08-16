<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($id)
    {
        // $post = Post::find($id)->comment;
        // return view('posts.index',compact('post'));

        $posts = Post::find($id)->comments;
        return view('posts.index',compact('posts'));
    }

    public function tags($id)
    {
        $posts = Post::find($id)->tags;
        return view('posts.index',compact('posts'));
    }
}
