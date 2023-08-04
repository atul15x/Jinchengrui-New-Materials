<style>
    /* Custom styles for the "Experience" section */
    .experience-section {
        background: url("./image/bg2.jpg");
        padding: 50px 0;
        background-attachment: fixed;
    }

    .category-card {
        text-align: center;
        padding: 20px;
        border-radius: 5px;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .category-card i {
        font-size: 40px;
        margin-bottom: 10px;
    }

    .category-card .big-name {
        font-size: 32px;
        font-weight: bold;
    }

    .category-card .small-name {
        font-size: 16px;
        color: #999;
    }

    .experience-section h2 {
        color: white;
        padding: 10px 0 20px 0px;
        font-family: "Righteous", cursive;
        font-size: 3rem;
    }

    .experience-section p {
        color: white;
        text-align: justify;
    }

    .experience_section_black_shadow {
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.2);
    }

    .experience-section hr {
        border: 5px solid #2066df;
        width: 20%;
        margin-top: -44px;
    }

    /* Apply margin bottom of 10px on mobile devices (screen width up to 768px) */
    @media (max-width: 768px) {
        .category-card {
            margin-bottom: 10px;
        }
    }
</style>
<!-- "Experience" Section -->
<section class="experience-section">
    <div class="experience_section_black_shadow">
        <div class="container">
            <h2 class="wow animate__animated animate__slideInLeft">We Have Experience</h2>
            <hr align="left">
            <p>
                In 2019, the company received the support of a strong upstream scientific research teamtoincrease
                product export business, and the company's main products were sold to Europe and the UnitedStates and
                across Asia, the annual sales volume of export business since 2020 is not less than 100million, and the
                annual sales of export business have reached by 2022(200) million. Our aim is: service and sincerity in
                exchange for your trust and support, mutual gain, createawin-win situation! Our company is willing to
                cooperate wholeheartedly with colleagues from all walks of life to createa better future!
            </p>
            <div class="row  wow animate__animated animate__lightSpeedInRight">
                <div class="col-md-3">
                    <div class="category-card">
                        <i class="fas fa-gem"></i>
                        <div data-count="12" class="counter big-name">0</div>
                        <div class="small-name">Years of Excellence</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-card">
                        <i class="fas fa-cogs"></i>
                        <div data-count="100" class="counter big-name">0</div>
                        <div class="small-name">Quality Products</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-card">
                        <i class="fas fa-users"></i>
                        <div data-count="500" class="counter big-name">0</div>
                        <div class="small-name">Skilled Employees</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-card">
                        <i class="fas fa-award"></i>
                        <div data-count="100" class="counter big-name">0</div>
                        <div class="small-name">Awards Won</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>