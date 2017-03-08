<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function add_video()
    {
        $categories = Category::all();
        return view('auth.addvideo', compact('categories'));
    }

    public function add_category()
    {
        return view('auth.addcategory');
    }

    public function rename_category()
    {
        $categories = Category::all();
        return view('auth.renamecategory', compact('categories'));
    }

    public function delete_category()
    {
        $categories = Category::all();
        return view('auth.deletecategory', compact('categories'));
    }

    public function feature_video()
    {
        $categories = Category::all();
        return view('auth.pickcategory', compact('categories'));
    }
}
