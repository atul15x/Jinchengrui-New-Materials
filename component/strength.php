<style>
    @import url("https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,400;1,300&display=swap");

    #features {
        text-align: center;
        padding: 50px 0;
        background-color: white;
        display: flex;
        text-align: center;
        justify-content: center;
        font-family: "IBM Plex Mono", monospace;
    }

    #features .row {
        display: flex;
        justify-content: center;
    }

    #features .col-md-3 {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 0 10px;
        /* Adjust the spacing between columns as needed */
    }

    #features i {
        font-size: 48px;
        /* Adjust the icon size as needed */
        margin-bottom: 20px;
        color: #2066df;
        transition: color 0.3s;
        /* Add a transition for smooth color change */
    }

    #features h3 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    #features p {
        font-size: 16px;
    }

    /* Additional style for icon color change on hover */
    #features .col-md-3:hover i {
        color: #06121c;
    }
</style>

<section id="features" class="py-5 features">
    <div class="container">
        <div class="wow animate__animated animate__slideInUp row">
            <div class="col-md-3">
                <i class="fa-solid fa-gear" style="color: #2066df"></i>
                <h3>Comprehensive</h3>
                <p>Integrating production, research and development, and trade</p>
            </div>
            <div class="col-md-3">
                <i class="fa-solid fa-file-shield" style="color: #2066df"></i>
                <h3>Core</h3>
                <p>
                    Strict and systematic quality and protection of green environment
                </p>
            </div>
            <div class="col-md-3">
                <i class="fa-solid fa-crosshairs" style="color: #2066df"></i>
                <h3>The Goal</h3>
                <p>Research and Development of Technological Innovation</p>
            </div>
            <div class="col-md-3">
                <i class="fa-solid fa-globe" style="color: #2066df"></i>
                <h3>Foreign Markets</h3>
                <p>
                    Exported to Europe, America, Middle East, Asia Pacific and Other
                    Countries and Regions
                </p>
            </div>
        </div>
    </div>
</section>