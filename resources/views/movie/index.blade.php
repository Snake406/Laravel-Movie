@extends('layouts.main')

@section('content')


<div class="page-header d-flex justify-content-between align-items-center">

    <div>

        <h2>
            <i class="fas fa-film mr-2"></i>
            Movies Catalogue
        </h2>

        <p>
            Browse
        </p>

    </div>


    <a href={{route('create') }} class="btn btn-light">

        <i class="fas fa-plus mr-1"></i>

        Add Movie

    </a>

</div>


<div class="search-panel">

    Search

</div>


        <!-- Movie Card -->
<div class="row">
    @foreach ($movies as $movie)
        <div class="col-12 col-lg-6">
            <div class="movie-card h-100 p-3 d-flex flex-column">
                <div class="d-flex gap-3">
                    <!-- Movie Poster -->
                    <div class="movie-poster-area">
                        <img src="https://via.placeholder.com/170x200"
                            alt="Toy Story 2 Poster"
                            class="movie-poster">
                    </div>
                    <!-- Movie Information -->

                    <div class="flex-grow-1" style="min-width:0;">

                        <div class="mb-2">

                            <span class="genre-badge">
                                {{ $movie->genre }}
                            </span>
                        </div>
                        <h5 class="movie-title">
                                {{ $movie->movie_name }}
                        </h5>
                        <div class="movie-producer mb-3">
                            Published By: {{ $movie->production_company->company_name }}
                        </div>
                        <div class="movie-meta mb-1">
                            <strong>Length:</strong>
                                {{ $movie->movie_length }} minutes
                        </div>
                        <div class="movie-meta mb-3">
                            <strong>Producer:</strong>  
                            {{ $movie->producer->producer_first_name }} {{ $movie->producer->producer_last_name }}

                        </div>
                        <span class="rating-badge">
                           rating: to do
                        </span>
                    </div>
                </div>

                <!-- Actions -->
                <div class="movie-actions mt-auto d-flex gap-2">

                    <a href={{route('details', $movie->id) }} 
                    class="btn btn-primary flex-fill">
                        Details
                    </a>
                    <a href="#"
                    class="btn btn-outline-secondary flex-fill">
                        Edit
                    </a>
                    <a href="#"
                    class="btn btn-outline-danger flex-fill">
                        Delete
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>


@endsection