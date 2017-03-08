<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Video;

class VideosController extends Controller
{
    public function store()
    {
    	$user = Auth::user();

    	$this->validate(request(),[
    			'video_title' => 'required',
    			'video_description' => 'required',
    			'video_link' => 'required',
    			'video_category' => 'required'
    		]);

    	Video::create([
    			'title' => request('video_title'),
    			'description' => request('video_description'),
				'yt_code' => request('video_link'),
				'category_id' => request('video_category'),
				'user_id' => $user->id
    		]);

    	return redirect('/');
    }

    public function edit_video(Video $video)
    {
        return view('auth.editvideo', compact('video'));
    }

    public function delete_video(Video $video)
    {
        return view('auth.deletevideo', compact('video'));
    }
}
