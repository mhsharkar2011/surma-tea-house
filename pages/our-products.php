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
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Products Start -->
    <div class="container-fluid product py-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p>
                <h2 class="display-0">Tea has a complex positive effect on the body</h2>
            </div>
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
                <a href="" class="d-block product-item rounded">
                    <img src="../img/product-1.jpg" alt="">
                    <div id="product" class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Green Tea</h4>
                        <span class="text-body" productDetails="Known for their freshness and health benefits, the estate's green teas are carefully crafted to preserve the delicate flavors and antioxidants."></span>
                    </div>
                </a>
                <a href="" class="d-block product-item rounded">
                    <img src="../img/product-2.jpg" alt="">
                    <div id="product" class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Black Tea</h4>
                        <span class="text-body" productDetails="Rich, robust, and full-bodied, Surma Tea Estate's black teas are a favorite among those who savor a bold cup of tea"></span>
                    </div>
                </a>
                <a href="" class="d-block product-item rounded">
                    <img src="../img/product-3.jpg" alt="">
                    <div id="product" class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Herbal Teas</h4>
                        <span class="text-body" productDetails="Surma Tea Estate also offers an array of herbal infusions, each thoughtfully blended to provide a soothing and aromatic experience."></span></span>
                    </div>
                </a>
                <a href="" class="d-block product-item rounded">
                    <img src="../img/product-4.jpg" alt="">
                    <div id="product" class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Organic Tea</h4>
                        <span class="text-body" productDetails="For those seeking a mild and subtly nuanced tea, the estate's white teas are a perfect choice."></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Products End -->

    <!-- Footer Start -->
    <?php require_once "../layouts/footer.php" ?>
    <!-- Footer End -->