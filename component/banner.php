<style>
    @import url("https://fonts.googleapis.com/css2?family=Righteous&display=swap");

    .banner_section {
        position: relative;
        height: 90vh;
        background: url("./image/bg1.jpg") center/cover no-repeat;
        display: flex;
        align-items: center;
    }

    .banner-content {
        text-align: center;
        color: #fff;
        background-color: #06121c85;
        padding: 20px;
        font-family: "Righteous", cursive;
    }

    .banner-title {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 20px;
        padding: 5px 10px;
        display: inline-block;
    }

    .banner-subtitle {
        font-size: 1.3rem;
        margin-bottom: 30px;
    }

    .btn-container a {
        display: inline-block;
        margin: 5px;
        padding: 10px 20px;
        background-color: #06121c;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .btn-container a:hover {
        background-color: #007bff;
        color: white;
    }

    @media screen and (max-width: 768px) {
        .banner-title {
            font-size: 24px;
        }

        .banner-subtitle {
            font-size: 16px;
        }
    }
</style>

<section class="banner_section">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center banner-content">
                <div class="banner-title">LEADING MANUFACTURER OF <br /> <span id="element"></span></div>
                <div class="banner-subtitle">Explore Outstanding Titanium Dioxide Products Available in the Market.
                </div>
                <div class="btn-container">
                    <a href="#aboutus">Learn More</a>
                    <a href="#contactus">Contact Now</a>
                </div>
            </div>
        </div>
    </div>
</section>