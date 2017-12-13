<?php

namespace Aliens\Http\Controllers;

use Illuminate\Http\Request;
use Aliens\Post;

class PostsController extends Controller
{
    public function index(){
    	$posts = Post::orderBy('id', 'desc')->get();
    	return view('posts.index', compact('posts'));
    }
    public function show(Post $post){
    	return view('posts.show', compact('post'));
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
    	$post = new Post;
        $post->titulo = request('titulo');
        $post->descricao = request('descricao');
        $post->save();
        return redirect()->route('posts');
    }
}
