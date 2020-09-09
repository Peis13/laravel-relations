@extends('layouts.app')

@section('main_content')
    <h2>lista completa canzoni</h2>

    <ul>
        @foreach ($songs as $song)
            <li>{{ $song->title }} - <a href="{{ route('songs.show', $song) }}">info</a></li>
        @endforeach
    </ul>
@endsection
