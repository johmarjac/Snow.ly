<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        $articles->each(function($i, $k)
        {
            //$i->slug =
        });

        $categories = $articles->pluck('category')->unique();

        return view('pages/articles', ['articles' => $articles, 'categories' => $categories]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $article)
    {
        $article = Article::where('slug', 'like', $article)->first();

        $article->created_at_formatted = $article->created_at->format('jS F Y');
        $article->tags = explode(",", $article->tags);

        return view('pages/article_show', ['article' => $article]);
    }

    public function edit(Article $article)
    {
        //
    }

    public function update(Request $request, Article $article)
    {
        //
    }

    public function destroy(Article $article)
    {
        //
    }
}
