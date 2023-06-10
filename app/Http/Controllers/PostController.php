<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::all();
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::all();
        return view('posts.create' ,compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {

         $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->type = $request->type;
        $post->user_id=$request->user_id;
        $post->save();
        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users=User::all();
        $post = Post::findorfail($id);
        return view('posts.edit', compact('post','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::findorfail($id);
         $post->title = $request->title;
        $post->description = $request->description;
        $post->type = $request->type;
        $post->user_id=$request->user_id;
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
          $post = Post::where('id', $id)->delete();
          return redirect()->route('posts.index');
    }
    public function showsoft(){
        $posts=Post::onlyTrashed()->get();
        return view('posts.soft',compact('posts'));
    }
    public function restor($id){
        $post=Post::withTrashed()->where('id',$id)->restore();
        return redirect()->back();
    }
    public function finldelet($id){
        $post=Post::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->back();
    }
}
