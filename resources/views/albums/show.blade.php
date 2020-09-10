@extends('layouts.app')

@section('page_title'){{ $album->title }}@endsection

@section('section_id'){{ 'album-show' }}@endsection

@section('section_class'){{ 'album-show' }}@endsection

@section('main_content')

    {{-- TOP --}}
    <div class="show-top">

        {{-- Album-cover --}}
        <div class="album-cover">
            <img src="{{ $album->image->cover }}" alt="{{ $album->title }}">
        </div>

        {{-- Album-info --}}
        <div class="album-info">

            {{-- title --}}
            <h3 class="album-title">{{ $album->title }}</h3>

            {{-- caption --}}
            <div class="caption">
                <span class="album-artist">{{ $album->artist }}</span>
                &nbsp;&nbsp;&#9679;&nbsp;
                <span class="album-year">{{ $album->year }}</span>
            </div>
        </div>
    </div>
    {{-- FINE TOP --}}

    <hr>

    {{-- BOTTOM --}}
    <div class="show-bottom">
        <ul class="songs-list">
            @foreach ($album->songs as $song)

                {{-- Song --}}
                <li class="song">
                    <span class="song-title">{{ $song->title }}</span>
                    <a class="info" href="{{ route('songs.show', $song) }}">>></a>
                </li>

            @endforeach
        </ul>
    </div>
    {{-- FINE BOTTOM --}}

    <a class="redirect" href="{{ route('albums.index') }}">torna all'indice</a>
@endsection
