@extends('layouts.app')

@section('page_title')
    ALBUM
@endsection

@section('section_id')
    album-list
@endsection

@section('section_class')
    album-list
@endsection

@section('main_content')
    <h2>lista album</h2>

    {{-- ALBUM-LIST --}}
    <ul class="list">
        @foreach ($albums as $album)

            {{-- Album --}}
            <li class="album list-item">
                <a class="album-cover" href="{{ route('albums.show', $album) }}">

                    {{-- album-cover --}}
                    <img src="{{ $album->image->cover }}" alt="{{ $album->title }}">

                    {{-- filter --}}
                    <div class="filter">
                        <span class="show-info">
                            info
                        </span>
                    </div>
                </a>

                {{-- album-title --}}
                <span class="album-title">{{ $album->title }}</span>
                <span class="album-artist">{{ $album->artist }}</span>
            </li>
            {{-- Fine Album --}}
        @endforeach
    </ul>
    {{-- FINE ALBUM-LIST --}}
@endsection
