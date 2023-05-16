<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::get();

        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //     $post = new Post();
    //     $post->title = $request->title;
    //     $post->body = $request->body;

    //     $post->save();

        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return response('Data entered successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $posts = Post::onlyTrashed()->get();
        return view('posts.softdeleted', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $post = Post::findorFail($id);
        $post = Post::where('id', $id)->first();

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::findorFail($id);
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();
        $post->update(
            // [
            //     'title'=>$request->title,
            //     'body'=>$request->body
            // ]
            $request->all()

            );

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Post::findorFail($id)->delete();
        Post::destroy($id);
        return redirect()->route('posts.index');
    }

    public function restore($id) {
        // $posts = Post::onlyTrashed()->where('id', $id);

        // $posts->restore();

        Post::withTrashed()->where('id', $id)->restore();

        return redirect()->back();
    }

    public function forcedelete($id) {
        Post::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->back();
    }
}
