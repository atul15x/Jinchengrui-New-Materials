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
                <img src="../../image/products/TR-508.jpg" class="img-fluid" alt="Product Image" />
            </div>
            <div class="col-lg-6">
                <h2>TR-508 (Chloride Grade)</h2>
                <p>
                    TR-508 product is a rutile titanium dioxide modified by silicon oxide, alumina coating and
                    organic treatment agent, with uniformand moderate particle size distribution, excellent
                    whiteness, gloss, achromaticity, dispersion, weather resistance, hiding power and other
                    characteristics. It can be widely used in water-based coatings, PVC, paints, inks, rubber and
                    other fields.
                    <br>

                    <strong class="Uses_Area">Uses Area:</strong>
                <ol>
                    <li>Powder coating , Coil coating </li>
                    <li>Metal Furniture Coating</li>
                    <li>PVC(pipe,profile)</li>
                    <li>Water-based ink , Paper-making</li>
                </ol>
                </p>
                <a type="button" href="../../image/TR-508.jpg" download="TR-508.jpg" class="btn btn-primary">Download
                    Catalog</a>
            </div>
        </div>

        <!-- Full Description Section -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>Full Description</h3>
                <p>TR-508 is a rutile titanium dioxide product that has been modified with silicon oxide, alumina
                    coating, and an organic treatment agent. It has a uniform and moderate particle size
                    distribution, and exhibits excellent characteristics such as whiteness, gloss, achromaticity,
                    dispersion, weather resistance, and hiding power. It finds wide application in various fields
                    including water-based coatings, PVC, paints, inks, rubber, and more.
                    <br> <br>
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
                                <td>The content of titanium dioxide, %</td>
                                <td>93.0</td>
                            </tr>
                            <tr>
                                <td>Organic surface treatment</td>
                                <td>SiO2/AlO3</td>
                            </tr>
                            <tr>
                                <td>Brightness %</td>
                                <td>≥ 97.5</td>
                            </tr>
                            <tr>
                                <td>Oil absorption,g/100g </td>
                                <td> ≤ 22</td>
                            </tr>
                            <tr>
                                <td>L Variant</td>
                                <td>≥ 97.5</td>
                            </tr>
                            <tr>
                                <td>B Variant</td>
                                <td>≤ 2.00</td>
                            </tr>
                            <tr>
                                <td>(Tinting Strength,%)</td>
                                <td> ≥ 110</td>
                            </tr>
                            <tr>
                                <td>Residue on the sieve(45um mesh),%</td>
                                <td>≤ 0.02</td>
                            </tr>
                            <tr>
                                <td>(Resistivity,·m)</td>
                                <td> ≥ 60</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p>
                    Some specific application areas for TR-508 include:

                    - Powder coating
                    - Coil coating
                    - Metal furniture coating
                    - PVC (pipe, profile)
                    - Water-based ink
                    - Paper-making

                    When it comes to packaging, TR-508 is typically available in 25kg kraft paper bags with pallets.
                    Alternatively, it may also be packaged in 500kg/1000kg plastic woven bags.

                    To ensure proper storage, it is recommended to seal the product and keep it in a cool, dry, and
                    well-ventilated place.
                </p>
            </div>
        </div>
    </div>
</section>

<?php
include "./component/footer.php";
?>