<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function create(){
        return view('posts.create');
    }

    public function show($post){
        return view('posts.show', compact('post'));
    }
}
