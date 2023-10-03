<div class="container-fluid testimonial product py-5 my-5" id="product.php">
    <div class="container py-5">
        <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h3 class="display-5 fst-italic text-dark mb-4"><span class="text-white">Our</span> Products</h3>
            <p class="fw-bold text-white">Surma Tea Estate Limited is more than a tea producer; it's a guardian of tradition, a steward of the environment, and a purveyor of exceptional teas. With a legacy that spans generations, the estate continues to enchant tea lovers with its commitment to quality and craftsmanship. As the world's appreciation for fine teas grows, Surma Tea Estate is poised to remain a timeless symbol of excellence in the world of tea.</p>
        </div>
        <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
            <a href="" class="d-block product-item rounded">
                <img src="img/product-1.jpg" alt="">
                <div id="product" class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                    <h4 class="text-primary">Green Tea</h4>
                    <span class="text-body" productDetails ="Known for their freshness and health benefits, the estate's green teas are carefully crafted to preserve the delicate flavors and antioxidants."></span>
                </div>
            </a>
            <a href="" class="d-block product-item rounded">
                <img src="img/product-2.jpg" alt="">
                <div id="product" class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                    <h4 class="text-primary">Black Tea</h4>
                    <span class="text-body" productDetails = "Rich, robust, and full-bodied, Surma Tea Estate's black teas are a favorite among those who savor a bold cup of tea"></span>
                </div>
            </a>
            <a href="" class="d-block product-item rounded">
                <img src="img/product-3.jpg" alt="">
                <div id = "product" class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                    <h4 class="text-primary">Herbal Teas</h4>
                    <span class="text-body" productDetails="Surma Tea Estate also offers an array of herbal infusions, each thoughtfully blended to provide a soothing and aromatic experience."></span></span>
                </div>
            </a>
            <a href="" class="d-block product-item rounded">
                <img src="img/product-4.jpg" alt="">
                <div id="product" class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                    <h4 class="text-primary">Organic Tea</h4>
                    <span class="text-body" productDetails="For those seeking a mild and subtly nuanced tea, the estate's white teas are a perfect choice."></span>
                </div>
            </a>
            <a href="" class="d-block product-item rounded">
                <img src="img/product-4.jpg" alt="">
                <div id="product" class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                    <h4 class="text-primary">White Teas</h4>
                    <span class="text-body" productDetails="For those seeking a mild and subtly nuanced tea, the estate's white teas are a perfect choice."></span>
                </div>
            </a>
        </div>
        <div class="row g-3">
            <div class=" mb-4"></div>
            <div class="col-lg-12 wow fadeIn text-end" data-wow-delay="0.5s">
                <a href="pages/about-us.php" class="btn btn-light rounded-pill py-3 px-5">Read More</a>
            </div>
        </div>
    </div>
</div>



<script>
    // JavaScript to set fixed length for description text in each product entry
    const products = document.querySelectorAll('#product'); // Use '.product' to select elements with class 'product'
    const maxLength = 80; // Set the desired fixed length

    products.forEach((entry) => {
        const detailsElement = entry.querySelector('[productDetails]');
        const details = detailsElement.getAttribute('productDetails');

        // Check if the description exceeds the maximum length
        if (details.length > maxLength) {
            const shortText = details.substring(0, maxLength) + '...'; // Correct variable name to 'details'
            detailsElement.textContent = shortText;
        } else {
            detailsElement.textContent = details; // Correct variable name to 'details'
        }
    });
</script>