<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    //API
    public function get()
    {
        return Article::all()->toJson();
    }

    public function index($order = 'descending', $by = 'date', $filter = 'none')
    {
        $articles = Article::all()->each(function($i, $k)
        {
            $i->created_at_formatted = $i->created_at->format('jS F Y');
            $i->tags = explode(",", $i->tags);
        });

        $categories = $articles->pluck('category')->unique();

        if($filter != 'none')
        {
            $articles = $articles->filter(function($value, $key) use ($filter)
            {
                return $value->category == $filter;
            });
        }

        $articles = $articles->sortBy($by);

        if($order == 'descending')
            $articles = $articles->reverse();

        return view('pages/articles')->with(['articles' => $articles, 'categories' => $categories, 'order' => $order, 'by' => $by, 'filter' => $filter]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'name' => 'required',
            'tags' => 'required',
            'category' => 'required',
            'thumbnail' => 'required|image',
            'content' => 'required',
            'description' => 'required'
        ]);

        $article = new Article();
        $article->slug = slugify($request->name);
        $article->name = $request->name;
        $article->tags = $request->tags;
        $article->category = $request->category;
        $article->thumbnail = "/storage/articles/thumbnails/" . sprintf( 'article_%s.png', DB::table( 'articles' )->max( 'ID' ) + 1 );
        $article->content = $request->content;
        $article->description = $request->description;
        $article->save();

        Storage::disk( 'public' )->put( sprintf( '/articles/thumbnails/article_%s.png', DB::table( 'articles' )->max( 'ID' ) ), file_get_contents( $request->thumbnail ) );

        session()->flash('alert', ['text' => 'Article added successfully!', 'type' => 'alert-success']);

        return redirect()->back();
    }

    public function show(string $article)
    {
        $article = Article::where('slug', 'like', $article)->first();

        $article->created_at_formatted = $article->created_at->format('jS F Y');
        $article->tags = explode(",", $article->tags);

        return view('pages/article_show')->with('article', $article);
    }

    public function edit(Article $article)
    {
        //
    }

    public function update(Request $request, Article $article)
    {
        $validator = Validator::make($request->all(),
        [
            'name' => 'required',
            'tags' => 'required',
            'category' => 'required',
            'thumbnail' => 'image',
            'content' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('thumbnail'))
            Storage::disk( 'public' )->put( sprintf( '/articles/thumbnails/article_%s.png', $article->id ), file_get_contents( $request->thumbnail ) );

        $article->name = $request->name;
        $article->tags = $request->tags;
        $article->category = $request->category;
        $article->thumbnail = "/storage/articles/thumbnails/" . sprintf( 'article_%s.png', $article->id);
        $article->content = $request->content;
        $article->description = $request->description;
        $article->slug = slugify($article->name);
        $article->save();

        session()->flash('alert', ['text' => 'Article edited successfully!', 'type' => 'alert-success']);

        return redirect()->back();
    }

    public function destroy(Request $request, Article $article)
    {
        $article->delete();

        session()->flash('alert', ['text' => 'Article deleted successfully!', 'type' => 'alert-success']);

        return redirect()->back();
    }
}
