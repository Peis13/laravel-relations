<h2>{{ $song->title }}</h2>

<img src="{{ $song->album->image->cover }}" alt="{{ $song->album->title }}">

<p>artista: {{ $song->album->artist }}</p>
<p>genere: {{ $song->genre }}</p>
<p>anno: {{ $song->album->year }}</p>
