<div class="article">
    <div class="article-header">
        <span><a href="/articles/{{ slugify($article->name) }}">{{ $article->name }}</a></span>
    </div>
    <div class="article-image">
        <img src="{{ $article->thumbnail }}"/>
    </div>
    <div class="article-description">
        <p>{{ $article->description }}</p>
    </div>
</div>
