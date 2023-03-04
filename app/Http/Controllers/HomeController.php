<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
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
            'slides' => Tour::latest()->limit(4)->get(),
            'tours' => Tour::limit(5)->get(),
            'organizers' => Organizer::all()
        ]);
    }

    public function news()
    {
        return view('landing.news', [
            'posts' => Post::latest()->search(request('search'))->paginate(6)->withQueryString(),
        ]);
    }

    public function post(Post $post)
    {
        return view('landing.single', [
            'post' => $post
        ]);
    }
}
