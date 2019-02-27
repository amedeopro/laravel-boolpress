<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index(){

      $posts = Post::limit(5)->orderBy('created_at', 'desc')->get();

      return view('home',compact('posts'));

    }

    public function show($id)
    {
      $post = Post::find($id); //find funziona solo ed esclusivamente per l'id
      if (empty($post)) {
      return abort(404);
      }
      return view('show', compact('post'));
    }

}
