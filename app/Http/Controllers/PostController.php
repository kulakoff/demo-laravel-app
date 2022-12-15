<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return inertia('Post/index');
    }
    public function create(){
        return inertia('Post/create');
    }
    public function store(StoreRequest $request){
//        return dd($request);
        Post::create($request->validated());
        return  redirect()->route('post.index');
    }
}

