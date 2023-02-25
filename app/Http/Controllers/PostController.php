<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        return view('admin.post.index', [
            'posts'      => Post::with('category')->latest()->get(),
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        Post::create([
            'category_id'   => $request->categoryId,
            'postTitle'     => $request->postTitle,
            'postSlug'      => Str::of($request->postTitle)->slug('-'),
            'postExcerpt'   => $request->postDesc,
            'postDesc'      => $request->postDesc
        ]);

        return back()->with('success', "Berita $request->postTitle telah ditambahkan");
    }

    public function edit(Post $post)
    {
        return $post;
    }

    public function update(Request $request, Post $post)
    {
        Post::where('id', $post->id)->update([
            'category_id'   => $request->categoryId,
            'postTitle'     => $request->postTitle,
            'postSlug'      => Str::of($request->postTitle)->slug('-'),
            'postExcerpt'   => $request->postDesc,
            'postDesc'      => $request->postDesc
        ]);

        return back()->with('success', "Berita $request->postTitle telah diubah");
    }

    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return back()->with('success', "Berita $post->postTitle telah dihapus");
    }
}
