@extends('layouts.app')

@section('main_content')
    <h2>lista albums</h2>

    <ul>
        @foreach ($albums as $album)
            <li>{{ $album->title }} - <a href="{{ route('albums.show', $album) }}">dettagli</a></li>
        @endforeach
    </ul>
@endsection
