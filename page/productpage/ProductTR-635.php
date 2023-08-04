<?php
include "./component/header.php";
?>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Lobster&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Righteous&display=swap");

    /* Custom styles for the navbar */
    .navbar-custom {
        background-color: #06121c;
        color: white;
    }

    .navbar-custom .nav-link {
        color: white;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .navbar-custom .nav-link::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #007bff;
        transition: width 0.3s ease-in-out;
        z-index: -1;
    }

    .navbar-custom .nav-link:hover::before {
        width: 100%;
    }

    .brand_name {
        width: 200px;
    }

    .navbar-custom .sample-btn {
        background-color: white;
        color: #06121c;
        border: none;
        border-radius: 4px;
        padding: 8px 16px;
        font-size: 16px;
        margin-left: 20px;
        font-weight: 600;
    }

    .navbar-custom .sample-btn:hover {
        background-color: #007bff;
        color: white;

        font-weight: 600;
    }

    /* aboutCompnayBanner */
    .aboutCompnayBanner {
        height: 200px;
        background: url("../../image/bg3.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: bottom;
    }

    .aboutCompnayBannerShadow {
        position: relative;
        height: 100%;
        background: rgba(0, 0, 0, 0.1);
    }

    .aboutCompnayBanner_text {
        color: white;
        font-family: "Righteous", cursive;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .aboutCompnayBanner_text h2 {
        font-size: 4rem;
    }

    /* 
Product_deatils */

    .Product_details h2 {
        font-family: "Righteous", cursive;
    }

    .Product_details .Uses_Area {
        font-family: "Righteous", cursive;
    }

    .Product_details h3 {
        font-family: "Righteous", cursive;
    }
</style>


<?php
include "./component/navbar.php";
?>




<!-- Product Details -->
<section class="Product_details">
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <img src="../../image/products/TR-635.jpg" class="img-fluid" alt="Product Image" />
            </div>
            <div class="col-lg-6">
                <h2>TR-635 (Water-Based Coatings)</h2>
                <p>
                    JCR TR-635 is an alumina coated film produced by the sulfuric acid process. This is a
                    water-based, universal product, more specifically for waterborne exterior and interior
                    decorative architectural
                    coatings.High whiteness Excellent dispersion in W/B systems Excellent opacity and reducing
                    strength Excellent durability<br>

                    <strong class="Uses_Area">Uses Area:</strong>
                <ol>
                    <li>Decorative paint for indoor and outdoor use</li>
                    <li>Powder paint</li>
                    <li>Steel coil paint</li>
                    <li>General-purpose industrial paint for plastic, ink, papermaking, and rubber applications</li>
                </ol>
                </p>
                <a type="button" href="../../image/TR-635.jpg" download="TR-635.jpg" class="btn btn-primary">Download
                    Catalog</a>
            </div>
        </div>

        <!-- Full Description Section -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>Full Description</h3>
                <p>JCR TR-635 is an alumina-coated film produced using the sulfuric acid process. It is a
                    water-based, universal product specifically designed for waterborne exterior and interior
                    decorative architectural coatings. </p>

                <p>
                    Main features:
                    - High whiteness
                    - Excellent dispersion in water-based systems
                    - Excellent opacity and reducing strength
                    - Excellent durability
                </p>

                <strong class="Uses_Area">Quality Standard:</strong>
                <!-- Bootstrap Table -->
                <div class="container mt-4">
                    <table class="table table-dark table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Index</th>
                                <th scope="col">Technical Specifications</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Inorganic surface treatment</td>
                                <td>Al2O3</td>
                            </tr>
                            <tr>
                                <td>Organic surface treatment</td>
                                <td>yes</td>
                            </tr>
                            <tr>
                                <td>TiO2 content, %</td>
                                <td>≥ 93</td>
                            </tr>
                            <tr>
                                <td>Brightness %</td>
                                <td>94.5</td>
                            </tr>
                            <tr>
                                <td>Tint reducing power, Ryenolds number, TCS</td>
                                <td>≥ 1900</td>
                            </tr>
                            <tr>
                                <td>Volatile matters at 105℃, %</td>
                                <td>≤ 0.5</td>
                            </tr>
                            <tr>
                                <td>pH value of water suspension</td>
                                <td>6.5~8.5</td>
                            </tr>
                            <tr>
                                <td>Oil absorption value (g/100g)</td>
                                <td>≤ 20</td>
                            </tr>
                            <tr>
                                <td>Watersoluble matters, %</td>
                                <td>0.5</td>
                            </tr>
                            <tr>
                                <td>Electrical resistance of aqueous extract, Qm</td>
                                <td>≥ 80</td>
                            </tr>
                            <tr>
                                <td>Residue on sieve (45 um mesh), %</td>
                                <td>≥ 0.02</td>
                            </tr>
                            <tr>
                                <td>Rutile content, %</td>
                                <td>≤ 5098</td>
                            </tr>
                            <tr>
                                <td>Whiteness (compared with standard sample)</td>
                                <td>No less than</td>
                            </tr>
                            <tr>
                                <td>Oil dispersible power (Hegemann number)</td>
                                <td>≤ 6.0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p>
                    Major characteristics:
                    - Outstanding whiteness
                    - Excellent reducing power and covering power
                    - Excellent dispersibility in both water-based and oil-based systems
                    - Good weather resistance, heat resistance, and light resistance
                    - Widely used in decorative paint (for indoor and outdoor use), powder paint, steel coil paint,
                    industrial paint for general purposes (applied to plastic, ink, papermaking, rubber, and
                    leather), and ink applications.
                </p>
            </div>
        </div>
    </div>
</section>

<?php
include "./component/footer.php";
?>