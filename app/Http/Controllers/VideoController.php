<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index($id)
    {
        // $video = Video::find($id)->comment;
        // return view('video.index',compact('video'));

        $parentVideo = Video::find($id);
        $videos = $parentVideo->comments;
        return view('video.index',compact('videos'));
    }

    public function tags($id)
    {
        $parentVideo = Video::find($id);
        $videos = $parentVideo->tags;
        return view('video.index',compact('videos'));
    }
}
