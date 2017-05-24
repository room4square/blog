<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    
    public function index()
    {
        $posts = Post::latest()->get();
    	return view('posts.index', compact('posts'));
    }

    public function show($id)
    { 
        $posts = Post::find($id);
    	return view('posts.show',compact('posts'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
        //ceating new post using  the  request data
        //save it to the database
        //and then redrect

       // dd(request()->all());
       //save with model
       /*$post = new Post;
       $post->title = request('title');
       $post->body = request('body');
       $post->save();*/

       //or we can do
       /*Post::create([
           'title' => request('title'),
           'body' => request('body')
       ]);*/
       //or

       $this->validate(request(),[
            
            'title' => 'required',
            'body' => 'required'
       
       ]);

       Post::create(request(['title','body']));

       return redirect('/');

    }

}
