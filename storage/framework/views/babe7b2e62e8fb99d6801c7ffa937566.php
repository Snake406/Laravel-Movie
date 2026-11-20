

<?php $__env->startSection('content'); ?>


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


    <a href=<?php echo e(route('create')); ?> class="btn btn-light">

        <i class="fas fa-plus mr-1"></i>

        Add Movie

    </a>

</div>


<div class="search-panel">

    Search

</div>


        <!-- Movie Card -->
<div class="row">
    <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                <?php echo e($movie->genre); ?>

                            </span>
                        </div>
                        <h5 class="movie-title">
                                <?php echo e($movie->movie_name); ?>

                        </h5>
                        <div class="movie-producer mb-3">
                            Published By: <?php echo e($movie->production_company->company_name); ?>

                        </div>
                        <div class="movie-meta mb-1">
                            <strong>Length:</strong>
                                <?php echo e($movie->movie_length); ?> minutes
                        </div>
                        <div class="movie-meta mb-3">
                            <strong>Producer:</strong>  
                            <?php echo e($movie->producer->producer_first_name); ?> <?php echo e($movie->producer->producer_last_name); ?>


                        </div>
                        <span class="rating-badge">
                           rating: to do
                        </span>
                    </div>
                </div>

                <!-- Actions -->
                <div class="movie-actions mt-auto d-flex gap-2">

                    <a href=<?php echo e(route('details', $movie->id)); ?> 
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\SSS\movieapp\resources\views/movie/index.blade.php ENDPATH**/ ?>