<?php require_once "../layouts/header.php" ?>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <?php require_once "../layouts/navbar.php" ?>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Features</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Features</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="../img/product-2.jpg" alt="">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">Featured</p>
                        <h2 class="">A richer blend with a better taste </h2>
                    </div>
                    <p class="mb-4"><span class="fs-5 fw-bolder"> SURMA</span> best Tea is produced by blending the Best tea leaves of the finest tea gardens in Bangladesh. It comes to you in the most modern packaging designed to protect its excellent aroma and taste.</p>
                    <a href="#" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Article End -->

    <!-- Footer Start -->
    <?php require_once "../layouts/footer.php" ?>
    <!-- Footer End -->