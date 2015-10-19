<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;


class PostsController extends Controller
{
    public function index(){

      $posts = Post::all();


      return view('posts.index')->with('posts', $posts);
    }
    public function show($id){

      $post = Post::findOrFail($id);

      return view('posts.show')->with('post', $post);
    }
    public function create(){

      return view('posts.create');
    }
    public function store(){
      $store = Request::all();

      Post::create($store);
      return redirect('posts');
    }
}
