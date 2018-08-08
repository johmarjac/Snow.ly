<div id="blog-post">
    <div id="blog-post-header">
        <span id="blog-post-header-title">{{ $title }}</span>
        <div id="blog-post-header-author">
            <a href="{{ $link }}">{{ $author }}</a>
            <img src="{{ $avatar }}"/>
        </div>
    </div>
    <div id="blog-post-text">
        <p>{{ $text }}</p>
    </div>
    <div id="blog-post-footer">
        <span id="blog-post-footer-date">{{ $date }}</span>
        <div id="blog-post-footer-tags">
            {{ $tags }}
        </div>
    </div>
</div>
