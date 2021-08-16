<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store($id)
    {
        $comment = new Comment([
            'content' => 'ini adalah komentar'
        ]);

        $video = Video::find($id);
        $video->comments()->save($comment);
    }

    public function update($id)
    {
        $comment = Comment::find($id);
        $comment->content = 'update komentar';
        $comment->save();
    }

    public function delete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
    }

    public function manyToMany()
    {
        $video = Video::create([
            'title' => 'video keempat',
            'path' => 'video4.mp4'
        ]);

        $tag = Tag::find(2);
        $video->tags()->save($tag);
    }

    public function storeComment($id)
    {
        $comment = new Comment([
            'content' => 'ini adalah komentar'
        ]);

        $post = Post::find($id);
        $post->comments()->save($comment);
    }
}
