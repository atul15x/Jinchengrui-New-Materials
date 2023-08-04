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
                <img src="../../image/products/TR-708.jpg" class="img-fluid" alt="Product Image" />
            </div>
            <div class="col-lg-6">
                <h2>TR-708 (Universal Type)</h2>
                <p>
                    TR-708 is a composite inorganic coating using zirconia and alumina, surface modification with
                    special organic treatment agent, with excellent whiteness, easy dispersion, hydrophilic and
                    lipophilic functions, suitable for most application fields, is a multi-functional, universal
                    rutile
                    titanium dioxide; It can be widely used in coatings, plastics, inks, papermaking and other
                    fields.<br>

                    <strong class="Uses_Area">Uses Area:</strong>
                <ol>
                    <li>Decorative paint for indoor and outdoor use</li>
                    <li>Powder paint</li>
                    <li>Steel coil paint</li>
                    <li>General-purpose industrial paint for plastic, ink, papermaking, and rubber applications</li>
                </ol>
                </p>
                <a type="button" href="../../image/TR-708.jpg" download="TR-708.jpg" class="btn btn-primary">Download
                    Catalog</a>
            </div>
        </div>

        <!-- Full Description Section -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h3>Full Description</h3>
                <p>Introducing TR-708: a versatile inorganic coating designed to take your products to the next
                    level.
                    With a unique blend of zirconia and alumina, combined with a special organic treatment, this
                    coating
                    offers excellent whiteness, easy dispersion, and hydrophilic and lipophilic functions. It's a
                    multi-functional rutile titanium dioxide that can be used in coatings, plastics, inks,
                    papermaking,
                    and more.</p>

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
                    TR-708 stands out with its exceptional whiteness, strong reducing power, and great coverage. It
                    easily disperses in both water-based and oil-based environments. Plus, it provides excellent
                    resistance to weather, heat, and light, making it suitable for a wide range of applications.

                    Whether you're looking to enhance your indoor and outdoor decorative paint, powder paint, steel
                    coil
                    paint, or general-purpose industrial paint for plastic, ink, papermaking, and rubber, TR-708 is
                    the
                    solution. Elevate your products with this high-performance coating that delivers reliable
                    results.

                    Unleash the true potential of your coatings, plastics, inks, and paper products with TR-708.
                    Experience excellence and take your brand to new heights.
                </p>
            </div>
        </div>
    </div>
</section>


<?php
include "./component/footer.php";
?>