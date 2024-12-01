<x-app-layout>
    <div class="container p-3 bg-dark mt-3 rounded">
        <div class="mb-3 mx-3 mt-3">
            <span class="fs-5 text-white">Popular Movies</span>
        </div>   
        <div class="row g-3 mb-3">
            @foreach($popularMovies as $movie)
            <div class="col">
               <x-movie-card :movie="$movie" :genres="$genres" />
            </div> 
            @endforeach 
        </div>
    </div>
    <div class="container p-3 bg-dark mt-3 rounded">
        <div class="mb-3 mx-3 mt-3">
            <span class="fs-5 text-white">Now Playing</span>
        </div>   
        <div class="row g-3 mb-3">
            @foreach($nowPlayingMovies as $movie)
            <div class="col">
                <x-movie-card :movie="$movie" :genres="$genres" />
            </div> 
            @endforeach 
        </div>
    </div>
</x-app-layout>
