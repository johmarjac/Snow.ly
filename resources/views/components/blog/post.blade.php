<div class="post">
    <div class="post-header">
        <a name="{{ slugify($post->title) }}"></a>
        <span class="post-header-title">{{ $post->title }}</span>
        <a href="#{{ slugify($post->title) }}" class="flexitem-right">
            <i class="fas fa-link"></i>
        </a>
    </div>
    <div class="post-text">
        {!! $post->text !!}
    </div>
    <div class="post-footer">
        <span class="post-footer-date"><i class="far fa-calendar-alt"></i><span>{{ $post->created_at_formatted }}</span></span>
        <div class="post-footer-tags">
            @foreach ($post->tags as $tag)
                @component('components/tag')
                    @slot('tag', $tag)
                @endcomponent
            @endforeach
        </div>
    </div>
</div>
