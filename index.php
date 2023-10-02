<?php include "layouts/header.php" ?>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php include "layouts/navbar.php" ?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <?php include "pages/slider.php" ?>
    <!-- Carousel End -->


    <!-- About Start -->
    <?php include "pages/about.php" ?>
    <!-- About End -->


    <!-- Products Start -->
    <?php include "pages/product.php" ?>
    <!-- Products End -->


    <!-- Article Start -->
    <?php include "pages/article.php" ?>
    <!-- Article End -->


    <!-- Video Start -->
    <?php include "pages/video.php" ?>
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
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Store Start -->
    <?php include "pages/store.php" ?>
    <!-- Store End -->


    <!-- Testimonial Start -->
    <?php include "pages/testimonial.php" ?>
    <!-- Testimonial End -->


    <!-- Contact Start -->
<?php include "pages/contact.php" ?>
    <!-- Contact Start -->

<?php include "layouts/footer.php" ?>
