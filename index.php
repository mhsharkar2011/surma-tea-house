<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Surma Tea Estate (Pvt) Limited</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>


<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <!-- Under construction -->
            <div class="scrolling-text">
                The site is under construction ...
            </div>
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <a href="index.php" class="navbar-brand">
                    <img class="img-fluid" src="img/logo.png" alt="Logo" style="height: 56%;">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="#" class="nav-item nav-link">Home</a>
                        <a href="#about.php" class="nav-item nav-link">About</a>
                        <a href="#product.php" class="nav-item nav-link">Products</a>
                        <a href="#feature.php" class="nav-item nav-link">Features</a>
                        <a href="#blog.php" class="nav-item nav-link">Blogs</a>
                        <a href="#testimonial.php" class="nav-item nav-link">Testimonial</a>
                        <a href="#contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="border-start ps-4 d-none d-lg-block">
                        <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <?php include "slider.php" ?>
    <!-- Carousel End -->

    <!-- About Start -->
    <?php require "about.php" ?>
    <!-- About End -->

    <!-- Products Start -->
    <?php include "product.php" ?>
    <!-- Products End -->

    <!-- Feature Start -->
    <?php include "feature.php" ?>
    <!-- Feature End -->
    <!-- Blogs Start -->
    <?php include "blog.php" ?>
    <!-- Blogs End -->

    <!-- Store Start -->
    <?php include "store.php" ?>
    <!-- Store End -->

    <!-- Testimonial Start -->
    <?php include "testimonial.php" ?>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <?php include "contact.php" ?>
    <!-- Contact Start -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-primary mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Teliapara, Madhabpur, Habiganj,Sylhet, Bangladesh 3360 Habiganj, Sylhet Division, Bangladesh</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>02-8829218</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@surmatea.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="https://www.facebook.com/profile.php?id=100057725347394"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-primary mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="/pages/about-us.php">About Us</a>
                    <a class="btn btn-link" href="#">Career</a>
                    <a class="btn btn-link" href="./pages/contact-us.php">Contact Us</a>
                    <a class="btn btn-link" href="#">Terms & Condition</a>
                    <a class="btn btn-link" href="#">Support</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-primary mb-4">Subscribed</h4>
                    <p>To subscribe SingUp in Valid Mail and you will receive our latest news</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium" href="#">Surma Tea Estate (Pvt) Ltd.</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed By <a class="fw-medium" href="https://webdevs24.com.com">webdevs24.com</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentPage = window.location.hash; // Get the current page URL fragment

        // Loop through each navigation link
        var navLinks = document.querySelectorAll(".nav-item.nav-link");
        navLinks.forEach(function(link) {
            var linkPage = link.getAttribute("data-page");

            // Check if the link's data-page attribute matches the current page URL
            if (linkPage === currentPage) {
                link.classList.add("active"); // Add the 'active' class to the matching link
            }
        });
    });
</script>