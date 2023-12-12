<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
//        dd($posts->getFirstMedia('post')->getUrl());

        return view('posts.index', ['posts' => $posts]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show() //Post $post
    {
        $post = Post::find(1);
//        dd($post->getFirstMedia('post')->getUrl());
//        dd($post);
        return view('posts.show')->with(['post' => $post]);
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
