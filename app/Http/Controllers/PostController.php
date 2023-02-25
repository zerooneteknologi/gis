<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return $post;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', "Berita $post->postTitle telah dihapus");
    }
}
