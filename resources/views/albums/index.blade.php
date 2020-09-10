@extends('layouts.app')

@section('page_title'){{ 'ALBUM' }}@endsection

@section('section_id'){{ 'album-list' }}@endsection

@section('section_class'){{ 'album-list' }}@endsection

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
                <h4 class="album-title">{{ $album->title }}</h4>
                <h5 class="album-artist caption">{{ $album->artists->name }}</h5>
            </li>
            {{-- Fine Album --}}
        @endforeach
    </ul>
    {{-- FINE ALBUM-LIST --}}
@endsection
