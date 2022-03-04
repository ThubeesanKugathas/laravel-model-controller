@foreach($data as $movie)
    <div>
        <h1>{{ $movie->title}}</h1>
        <h2>{{ $movie->nationality }}</h2>
        <h2>{{ $movie->original_title }}</h2>
        <h2>{{ $movie->vote }}</h2>
        <h2>{{ $movie->date }}</h2>
    </div>
@endforeach