<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Video;
use App\Feature;

class CategoriesController extends Controller
{
    public function frontpage()
    {
    	$categories = Category::all();
    	$category = $categories[0];
    	$feature = Feature::where('category_id','=',$category->id)->get();
    	if (!$feature->isEmpty())
    	{
    		$feature_video = Video::where('id','=',$feature[0]->video_id)->get();
    		$videos = Video::where('category_id','=',$category->id)->where('id','!=',$feature[0]->video_id)->orderBy('id','desc')->paginate(9);
    	}
    	else
    	{
    		$feature_video = null;
    		$videos = Video::where('category_id','=',$category->id)->orderBy('id','desc')->paginate(9);
    	}

    	return view('categories.showcategory', compact('category','videos','feature_video','categories'));
    }

    public function showcategory(Category $category)
    {
    	$feature = Feature::where('category_id','=',$category->id)->get();
    	if (!$feature->isEmpty())
    	{
    		$feature_video = Video::where('id','=',$feature[0]->video_id)->get();
    		$videos = Video::where('category_id','=',$category->id)->where('id','!=',$feature[0]->video_id)->orderBy('id','desc')->paginate(9);
    	}
    	else
    	{
    		$feature_video = null;
    		$videos = Video::where('category_id','=',$category->id)->orderBy('id','desc')->paginate(9);
    	}
    	$categories = Category::all();

    	return view('categories.showcategory', compact('category','videos','feature_video','categories'));
    }

    public function store()
    {
    	$this->validate(request(),[
    			'category_title' => 'required'
    		]);

    	Category::create([
    			'name' => request('category_title')
    		]);
    	
    	return redirect('/');
    }

    public function rename()
    {
    	$this->validate(request(),[
    			'category_title' => 'required',
    			'category_id' => 'required'
    		]);

    	Category::where('id', request('category_id'))
    				->update(['name' => request('category_title')]);
    	
    	return redirect('/');
    }

    public function delete()
    {
    	$this->validate(request(),[
    			'old_category_id' => 'required',
    			'new_category_id' => 'required',
    		]);

    	Category::where('id', request('old_category_id'))
    				->forceDelete();
    	Video::where('category_id', request('old_category_id'))
    				->update(['category_id' => request('new_category_id')]);
    	
    	return redirect('/');
    }

	public function pickfeature()
	{
		$this->validate(request(),[
				'category_id' => 'required'
			]);

		$videos = Video::where('category_id','=',request('category_id'))->get();

		return view ('auth.pickvideo', compact('videos'));
	}

	public function pickfeaturevideo()
	{
		$this->validate(request(),[
				'video_id' => 'required'
			]);

		$video = Video::where('id','=',request('video_id'))->get();
		$cat_id = $video[0]->category_id;
		
		$feature = Feature::where('category_id','=',$cat_id)->get();
    	if ($feature->isEmpty())
    	{	
    		Feature::create([
    				'category_id' => $cat_id,
    				'video_id' => request('video_id')
    			]);
    	}
    	else
    	{
			Feature::where('category_id', $cat_id)
    				->update(['video_id' => request('video_id')]);
    	}
		return redirect('/');
	}
}
