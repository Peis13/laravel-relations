@extends('layouts.app')

@section('page_title'){{ $song->title }}@endsection

@section('main_content')
    <h2>{{ $song->title }}</h2>

    <img src="{{ $song->album->image->cover }}" alt="{{ $song->album->title }}">

    <p>album: {{ $song->album->title }}</p>
    <p>artista: {{ $song->album->artist }}</p>
    <p>genere: {{ $song->genre }}</p>
    <p>anno: {{ $song->album->year }}</p>
@endsection
