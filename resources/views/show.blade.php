<x-app-layout>
    <div class="container-fluid p-5 mt-3">
        <div class="d-flex">
                <div class="mx-5">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/'. $movie['poster_path'] }}.jpg" alt="" height="420px" width="280px">
                </div>
            <div class="text-white gap-2 p-1 mx-2">
                <span class="fw-bold fs-4">{{ $movie['original_title'] }}</span></br>
                <span class="custom-font text-secondary">⭐ {{ $movie['vote_average'] * 10 . '%'}}</span>
                <span class="custom-font text-secondary">|</span>
                <span class="custom-font text-secondary">{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                <span class="custom-font text-secondary">|</span>
                <span class="custom-font text-secondary">
                    @foreach($movie['genres'] as $genre)
                        {{ $genre['name'] }} @if(!$loop->last), @endif
                    @endforeach
                    </span>
                <div class="mt-4">
                    <p class="custom-font">{{ $movie['overview'] }}</p>
                </div>
                <div class="mt-5">
                    <p class="fw-bold fs-6">Featured Crew</p>
                    <div class="d-flex mt-3">
                        @foreach($movie['credits']['crew'] as $crew)
                            @if($loop->index < 2)
                                <div class="me-5">
                                    <div class="fs-6">{{ $crew['name'] }}</div>
                                    <div class="text-secondary custom-font">{{ $crew['job'] }}</div>
                                </div>  
                            @endif  
                        @endforeach
                    </div>
                </div>
                <div x-data="{ isOpen: false }">
                    @if (count($movie['videos']['results']) > 0)
                    <div class="mt-5">
                        @php
                            $lastVideo = collect($movie['videos']['results'])->last();
                        @endphp
                        <button @click="isOpen = true" class="btn btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-play-circle" viewBox="0 1 17 17">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
                            </svg>
                            <span class="">Play Trailer</span>
                        </button>
                    </div>
                    @endif
                    <div x-show="isOpen" x-transition x-cloak class="position-fixed top-0 start-0 w-100 h-100 flex items-center justify-center bg-black bg-opacity-50">
                        <div class="container p-3">
                            <div class="d-flex justify-content-end">
                                <button @click="isOpen = false" class="btn btn-dark mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708z"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="container text-center"> 
                                <iframe src="https://www.youtube.com/embed/{{ $lastVideo['key'] }}" allow="autplay; encrypted=media" frameborder="0" width="800px" height="450px" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5 border-top border-bottom border-secondary"></br>
        <div class="fs-4 fw-bold text-white" style="margin-top: 50px; margin-left: 128px">Cast</div>
        <div style="margin-bottom: 50px">
            <div class="row mx-5 mt-2 p-2 gap-3 d-flex justify-content-center">
                @foreach($movie['credits']['cast'] as $cast)
                    @if($loop->index < 10)
                        <div class="col-2 col-sm-2 mb-2">
                            <div class="">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $cast['profile_path'] }}.jpg" alt="" height="250px" width="168px">
                            </div>
                            <div class="custom-font text-white mt-3">{{ $cast['character'] }}</div>
                            <span class="custom-font text-secondary mt-3">{{ $cast['name'] }}</span>                              
                        </div>  
                    @endif 
                @endforeach
            </div>
        </div>    
    </div>
</x-app-layout>