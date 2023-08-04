<style>
    .About_Company {
        color: white;
        padding: 50px 0px;
        background-color: #06121c;
    }

    .About_Company h2 {
        padding: 5px 0;
        letter-spacing: 3px;
        font-family: "Righteous", cursive;
        font-size: 3rem;
    }

    .About_Company p {
        text-align: justify;
    }

    .About_Company hr {
        border: 5px solid #2066df;
        width: 28%;
        margin-top: -29px;
    }

    /* button Style */

    .button1 {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        background: #183153;
        font-family: "Montserrat", sans-serif;
        box-shadow: 0px 6px 24px 0px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        border: none;
        margin-bottom: 20px;
        cursor: pointer;
    }

    .button1:after {
        content: " ";
        width: 0%;
        height: 100%;
        background: blue;
        position: absolute;
        transition: all 0.4s ease-in-out;
        right: 0;
    }

    .button1:hover::after {
        right: auto;
        left: 0;
        width: 100%;
    }

    .button1 span {
        text-align: center;
        text-decoration: none;
        width: 100%;
        padding: 12px 20px;
        color: #fff;
        font-size: 1.125em;
        font-weight: 700;
        letter-spacing: 0.3em;
        z-index: 20;
        transition: all 0.3s ease-in-out;
    }

    .button1:hover span {
        color: #183153;
        animation: scaleUp 0.3s ease-in-out;
        color: white;
    }

    @keyframes scaleUp {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(0.95);
        }

        100% {
            transform: scale(1);
        }
    }

    @media (max-width: 768px) {
        .right-column img {
            max-width: 100%;
            height: auto;
        }
    }
</style>

<!-- About-Company Section -->
<section id="aboutus" class="two-column-section About_Company">
    <div class="container">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-6 left-column">
                <h2 class="wow animate__animated animate__slideInLeft">About Company</h2>
                <hr align="left">
                <p>
                    Changzhou Jinchengrui New Materials Technology Co., Ltd. was established in March 2012
                    (Changzhou Jinchengrui New Material Technology Co., Ltd. was
                    established In November 2022, it is a subsidiary of Jinchengrui
                    Chemical), and the company mainly distributes products of well-known
                    enterprises in East China. The titanium dioxide agent of the company
                    is suitable for high-grade interior wall latex paint, inkpaper, rubber
                    etc.,and other high-end fields, can also be applied to
                    coatings,General areas suchas plastics and paints. In 2019, the
                    company received the support of a strong upstream scientific research
                    teamtoincrease product export business, and the company's main
                    products were sold to Europe and the UnitedStates and across Asia, the
                    annual sales volume of export business since 2020 is not less than
                    100million, and the annual sales of export business have reached by
                    2022(200) million. Our aim is: service and sincerity in exchange for
                    your trust and support, mutual gain, createawin-win situation! Our
                    company is willing to cooperate wholeheartedly with colleagues from
                    all walks of life to createa better future!
                    <!-- Add more content here (up to 300 words) -->
                </p>
                <a href="./files/catalogue.pdf" Download="catalogue.pdf">
                    <button class="button1 wow animate__animated animate__zoomInUp animate__delay-1s">
                        <span>Download Catalogue</span>
                    </button>
                </a>
            </div>
            <!-- Right Column -->
            <div class="col-md-6 right-column wow animate__animated animate__slideInRight animate__delay-1s">
                <img width="600"
                    src="./image/office.jpg"
                    alt="Company Image" />
            </div>
        </div>
    </div>
</section>