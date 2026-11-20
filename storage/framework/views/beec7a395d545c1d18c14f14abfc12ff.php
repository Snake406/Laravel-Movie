

<?php $__env->startSection('content'); ?>


<!-- =========================
     Page Header
========================== -->

<div class="page-header d-flex flex-wrap justify-content-between align-items-center">

    <div>

        <h2>
            <i class="fas fa-film mr-2"></i>
            <?php echo e($movie->movie_name); ?>

        </h2>

        <p>
            Movie information and production details.
        </p>

    </div>

    <a href="<?php echo e(route('index')); ?>"
       class="btn btn-light">

        <i class="fas fa-arrow-left mr-1"></i>
        Back to Movies

    </a>

</div>



<!-- =========================
     Movie Details
========================== -->

<div class="movie-details-card">

    <div class="row">


        <!-- Poster -->

        <div class="col-md-4 col-lg-3 text-center">

            <img
                src="//thumb.wikimedia.org/wikipedia/en/thumb/d/db/The_Matrix.png/250px-The_Matrix.png"
                alt="<?php echo e($movie->movie_name); ?> Poster"
                class="movie-details-poster"
            >

        </div>



        <!-- Movie Information -->

        <div class="col-md-8 col-lg-5 mb-4 mb-lg-0">

            <div class="movie-details-section">

                <h4>
                    <i class="fas fa-circle-info mr-2"></i>
                    Movie Information
                </h4>


                <div class="mb-3">

                    <span class="genre-badge">
                        <?php echo e($movie->genre); ?>

                    </span>

                    <span class="movie-stat ml-2">
                        <?php echo e($movie->movie_length); ?> min
                    </span>

                </div>


                <div class="movie-detail-item">

                    <strong>Description</strong>

                    <div class="movie-description">
                        <?php echo e($movie->movie_description); ?>

                    </div>

                </div>


                <div class="movie-detail-item">

                    <strong>Production Cost</strong>

                    €<?php echo e(number_format($movie->movie_cost, 2)); ?>


                </div>


                <div class="movie-detail-item">

                    <strong>Box Office Earnings</strong>

                    €<?php echo e(number_format($movie->earning, 2)); ?>


                </div>

            </div>

        </div>



        <!-- Production Details -->

        <div class="col-lg-4">

            <div class="movie-details-section">

                <h4>
                    <i class="fas fa-video mr-2"></i>
                    Production Details
                </h4>


                <div class="movie-detail-item">

                    <strong>Producer</strong>

                    <?php echo e($movie->producer->producer_first_name); ?>

                    <?php echo e($movie->producer->producer_last_name); ?>


                </div>


                <div class="movie-detail-item">

                    <strong>Director</strong>

                    <?php echo e($movie->director->director_first_name); ?>

                    <?php echo e($movie->director->director_last_name); ?>


                </div>


                <div class="movie-detail-item">

                    <strong>Production Company</strong>

                    <?php echo e($movie->production_company->company_name); ?>


                </div>

            </div>

        </div>


    </div>



    <!-- =========================
         Actions
    ========================== -->

    <hr class="my-4">


    <div class="d-flex justify-content-end">

        <a href="#"
           class="btn btn-outline-secondary mr-2">

            <i class="fas fa-edit mr-1"></i>
            Edit Movie

        </a>


        <a href="#"
           class="btn btn-outline-danger">

            <i class="fas fa-trash mr-1"></i>
            Delete Movie

        </a>

    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\SSS\movieapp\resources\views/movie/details.blade.php ENDPATH**/ ?>