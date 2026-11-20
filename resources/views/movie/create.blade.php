@extends('layouts.main')

@section('content')


<!-- =========================
     Page Header
========================== -->

<div class="page-header d-flex flex-wrap justify-content-between align-items-center">

    <div>

        <h2>
            <i class="fas fa-film mr-2"></i>
            Add New Movie
        </h2>

        <p>
            Add a new movie to the database.
        </p>

    </div>

    <a href="{{ route('index') }}"
       class="btn btn-light">

        <i class="fas fa-arrow-left mr-1"></i>
        Back to Movies

    </a>

</div>



<!-- =========================
     Add Movie Form
========================== -->

<div class="card">

    <div class="card-header">

        <i class="fas fa-plus-circle mr-2"></i>
        Movie Information

    </div>


    <div class="card-body">

        <form action="{{ route('index') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf


            <div class="row">


                <!-- =========================
                     Left Side
                ========================== -->

                <div class="col-lg-8">


                    <!-- Movie Name -->

                    <div class="form-group">

                        <label for="movie_name">
                            Movie Name
                        </label>

                        <input type="text"
                               id="movie_name"
                               name="movie_name"
                               class="form-control"
                               placeholder="Enter movie name"
                               value="{{ old('movie_name') }}"
                               required>

                    </div>



                    <!-- Description -->

                    <div class="form-group">

                        <label for="description">
                            Description
                        </label>

                        <textarea id="description"
                                  name="description"
                                  class="form-control"
                                  rows="5"
                                  placeholder="Enter a short description of the movie..."
                                  required>{{ old('description') }}</textarea>

                    </div>



                    <div class="row">


                        <!-- Movie Cost -->

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="movie_cost">
                                    Movie Bugdet
                                </label>

                                <div class="input-group">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text">
                                            €
                                        </span>

                                    </div>

                                    <input type="number"
                                           id="movie_cost"
                                           name="movie_cost"
                                           class="form-control"
                                           min="0"
                                           step="1.00"
                                           value="{{ old('movie_cost') }}">

                                </div>

                            </div>

                        </div>



                        <!-- Movie Length -->

                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="movie_length">
                                    Movie Length (In Minutes)
                                </label>

                                <div class="input-group">

                                    <input type="number"
                                           id="movie_length"
                                           name="movie_length"
                                           class="form-control"
                                           placeholder="120"
                                           min="1"
                                           value="{{ old('movie_length') }}"
                                           required>

                                    <div class="input-group-append">

                                        <span class="input-group-text">
                                            Minutes
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>



                    <!-- Genre -->
                    <div class="form-group">

                        <label for="genre_id">
                            Enter a genre
                        </label>

                        <input type="text"
                               id="genre"
                               name="genre"
                               class="form-control"
                               placeholder="Enter Genre"
                               value="{{ old('movie_name') }}"
                               required>

                    </div>

                    


                    <!-- Producer -->

                    <div class="form-group">

                        <label for="producer_id">
                            Producer
                        </label>

                        <select id="producer_id"
                                name="producer_id"
                                class="custom-select"
                                required>

                            <option value="" selected disabled>
                                Select a producer
                            </option>
                            @foreach($movies->unique('producer_id') as $movproducer)

                                <option value="{{ $movproducer->producer->id }}">
                                    {{ $movproducer->producer->producer_first_name }} {{ $movproducer->producer->producer_last_name }}



                                </option>

                            @endforeach

                        </select>

                    </div>



                    <!-- Director -->

                    <div class="form-group">

                        <label for="director_id">
                            Director
                        </label>

                        <select id="director_id"
                                name="director_id"
                                class="custom-select"
                                required>

                            <option value="" selected disabled>
                                Select a director
                            </option>
                            @foreach($movies->unique('director_id') as $movdirector)
                                <option value="{{$movdirector->director_id}}">
                                        {{ $movdirector->director->director_first_name }} {{ $movdirector->director->director_last_name }}

                                </option>
                            @endforeach
                        </select>

                    </div>




                    <!-- Production Company -->

                    <div class="form-group">

                        <label for="production_company_id">
                            Production Company
                        </label>

                        <select id="production_company_id"
                                name="production_company_id"
                                class="custom-select"
                                required>

                            <option value="" selected disabled>
                                Select a production company
                            </option>

                            @foreach($movies->unique('production_company_id') as $prdcom)
                                <option value="{{$prdcom->director_id}}">
                                        {{ $prdcom->production_company->company_name }}

                                </option>                            
                            @endforeach

                        </select>

                    </div>


                </div>


                <!-- =========================
                     Right Side - Poster
                ========================== -->

                <div class="col-lg-4">

                    <div class="card bg-light h-100">

                        <div class="card-body">

                            <h5 class="font-weight-bold mb-3">

                                <i class="fas fa-image mr-1"></i>
                                Movie Poster

                            </h5>


                            <!-- Poster Preview -->

                            <div class="text-center mb-4">

                                <div id="posterPlaceholder"
                                     style="
                                        width: 100%;
                                        max-width: 240px;
                                        height: 340px;
                                        margin: auto;
                                        border-radius: 12px;
                                        background: #eef2f7;
                                        border: 2px dashed #cbd5e1;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        flex-direction: column;
                                        color: #64748b;
                                     ">

                                    <i class="fas fa-film"
                                       style="font-size: 45px;"></i>

                                    <span class="mt-2">
                                        Poster Preview
                                    </span>

                                </div>


                                <img id="posterPreview"
                                     src=""
                                     alt="Poster Preview"
                                     style="
                                        display: none;
                                        width: 100%;
                                        max-width: 240px;
                                        height: 340px;
                                        object-fit: cover;
                                        margin: auto;
                                        border-radius: 12px;
                                     ">

                            </div>



                            <!-- Poster Upload -->

                            <div class="form-group">

                                <label for="poster">
                                    Upload Poster
                                </label>

                                <div class="custom-file">

                                    <input type="file"
                                           class="custom-file-input"
                                           id="poster"
                                           name="poster"
                                           accept="image/png,image/jpeg,image/jpg,image/webp">

                                    <label class="custom-file-label"
                                           for="poster">

                                        Choose image

                                    </label>

                                </div>


                                <small class="form-text text-muted mt-2">

                                    Supported:
                                    JPG, JPEG, PNG or WEBP.

                                </small>

                            </div>

                        </div>

                    </div>

                </div>


            </div>



            <!-- =========================
                 Form Buttons
            ========================== -->

            <hr class="my-4">


            <div class="d-flex justify-content-end">

                <a href="{{ route('index') }}"
                   class="btn btn-outline-secondary mr-2">

                    Cancel

                </a>


                <button type="submit"
                        class="btn btn-primary px-4">

                    <i class="fas fa-save mr-1"></i>
                    Add Movie

                </button>

            </div>


        </form>

    </div>

</div>



@endsection



@section('scripts')

<script>

    $(document).ready(function () {

        $('#poster').on('change', function (event) {

            const file = event.target.files[0];

            if (file) {

                const reader = new FileReader();

                reader.onload = function (e) {

                    $('#posterPreview')
                        .attr('src', e.target.result)
                        .show();

                    $('#posterPlaceholder').hide();

                };

                reader.readAsDataURL(file);


                // Display filename
                $(this)
                    .next('.custom-file-label')
                    .html(file.name);

            }

        });

    });

</script>

@endsection