<div>
    <a href="{{ route('dashboard.show', $movie['id']) }}">
        <div class="card text-white bg-dark border-0 hover-zoom" style="width: 13rem; height: 26rem">
            <img class="card-img-top" src="{{ 'https://image.tmdb.org/t/p/w500/'. $movie['poster_path'] }}.jpg" alt="" height="300px">
            <div class="card-body p-3">
                <p class="card-title fw-bold">{{ $movie['title'] }}</p>
                <div class="">
                    <p class="custom-font-genre">
                        @foreach($movie['genre_ids'] as $genre)
                        {{ $genres->get($genre) }}@if(!$loop->last), @endif
                        @endforeach
                    </p>
                </div>
            </div>                   
        </div>
    </a>
</div>