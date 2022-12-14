<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return inertia('Post/index');
    }
    public function create(){
        return inertia('Post/create');
    }
}
