@extends('layouts/default')
@section('title', 'Search')
@section('content')
<div id="search">
    @if($count == 0)
        !alert! No results found!
    @else
        <span>Results found: {{ $count }}</span>
    @endif
    @foreach($finds as $group => $items )
        @if(count($items) > 0)
            <div class="search-path-group">
                <a class="search-path" href="/{{ $group }}">/{{ $group }}</a>
                <ul>
                @foreach($items as $item)
                    <li><a href="/{{ $group }}/{{ $item->first()->slug }}">/{{ $item->first()->slug }}</a></li>
                @endforeach
                </ul>
            </div>
        @endif
    @endforeach
</div>
@endsection
