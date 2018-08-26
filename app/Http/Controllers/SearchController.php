<?php

namespace App\Http\Controllers;

use App\Post;
use App\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function filter(Request $request)
    {
        $keywords = $request->input('keywords');
        $articles = collect();
        $blog = collect();

        foreach (explode(',', $keywords) as $keyword)
        {
            $filtered = Article::where('name', 'like', "%" . $keyword . "%")
            ->orWhere('category', 'like', "%" . $keyword . "%")
            ->orWhere('tags', 'like', "%" . $keyword . "%")->get();

            if($filtered->count() > 0)
                $articles->push( $filtered );

            $filtered = Post::where('title', 'like', "%" . $keyword . "%")
            ->orWhere('tags', 'like', "%" . $keyword . "%")->get();

            if($filtered->count() > 0)
                $blog->push($filtered);
        }

        $n = $articles->count() + $blog->count();

        return view('pages/search')->with(['finds' => compact('articles', 'blog'), 'count' => $n]);
    }
}
