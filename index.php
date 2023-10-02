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
    <?php include "slider.php" ?>
    <!-- Carousel End -->


    <!-- About Start -->
    <?php require "about.php" ?>
    <!-- About End -->


    <!-- Products Start -->
    <?php include "product.php" ?>
    <!-- Products End -->


    <!-- Article Start -->
    <?php include "article.php" ?>
    <!-- Article End -->

    <!-- Feature Start -->
    <?php include "feature.php" ?>
    <!-- Feature End -->
    


    <!-- Store Start -->
    <?php include "store.php" ?>
    <!-- Store End -->


    <!-- Testimonial Start -->
    <?php include "testimonial.php" ?>
    <!-- Testimonial End -->


    <!-- Contact Start -->
<?php include "contact.php" ?>
    <!-- Contact Start -->

<?php include "layouts/footer.php" ?>
