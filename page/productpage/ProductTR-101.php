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
                <img src="../../image/products/TA-101.jpg" class="img-fluid" alt="Product Image" />
            </div>
            <div class="col-lg-6">
                <h2>TA-101</h2>
                <p>
                    Our latest addition, offering advanced features and enhanced properties to meet specific
                    industry needs.: White appearance, good gloss, blue phase, fine, soft, and uniform particle,
                    narrowdistribution, high tint reducing power, large scattering coefficient, low oil absorption
                    value, low impurity contents suchas
                    iron.
                    <br>

                    <strong class="Uses_Area">Uses Area:</strong>
                <ol>
                    <li>Suitable for high-end usage such as top class internal
                        wall emulsion paint.</li>
                    <li>Printing ink</li>
                    <li>Paper making</li>
                    <li>Rubber products</li>
                </ol>
                </p>
                <a type="button" href="../../image/TA-101.jpg" download="TA-101.jpg" class="btn btn-primary">Download
                    Catalog</a>
            </div>
        </div>

        <!-- Full Description Section -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>Full Description</h3>
                <p>Molecular formula: TiO2
                    Molecular weight: 79.9
                    Property: Specific gravity of 3.9, stable chemical property.
                    Characteristic: The product appears white with a good gloss, blue phase, fine and soft
                    particles, uniform distribution, good dispersibility, high tint reducing power, high scattering
                    coefficient, low oil absorption, and low impurity content such as iron.
                    Product appearance: White powder.
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
                                <td>TiO2 content, %</td>
                                <td>98.5</td>
                            </tr>
                            <tr>
                                <td>Whiteness (compared with first
                                    class standard)
                                </td>
                                <td>No less than</td>
                            </tr>
                            <tr>
                                <td>Scattering power (compared with
                                    first class standard)</td>
                                <td>105</td>
                            </tr>
                            <tr>
                                <td>Volatile matters at 105℃,% </td>
                                <td>6.8~8.0</td>
                            </tr>
                            <tr>
                                <td>Oil absorption value (g/100g)</td>
                                <td>23</td>
                            </tr>
                            <tr>
                                <td>Residue on the sieve(45um
                                    mesh),%</td>
                                <td>0.05</td>
                            </tr>
                            <tr>
                                <td>Electrical resistance of aqueous
                                    extract,Qm</td>
                                <td> 22</td>
                            </tr>
                            <tr>
                                <td>Water dispersible power, %</td>
                                <td>70</td>
                            </tr>
                            <tr>
                                <td>Iron content, ppm</td>
                                <td>50</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p>
                    Suitable for high-end usage such as top-class internal wall emulsion paint, printing ink, paper
                    making, rubber products, as well as common usage such as coating, plastic, and paint.
                    Packaging: Composite plastic woven sacks lined with plastic film, with a net weight of 25 kg for
                    each sack.
                </p>
            </div>
        </div>
    </div>
</section>


<?php
include "./component/footer.php";
?>