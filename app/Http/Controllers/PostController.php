<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        $posts = PostResource::collection($posts)->resolve();
        return inertia('Post/index',compact('posts'));
    }

    public function show(Post $post){
        return inertia('Post/Show', compact('post'));
    }

    public function create(){
        return inertia('Post/Create');
    }

    public function store(StoreRequest $request){
//        return dd($request);
        Post::create($request->validated());
        return  redirect()->route('post.index');
    }

    public function edit(Post $post){
        return inertia('Post/Edit', compact('post'));
    }

    public function update(Post $post){
        return inertia('Post/Edit', compact('post'));
    }
}

