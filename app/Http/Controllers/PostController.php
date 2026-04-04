<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Aqui se muestran los post";
    }

    public function create(){
        return "Aqui se muestra el formulario para crear un post";
    }

    public function show($post){
        return "Aqui se muestra el post {$post}";
    }
}
