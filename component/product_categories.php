<style>
    /* Custom styles for the product categories section */
    .product-categories {
        display: flex;
        justify-content: center;
        padding: 50px 0;
    }

    .product-category {
        margin: 0 10px;
        max-width: 300px;
        text-align: left;
        transition: transform 0.3s ease;
    }

    .product-category img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .product-categories h2 {
        padding-bottom: 10px;
        font-family: "Righteous", cursive;
        font-size: 3rem;
    }

    .product-category h3 {
        font-size: 24px;
        margin-top: 10px;
    }

    .product-category p {
        font-size: 16px;
    }

    .product-category:hover {
        transform: translateY(-5px);
    }

    /* product-categories */

    .product-category {
        cursor: pointer;
    }

    .product-categories h3 {
        font-family: "Poppins", sans-serif;
        font-weight: 600;
    }

    .product-categories hr {
        border: 5px solid #2066df;
        width: 20%;
        margin-top: -36px;
    }

    /* Apply margin bottom of 10px on mobile devices (screen width up to 768px) */
    @media (max-width: 768px) {
        .product-category {
            margin-bottom: 10px;
        }
    }
</style>

<!-- Product Categories Section -->
<section class="product-categories">
    <div class="container">
        <h2 class="wow animate__animated animate__slideInLeft">
            Product Categories
        </h2>
        <hr align="left" />
        <p style="font-family: IBM Plex Mono, monospace">
            We provide three distinct categories of titanium dioxide, offering a
            versatile range of options to suit diverse industry needs.
        </p>
        <div class="row">
            <!-- Category 1 -->
            <div class="col-md-4 product-category wow animate__animated animate__slideInLeft">
                <img src="./image/20190830090041_360.jpg" alt="Coating/Paint" />
                <h3>Coating/Paint</h3>
                <p>Explore our high-quality coating and paint products.</p>
                <a href="./page/product_cate/coatingpaintProduct.php" class="btn btn-primary">See Product</a>
            </div>
            <!-- Category 2 -->
            <div class="col-md-4 product-category wow animate__animated animate__slideInUp">
                <img src="./image/20190902152942_129.jpg" alt="Plastic/Masterbatch" />
                <h3>Plastic/Masterbatch</h3>
                <p>Discover our wide range of plastic and masterbatch solutions.</p>
                <a href="./page/product_cate/plasticProduct.php" class="btn btn-primary">See Product</a>
            </div>
            <!-- Category 3 -->
            <div class="col-md-4 product-category wow animate__animated animate__slideInRight">
                <img src="./image/20190902152953_204.jpg" alt="Anatase" />
                <h3>Anatase</h3>
                <p>Find the best Anatase products for various applications.</p>
                <a href="./page/product_cate/anatase.php" class="btn btn-primary">See Product</a>
            </div>
        </div>
    </div>
</section>