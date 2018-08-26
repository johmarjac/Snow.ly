<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        return view('pages/blog')->with('posts', $posts->reverse());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'title' => 'required',
            'text' => 'required',
            'tags' => 'required'
        ]);

        if($validator->fails())
        {
            session()->flash('alert', ['text' => $validator->messages()->first(), 'type' => 'alert-danger']);
            return redirect()->back();
        }

        $post = new Post();
        $post->slug = slugify($request->title);
        $post->title = $request->title;
        $post->text = $request->text;
        $post->tags = $request->tags;
        $post->save();

        session()->flash('alert', ['text' => 'Post added successfully!', 'type' => 'alert-success']);

        return redirect()->back();
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        $validator = Validator::make($request->all(),
        [
            'title' => 'required',
            'text' => 'required',
            'tags' => 'required'
        ]);

        $post->title = $request->title;
        $post->tags = $request->tags;
        $post->text = $request->text;
        $post->slug = slugify($post->title);
        $post->save();

        session()->flash('alert', ['text' => 'Post edited successfully!', 'type' => 'alert-success']);

        return redirect()->back();
    }

    public function destroy(Request $request, Post $post)
    {
        $post->delete();

        session()->flash('alert', ['text' => 'Post deleted successfully!', 'type' => 'alert-success']);

        return redirect()->back();
    }
}
