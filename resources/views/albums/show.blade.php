<h2>titolo album: {{ $album->title }}</h2>

<div>
    <p>artista: {{ $album->artist }}</p>
    <p>anno: {{ $album->year }}</p>
</div>

<h3>lista canzoni</h3>

<ul>
    @foreach ($album->songs as $song)
        <li>{{ $song->title }} - <a href="#">info</a></li>
    @endforeach
</ul>

<a href="{{ route('albums.index') }}">torna all'indice</a>
