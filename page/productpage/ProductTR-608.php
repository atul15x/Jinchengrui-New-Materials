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
                <img src="../../image/products/TR-608.jpg" class="img-fluid" alt="Product Image" />
            </div>
            <div class="col-lg-6">
                <h2>TR-608 (Chloride Grade)</h2>
                <p>
                    TR-608 product is rutile titanium dioxide modified by alumina coating and organic treatment age
                    n t, with uniform and moderate particle size distribution, blue background phase, easy
                    dispersion, low volatile content, low oil absorption, excellent
                    yellowing resistance and good processing rheology. It can be applied to masterbatches, especia
                    l ly high-concentration masterbatches, engineering plastics and other applications.
                    <br>

                    <strong class="Uses_Area">Uses Area:</strong>
                <ol>
                    <li>Masterbatch.</li>
                    <li>Engineer plastics</li>
                    <li>PVC(plasticized)</li>
                    <li>Solvent ink</li>
                </ol>
                </p>
                <a type="button" href="../../image/TR-608.jpg" download="TR-608.jpg" class="btn btn-primary">Download
                    Catalog</a>
            </div>
        </div>

        <!-- Full Description Section -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>Full Description</h3>
                <p>The TR-608 product is a rutile titanium dioxide that has been modified with alumina coating and
                    organic treatment. It has a uniform and moderate particle size distribution, a blue background
                    phase, and offers easy dispersion. Additionally, it has a low volatile content, low oil
                    absorption, excellent yellowing resistance, and good processing rheology. It is particularly
                    suitable for use in masterbatches, especially high-concentration masterbatches, as well as in
                    engineering plastics and other applications.
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
                                <td>96.50</td>
                            </tr>
                            <tr>
                                <td>Surface Treated</td>
                                <td>Al2O3</td>
                            </tr>
                            <tr>
                                <td>Brightness %</td>
                                <td>97.5</td>
                            </tr>
                            <tr>
                                <td>Oil absorption,g/100g</td>
                                <td> 16</td>
                            </tr>
                            <tr>
                                <td>L Variant</td>
                                <td>97.5</td>
                            </tr>
                            <tr>
                                <td>B Variant</td>
                                <td>2.00</td>
                            </tr>
                            <tr>
                                <td>(Tinting Strength,%)</td>
                                <td> 115</td>
                            </tr>
                            <tr>
                                <td>Residue on the sieve(45um mesh),%</td>
                                <td>0.02</td>
                            </tr>
                            <tr>
                                <td>(Resistivity,·m)</td>
                                <td> 60</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p>
                    The product is packed in either 25kg kraft paper bags with pallets or 500kg/1000kg plastic woven
                    bags. It is important to store it in a cool, dry environment to ensure optimal quality.
                </p>
            </div>
        </div>
    </div>
</section>

<?php
include "./component/footer.php";
?>