<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //API
    public function get()
    {
        return Post::all()->toJson();
    }

    public function index()
    {
        $posts = Post::all()->each(function($i, $k)
        {
            $i->created_at_formatted = $i->created_at->format('jS F Y');
            $i->tags = explode(",", $i->tags);
        });

        return view('pages/blog', ['posts' => $posts->reverse()]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->slug = slugify($request->title);
        $post->title = $request->title;
        $post->text = $request->text;
        $post->tags = $request->tags;
        $post->save();

        return redirect()->back();
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
