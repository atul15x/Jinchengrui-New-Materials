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


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom ">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="https://jcr-nem.site/">
            <span class="h3 mb-3 font-weight-bold" style="
          font-family:  'Righteous', cursive;
          text-shadow: -4px -1px 4px rgba(150, 150, 150, 5);
          color: #fff;font-size: 1.5rem;
        ">Jinchengrui New Materials</span>
        </a>

    </div>
    </div>
</nav>

<!-- banner -->
<section class="aboutCompnayBanner">
    <div class="aboutCompnayBannerShadow">
        <div class="aboutCompnayBanner_text">
            <h2>Products</h2>
        </div>
    </div>
</section>



<!-- Product Details -->
<section class="Product_details">
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <img src="../../image/products/TR-901.jpg" class="img-fluid"
                    alt="Product Image" />
            </div>
            <div class="col-lg-6">
                <h2>TR-901 (Master Batchfield)</h2>
                <p>
                    Rutile TiO2 pigment TR-901 is coated with zirconia and alumina in an inorganic manner and
                    modified with special organic
                    finishing agent on the surface. With advantages of preferred blue color, good dispersibility,
                    low oil absorption, excellent compatibility and outstanding rheological property under
                    processing, the pigment is particularly applicable to plastic processing.
                    <br>

                    <strong class="Uses_Area">Uses Area:</strong>
                <ol>
                    <li>Color masterbatch of polyolefin, PVC, ABS, PS, and other plastic materials. </li>
                    <li>Plastic section bar, plate, and tube manufacturing.</li>
                    <li>Color paste and ink production.</li>
                </ol>
                </p>
                <a type="button" href="../../image/TR-901.jpg" download="TR-901.jpg" class="btn btn-primary">Download
                    Catalog</a>
            </div>
        </div>

        <!-- Full Description Section -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>Full Description</h3>
                <p>Rutile TiO2 pigment TR-901 is coated with zirconia and alumina in an inorganic manner and
                    modified with special organic
                    finishing agent on the surface. With advantages of preferred blue color, good dispersibility,
                    low oil absorption, excellent compatibility and outstanding rheological property under
                    processing, the pigment is particularly applicable to plastic processing.
                    It exhibits outstanding covering power and brightness and is useful to retain the mechanical
                    properties of the finished plastic products. It can be widely used in polyolefin, PVC, ABS, PS,
                    section bar, plate and tube as well as color paste and oil paint.
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
                                <td>Inorganic surface treatment</td>
                                <td>AL2O3,ZrO2</td>
                            </tr>
                            <tr>
                                <td>Organic surface treatment</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>TiO2 content, %</td>
                                <td>≥ 93</td>
                            </tr>
                            <tr>
                                <td>Brightness %</td>
                                <td> ≤ 94.5</td>
                            </tr>
                            <tr>
                                <td>Tint reducing power, Ryenolds number,TCS</td>
                                <td>≥ 1850</td>
                            </tr>
                            <tr>
                                <td>Volatile matters at 105℃,%</td>
                                <td>≤ 0.5</td>
                            </tr>
                            <tr>
                                <td>pH value of water suspension</td>
                                <td> 6.5~8.5</td>
                            </tr>
                            <tr>
                                <td>Oil absorption value (g/100g)</td>
                                <td>≤ 17</td>
                            </tr>
                            <tr>
                                <td>Watersoluble matters,%</td>
                                <td> ≤ 0.5</td>
                            </tr>
                            <tr>
                                <td>Electrical resistance of aqueous extract,Qm</td>
                                <td> ≥ 80</td>
                            </tr>
                            <tr>
                                <td>Residue on sieve (45 um mesh), %</td>
                                <td> ≥ 0.02</td>
                            </tr>
                            <tr>
                                <td>Rutile content, % (45 um mesh), %</td>
                                <td> ≤ 97.0</td>
                            </tr>
                            <tr>
                                <td>Whiteness, (compared with standard sample)</td>
                                <td> Nolessthan</td>
                            </tr>
                            <tr>
                                <td>Oil dispersible power (Hegemann number)</td>
                                <td> ≤ 6.0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p>
                    TR-901 exhibits exceptional covering power and brightness while preserving the mechanical
                    properties of the final plastic products. It finds wide application in polyolefin, PVC, ABS, PS,
                    section bar, plate, tube, as well as color paste and oil paint production.

                    In summary, TR-901 offers the following properties:

                    - Excellent compatibility with plastic resin and outstanding dispersibility.
                    - Good melting fluidity in color masterbatch with a high pigment content.
                    - Exhibits good anti-yellowing properties during high-temperature processing.
                    - Offers a good blue phase and whiteness.

                    It is suitable for the following applications:

                    - Color masterbatch of polyolefin, PVC, ABS, PS, and other plastics.
                    - Plastic section bar, plate, and tube manufacturing.
                    - Color paste and ink production.
                </p>
            </div>
        </div>
    </div>
</section>

<?php
include "./component/footer.php";
?>