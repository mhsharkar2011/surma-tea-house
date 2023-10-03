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
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Blogs</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Blogs</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<!-- Video Start -->
<div class="container-fluid video" style="margin-top: 6rem; margin-bottom: 6rem;" id="blog.php">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="py-5">
                    <h3 class=" display-3 mb-4">Tea is a drink of <span class="text-white">health</span> and <span class="text-white">beauty</span></h3>
                    <h6 class="fw-normal lh-base fst-italic text-justify text-white mb-5 ">
                        One of the defining features of Surma Tea Estate Limited is its commitment to the art of tea processing. The tea leaves, once plucked, undergo a series of carefully monitored and controlled processes to bring out their unique flavors and aromas. From withering and rolling to oxidation and drying, each step in the processing chain is a testament to the estate's craftsmanship.</h6>

                    <a class="btn btn-light rounded-pill py-3 px-5" href="">Explore More</a>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/e-UJfWxNAcU" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/e-UJfWxNAcU" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

       <!-- Footer Start -->
       <?php require_once "../layouts/footer.php" ?>
    <!-- Footer End -->