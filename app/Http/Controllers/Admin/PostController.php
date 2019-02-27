<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::limit(5)->orderBy('updated_at', 'desc')->get();

        return view('admin.posts.index', compact('posts'));
    }


    public function create()
    {
        return view('admin.posts.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();

        $newPost = new Post();

        $newPost ->title = $data['title'];
        $newPost ->author = $data['author'];
        $newPost ->content = $data['content'];

        $newPost->save();

        return redirect()->route('admin.posts.index');
    }


    public function show($id)
    {
      $post = Post::find($id); //find funziona solo ed esclusivamente per l'id
      if (empty($post)) {
      return abort(404);
      }
      return view('admin.posts.show', compact('post'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
