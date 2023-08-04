<style>
    .products {
        padding: 50px 0px;
        background-color: white;
    }

    .product {
        color: black;
    }

    .products h2 {
        padding-bottom: 10px;
        font-family: "Righteous", cursive;
        font-size: 3rem;
    }

    .products p {
        font-family: "Poppins", sans-serif;
    }

    .products h5 {
        font-family: IBM Plex Mono, monospace;
    }

    .product button {
        font-family: IBM Plex Mono, monospace;
    }

    .products hr {
        border: 5px solid #2066df;
        width: 20%;
        text-align: left;
        margin-top: -36px;
    }

    /* Add shadow and border to cards */
    .card {
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border: 1px solid #ccc;
        transition: box-shadow 0.3s, transform 0.3s, z-index 0.3s;
        position: relative;
        cursor: pointer;
    }

    /* Pop-up effect on hover */
    .card:hover {
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        transform: scale(1.05) translateY(-5px);
        z-index: 1;
    }

    /* Add a smooth transition to the image */
    .card-img-top {
        transition: transform 0.3s;
    }

    /* Remove zoom effect on the image on hover */
    .card:hover .card-img-top {
        transform: scale(1);
    }
</style>
<section id="products" class="products">
    <div class="container mt-4">
        <h2 class="wow animate__animated animate__slideInLeft">Products</h2>
        <hr align="left" />
        <p>
            Our diverse range of titanium dioxide products is designed to meet various
            coating requirements. Here's an overview of our outstanding offerings
        </p>
        <div class="owl-carousel owl-theme wow animate__animated animate__lightSpeedInRight">
            <div class="item">
                <div class="card">
                    <img src="./image/products/TR-708.jpg" class="card-img-top" alt="Product 1" />
                    <div class="card-body product">
                        <h5 class="card-title">TR-708 (Universal Type)</h5>
                        <p class="card-text">
                            TR-708 is a composite inorganic coating using zirconia and
                            alumina..
                        </p>
                        <a href="./page/productpage/ProductTR-708.php" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="./image/products/TR-635.jpg" class="card-img-top" alt="Product 2" />
                    <div class="card-body product">
                        <h5 class="card-title">TR-635 (Water-Based Coatings)</h5>
                        <p class="card-text">
                            R TR-635 is an alumina coated film produced by the sulfuric acid
                            process. This is a water..
                        </p>
                        <a href="./page/productpage/ProductTR-635.php" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="./image/products/TR-508.jpg" class="card-img-top" alt="Product 3" />
                    <div class="card-body product">
                        <h5 class="card-title">TR-508 (Chloride Grade)</h5>
                        <p class="card-text">
                            Designed to meet the stringent standards of chloride-grade
                            applications.
                        </p>

                        <a href="./page/productpage/ProductTR-508.php" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="./image/products/TR-901.jpg" class="card-img-top" alt="Product 3" />
                    <div class="card-body product">
                        <h5 class="card-title">TR-901 (Master Batchfield)</h5>
                        <p class="card-text">
                            Perfect for creating master batches with exceptional quality and
                            consistency.
                        </p>

                        <a href="./page/productpage/ProductTR-901.php" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="./image/products/TR-608.jpg" class="card-img-top" alt="Product 3" />
                    <div class="card-body product">
                        <h5 class="card-title">TR-608 (Chloride Grade)</h5>
                        <p class="card-text">
                            A chloride-grade product with superior performance capabilities.
                        </p>

                        <a href="./page/productpage/ProductTR-608.php" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card">
                    <img src="./image/products/TA-101.jpg" class="card-img-top" alt="Product 3" />
                    <div class="card-body product">
                        <h5 class="card-title">TA-101</h5>
                        <p class="card-text">
                            Our latest addition, offering advanced features and enhanced
                            properties to meet specific industry needs.
                        </p>

                        <a href="./page/productpage/ProductTR-101.php" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <!-- Add more items for additional products -->
        </div>
    </div>
</section>