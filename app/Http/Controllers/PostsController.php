<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);  
    }

    public function index()
    {

        // TODO: clean up
        $posts = Post::latest();

        // TODO: refactor
        if($month = request('month')){
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = request('year')){
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();

    	return view('posts.index', compact('posts'));
    }

    public function show($post)
    {
        $post = Post::find($post);
        
    	return view('posts.show', compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {

    	$this->validate(request(), [
    		'title' => 'required|min:1|max:200',
    		'body' => 'required'
    	]);
    	
    	Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

    	return redirect('/');
    }	
}
