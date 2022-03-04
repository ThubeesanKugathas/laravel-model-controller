@foreach($data as $movie)
    <div class="mb-4 ms_card">
        <h4>Titolo: {{ $movie->title}}</h4>
        <p>Titolo originale: {{ $movie->original_title }} - {{ $movie->nationality}}</p>
        <p>Data uscita: {{ $movie->date }}</p>
        <p>Voto medio: {{ $movie->vote }}</p>
    </div>
@endforeach