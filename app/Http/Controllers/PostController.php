<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('post.index');
    }

    public function create(){
        return "Aqui se mostrara un nuevo formulario para crear un post";

    }

    public function show($post){
        return view('post.show',compact('post'));
        // ['post'=>$post]

    }
}
