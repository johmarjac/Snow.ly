<div id="nav">
    <div id="nav-logo">
        <span>{{ config('snowly.page_name') }}</span>
    </div>
    <div id="nav-search">
        <form action="/search/" method="GET">
            <div class="input-group">
                <input type="text" name="keywords" placeholder="{{ Request::input('keywords') }}"/>
                <button class="button blue"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
    <div id="nav-menu">
        @if(!config('snowly.hidden_sections.blog'))
            <span><a href="/blog"><i class="far fa-comment-dots"></i> Blog</a></span>
        @endif
        @if(!config('snowly.hidden_sections.articles'))
            <span><a href="/articles"><i class="fas fa-paperclip"></i> Articles</a></span>
        @endif
        @if(!config('snowly.hidden_sections.projects'))
            <span><a href="/projects"><i class="far fa-clipboard"></i> Projects</a></span>
        @endif
        @if(!config('snowly.hidden_sections.about'))
            <span><a href="/about"><i class="far fa-address-card"></i> About</a></span>
        @endif
        <span><a href="/contact"><i class="far fa-envelope"></i> Contact</a></span>
    </div>
</div>
