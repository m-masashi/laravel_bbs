<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
	
	public function index()
	{
		$posts = Post::all();
		return View::make('bbc.index')->with('posts', $posts);
	}	
	
	//$posts = Post::all();
	//return View::make('bbc.index')->with('posts', $posts);
	//return View::make('welcome')->with('posts', $posts);
}

