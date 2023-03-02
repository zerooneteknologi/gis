<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tour;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('landing.home', [
            'posts' => Post::latest()->limit(4)->get(),
            'tours' => Tour::limit(4)->orderby('id', 'DESC')->get(),
        ]);
    }

    public function news()
    {
        return view('landing.news', [
            'posts' => Post::latest()->paginate(6),
        ]);
    }

    public function post(Post $post)
    {
        return view('landing.single', [
            'post' => $post
        ]);
    }
}
