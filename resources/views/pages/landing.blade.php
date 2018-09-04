<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/css/default.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script defer src="{{asset('js/app.js')}}"></script>
    <script defer src="/js/core.js"></script>
    <title>{{ config('snowly.page_name') }} - 'Landing Page'</title>
</head>
<body>
    <div id="landing-container">
        <span id="landing-logo">{{ config('snowly.page_name') }}</span>
        <div id="landing-nav">
            @if(!config('snowly.hidden_sections.blog'))
                <span><a href="/blog"><i class="far fa-comment-dots"></i><span> Blog</span></a></span>
            @endif
            @if(!config('snowly.hidden_sections.articles'))
                <span><a href="/articles"><i class="fas fa-paperclip"></i><span> Articles</span></a></span>
            @endif
            @if(!config('snowly.hidden_sections.projects'))
                <span><a href="/projects"><i class="far fa-clipboard"></i><span> Projects</span></a></span>
            @endif
            @if(!config('snowly.hidden_sections.about'))
                <span><a href="/about"><i class="far fa-address-card"></i><span> About</span></a></span>
            @endif
            <span><a href="/contact"><i class="far fa-envelope"></i><span> Contact</span></a></span>
        </div>
    </div>
</body>
