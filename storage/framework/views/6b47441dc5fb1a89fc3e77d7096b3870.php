<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>MovieBase</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap">


    <style>

        /* =========================
           General
        ========================== */

        :root {
            --primary: #172554;
            --primary-light: #334e87;
            --accent: #4f46e5;

            --background: #f8fafc;
            --card: #ffffff;

            --text-main: #172033;
            --text-muted: #64748b;

            --border: #e8edf3;

            --danger: #dc3545;
            --success: #198754;
        }


        * {
            box-sizing: border-box;
        }


        html {
            min-height: 100%;
        }


        body {
            min-height: 100vh;

            margin: 0;

            background: var(--background);

            color: var(--text-main);

            font-family: 'Inter', sans-serif;
        }


        a {
            text-decoration: none;
        }


        a:hover {
            text-decoration: none;
        }


        /* =========================
           Navbar
        ========================== */

        .main-navbar {

            background: linear-gradient(
                120deg,
                var(--primary),
                var(--primary-light)
            );

            box-shadow: 0 4px 20px rgba(0, 0, 0, .08);

            padding-top: 14px;
            padding-bottom: 14px;
        }


        .navbar-brand {

            font-size: 1.35rem;

            font-weight: 800;

            letter-spacing: -.4px;

            color: white !important;
        }


        .navbar-brand-icon {

            width: 38px;
            height: 38px;

            display: inline-flex;

            align-items: center;
            justify-content: center;

            border-radius: 10px;

            margin-right: 8px;

            background: rgba(255,255,255,.12);

            color: white;
        }


        .main-navbar .nav-link {

            color: rgba(255,255,255,.78) !important;

            font-size: .9rem;

            font-weight: 600;

            padding-left: 16px !important;
            padding-right: 16px !important;

            transition: .2s;
        }


        .main-navbar .nav-link:hover {

            color: white !important;
        }


        .main-navbar .nav-link.active {

            color: white !important;

            background: rgba(255,255,255,.10);

            border-radius: 8px;
        }


        .navbar-user {

            display: flex;

            align-items: center;

            color: rgba(255,255,255,.85);

            font-size: .85rem;

            font-weight: 600;
        }


        .navbar-user-icon {

            width: 34px;
            height: 34px;

            display: flex;

            align-items: center;
            justify-content: center;

            margin-right: 8px;

            border-radius: 50%;

            background: rgba(255,255,255,.12);
        }


        /* =========================
           Main Page
        ========================== */

        .main-content {

            min-height: calc(100vh - 150px);

            padding-top: 35px;
            padding-bottom: 50px;
        }


        /* =========================
           Page Header
        ========================== */

        .page-header {

            background: linear-gradient(
                120deg,
                var(--primary),
                var(--primary-light)
            );

            color: white;

            border-radius: 18px;

            padding: 28px 30px;

            margin-bottom: 28px;

            box-shadow: 0 10px 30px rgba(23,37,84,.12);
        }


        .page-header h1,
        .page-header h2 {

            margin: 0;

            font-weight: 800;

            letter-spacing: -.5px;
        }


        .page-header p {

            margin-top: 8px;

            margin-bottom: 0;

            color: rgba(255,255,255,.72);
        }


        /* =========================
           Cards
        ========================== */

        .card {

            border: 1px solid var(--border);

            border-radius: 16px;

            box-shadow: 0 4px 20px rgba(0,0,0,.035);

            background: var(--card);

            overflow: hidden;
        }


        .card-header {

            background: white;

            border-bottom: 1px solid var(--border);

            padding: 18px 20px;

            font-weight: 700;
        }


        .card-body {

            padding: 20px;
        }


        .hover-card {

            transition:
                transform .2s,
                box-shadow .2s;
        }


        .hover-card:hover {

            transform: translateY(-4px);

            box-shadow: 0 12px 30px rgba(0,0,0,.08);
        }


        /* =========================
           Buttons
        ========================== */

        .btn {

            border-radius: 8px;

            font-weight: 600;

            font-size: .88rem;
        }


        .btn-primary {

            background: var(--accent);

            border-color: var(--accent);
        }


        .btn-primary:hover {

            background: #4338ca;

            border-color: #4338ca;
        }


        .btn-light {

            color: var(--primary);

            font-weight: 700;
        }


        .btn-circle {

            width: 34px;
            height: 34px;

            padding: 0;

            display: inline-flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;
        }


        /* =========================
           Forms
        ========================== */

        .form-control,
        .custom-select {

            border-radius: 8px;

            border: 1px solid #dce2ea;
        }


        .form-control:focus,
        .custom-select:focus {

            border-color: var(--accent);

            box-shadow: 0 0 0 .2rem rgba(79,70,229,.12);
        }


        label {

            font-weight: 600;

            font-size: .85rem;
        }


        /* =========================
           Tables
        ========================== */

        .table {

            background: white;
        }


        .table thead th {

            border-top: none;

            color: var(--text-muted);

            text-transform: uppercase;

            font-size: .72rem;

            letter-spacing: .4px;

            font-weight: 700;
        }


        .table td {

            vertical-align: middle;

            font-size: .9rem;
        }


        /* =========================
           Badges
        ========================== */

        .custom-badge {

            display: inline-block;

            padding: 6px 10px;

            border-radius: 30px;

            background: #eef2ff;

            color: #4338ca;

            font-size: .72rem;

            font-weight: 700;
        }


        /* =========================
           Search Panels
        ========================== */

        .search-panel {

            background: white;

            border: 1px solid var(--border);

            border-radius: 16px;

            padding: 18px;

            margin-bottom: 25px;

            box-shadow: 0 4px 20px rgba(0,0,0,.035);
        }
        /* =========================
        Movie Details
        ========================== */

        .movie-details-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 24px;
            box-shadow: 0 8px 25px rgba(0,0,0,.05);
        }

        .movie-details-poster {
            width: 100%;
            max-width: 280px;
            border-radius: 14px;
            object-fit: cover;
            box-shadow: 0 8px 20px rgba(0,0,0,.12);
        }

        .movie-details-section {
            height: 100%;
            padding: 20px;
            border-radius: 14px;
            background: #f8fafc;
            border: 1px solid var(--border);
        }

        .movie-details-section h4 {
            color: var(--primary);
            font-weight: 750;
            margin-bottom: 18px;
        }

        .movie-detail-item {
            margin-bottom: 14px;
            font-size: .9rem;
        }

        .movie-detail-item strong {
            display: block;
            color: var(--text-muted);
            font-size: .75rem;
            text-transform: uppercase;
            letter-spacing: .4px;
            margin-bottom: 3px;
        }

        .movie-description {
            line-height: 1.7;
            color: #475569;
        }

        .movie-stat {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 10px;
            background: #eef2ff;
            color: #4338ca;
            font-size: .8rem;
            font-weight: 700;
        }

        @media (max-width: 767px) {

            .movie-details-poster {
                display: block;
                margin: 0 auto 25px auto;
            }

        }

        /* =========================
           Alerts
        ========================== */

        .alert {

            border-radius: 12px;

            border: none;
        }


        /* =========================
           Footer
        ========================== */

        .main-footer {

            color: var(--text-muted);

            border-top: 1px solid var(--border);

            background: white;

            padding: 25px 0;

            font-size: .82rem;
        }


        /* =========================
           Mobile
        ========================== */

        @media (max-width: 767px) {

            .page-header {

                padding: 22px;
            }


            .main-content {

                padding-top: 20px;
            }


            .navbar-nav {

                padding-top: 12px;
            }

        }

    </style>

</head>


<body>


<!-- =========================
     Navbar
========================== -->

<nav class="navbar navbar-expand-lg navbar-dark main-navbar">

    <div class="container">


        <!-- Logo -->

        <a class="navbar-brand d-flex align-items-center"
           href="<?php echo e(route('index')); ?>">

            <span class="navbar-brand-icon">
                <i class="fas fa-film"></i>
            </span>

            MovieBase

        </a>


        <!-- Mobile Button -->

        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#mainNavbar">

            <span class="navbar-toggler-icon"></span>

        </button>


        <!-- Navbar Links -->

        <div class="collapse navbar-collapse"
             id="mainNavbar">


            <ul class="navbar-nav mr-auto">


                <li class="nav-item">

                    <a class="nav-link"
                       href="<?php echo e(route('index')); ?>">

                        <i class="fas fa-home mr-1"></i>

                        Home

                    </a>

                </li>


                <li class="nav-item">

                    <a class="nav-link"
                       href="#">

                        <i class="fas fa-film mr-1"></i>

                        Movies

                    </a>

                </li>


                <li class="nav-item">

                    <a class="nav-link"
                       href="#">

                        <i class="fas fa-building mr-1"></i>

                        Producers

                    </a>

                </li>


            </ul>
        </div>

    </div>

</nav>



<!-- =========================
     Main Content
========================== -->

<main class="main-content">

    <div class="container">


        <!-- Success Messages -->

        <?php if(session('success')): ?>

            <div class="alert alert-success alert-dismissible fade show">

                <i class="fas fa-check-circle mr-2"></i>

                <?php echo e(session('success')); ?>


                <button type="button"
                        class="close"
                        data-dismiss="alert">

                    <span>&times;</span>

                </button>

            </div>

        <?php endif; ?>


        <!-- Error Messages -->

        <?php if($errors->any()): ?>

            <div class="alert alert-danger">

                <strong>
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    Something went wrong.
                </strong>

                <ul class="mb-0 mt-2">

                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li>
                            <?php echo e($error); ?>

                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>

            </div>

        <?php endif; ?>


        <!-- Page Content -->

        <?php echo $__env->yieldContent('content'); ?>


    </div>

</main>



<!-- =========================
     Footer
========================== -->

<footer class="main-footer">

    <div class="container">

        <div class="d-flex flex-wrap justify-content-between">

            <span>
                MovieBase
            </span>

            <span>
                Movie Database Application
            </span>

        </div>

    </div>

</footer>



<!-- =========================
     JavaScript
========================== -->


<!-- jQuery -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>


<!-- Popper -->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>


<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>


<!-- Global JavaScript -->

<script>

    $(document).ready(function () {

        // Bootstrap tooltip support
        $('[data-toggle="tooltip"]').tooltip();

    });

</script>


<?php echo $__env->yieldContent('scripts'); ?>


</body>

</html><?php /**PATH C:\xampp\SSS\movieapp\resources\views/layouts/main.blade.php ENDPATH**/ ?>