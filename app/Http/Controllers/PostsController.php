<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Input;
use Redirect;
use App\Post;
use App\Test;
use View;

class PostsController extends Controller
{
    public function index(){
    	$posts = Post::paginate(5);
    	return View::make('posts.index',compact('posts'));
    }

    public function edit($id){
    	$post = Post::findOrFail($id);
    	return View::make('posts.edit',compact('post'));
    }

    public function view($slug){
        $post = Post::where('slug', $slug)->firstOrFail();
        return View::make('posts.view',compact('post'));
    }

    public function update($id){
        $post =Post::findOrFail($id);
        $post->update(Input::all());
        return Redirect::back()->with(['success'=>'Ca à fonctionné']);

    }

    public function test(){
    	$tests = Test::get();
    	return View::make('test', compact('tests'));
    }
}
