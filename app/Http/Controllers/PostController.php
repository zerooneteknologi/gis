<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

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
            'posts'      => Post::all()->sortBy('postTitle'),
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        Post::insert([
            'category_id'   => $request->categoryId,
            'postTitle'     => $request->postTitle,
            'postSlug'      => str()->slug($request->postTitle),
            'postImage'     => 'test',
            'postDesc'      => $request->postDesc
        ]);

        return back()->with('success', "Berita $request->postTitle telah ditambahkan");
        // if ($request->hasFile('upload')) {
        //     $originName = $request->file('upload')->getClientOriginalName();
        //     $fileName = pathinfo($originName, PATHINFO_FILENAME);
        //     $extension = $request->file('upload')->getClientOriginalExtension();
        //     $fileName = $fileName . '_' . time() . '.' . $extension;
    
        //     $request->file('upload')->move(public_path('media'), $fileName);
    
        //     $url = asset('media/' . $fileName);
        //     return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        // }
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
            'postSlug'      => str()->slug($request->postTitle),
            'postImage'     => 'test',
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
