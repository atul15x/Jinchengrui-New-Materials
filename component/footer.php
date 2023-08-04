<style>
    /* 
---------------------------------------------
footer
--------------------------------------------- 
*/
    footer {
        background-color: #06121c;
        padding-top: 30px;
    }

    footer .social {
        overflow: hidden;
        margin-top: 10px;
        text-align: center;
    }

    footer .social li {
        margin: 0px 10px;
        display: inline-block;
    }

    footer .social li a {
        color: #06121c;
        text-align: center;
        background-color: #fff;
        width: 36px;
        height: 36px;
        line-height: 36px;
        border-radius: 50%;
        display: inline-block;
        font-size: 16px;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    footer .social li a:hover {
        background-color: blue;
        color: #fff;
    }

    footer .copyright {
        text-align: center;
        border-top: 1px solid rgba(250, 250, 250, 0.2);
        margin-top: 30px;
        padding-top: 30px;
        padding-bottom: 30px;
        font-weight: 400;
        font-size: 12px;
        color: #fff;
        letter-spacing: 0.88px;
        text-transform: uppercase;
    }

    @media (max-width: 991px) {
        footer .text {
            margin-bottom: 30px;
        }

        footer h5 {
            margin-bottom: 15px;
        }

        footer .footer-nav {
            margin-bottom: 30px;
        }
    }

    /* 
---------------------------------------------
footer
--------------------------------------------- 
*/
    footer {
        background-color: #06121c;
        padding-top: 30px;
    }

    footer .social {
        overflow: hidden;
        margin-top: 10px;
        text-align: center;
    }

    footer .social li {
        margin: 0px 10px;
        display: inline-block;
    }

    footer .social li a {
        color: #06121c;
        text-align: center;
        background-color: #fff;
        width: 36px;
        height: 36px;
        line-height: 36px;
        border-radius: 50%;
        display: inline-block;
        font-size: 16px;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    footer .social li a:hover {
        background-color: blue;
        color: #fff;
    }

    footer .copyright {
        text-align: center;
        border-top: 1px solid rgba(250, 250, 250, 0.2);
        margin-top: 30px;
        padding-top: 30px;
        padding-bottom: 30px;
        font-weight: 400;
        font-size: 12px;
        color: #fff;
        letter-spacing: 0.88px;
        text-transform: uppercase;
    }

    @media (max-width: 991px) {
        footer .text {
            margin-bottom: 30px;
        }

        footer h5 {
            margin-bottom: 15px;
        }

        footer .footer-nav {
            margin-bottom: 30px;
        }
    }
</style>

<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div data-aos="slide-up" data-aos-duration="1500" class="col-lg-12 col-md-12 col-sm-12">
                <ul class="social">
                    <li><a href="https://www.facebook.com/TitaniumDioxiedeTIO2" target="__blank"><i
                                class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright">Changzhou Jinchengrui New Materials Technology
                    Co., Ltd</p>
            </div>
        </div>
    </div>
</footer>


<script src="./js/code.jquery.com_jquery-3.3.1.min.js"></script>
    
<!-- Add Bootstrap JS link here -->
<script src="./js/popperjs_core@2.9.1_dist_umd_popper.min.js"></script>
<script src="./js/bootstrap_4.5.2_js_bootstrap.min.js"></script>

<!-- Include Owl Carousel 2 JS -->
<script src="./js/OwlCarousel2_2.3.4_owl.carousel.min.js"></script>

<!-- Initialize Jypedjs  -->
<script src="./js/typed.js"></script>

<!-- SweetAlert2 -->
<script src="./js/sweetalert2_11.7.20_sweetalert2.min.js"></script>

<!-- wow-js -->
<script src="./js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!-- Setup and start animation! -->
<script>
    var typed = new Typed("#element", {
        strings: ["<i>TITANIUM DIOXIDE</i>"],
        typeSpeed: 120,
        loop: true,
    });
</script>
<script>
    AOS.init();
</script>
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            autoplay: true, // Enable autoplay
            autoplayTimeout: 3000, // Set autoplay timeout to 2 seconds
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 4,
                },
            },
        });
    });
</script>
<script>
    // JavaScript to activate the carousel and set the interval
    $(document).ready(function () {
        $("#carouselExample").carousel({
            interval: 5000, // Change slide every 1 second
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
<script>
    // Get all the counter elements on the page
    const counters = document.querySelectorAll(".counter");

    // Set up a Waypoint for each counter
    counters.forEach((counter) => {
        const waypoint = new Waypoint({
            element: counter,
            handler: function () {
                // Get the target count value from the "data-count" attribute
                const targetCount = parseInt(counter.getAttribute("data-count"));

                // Get the current count value from the element's innerText
                let currentCount = parseInt(counter.innerText);

                // Function to update the counter's value with an animation
                const updateCount = () => {
                    const increment = Math.ceil(targetCount / 200); // Adjust animation speed here
                    if (currentCount < targetCount) {
                        currentCount += increment;
                        counter.innerText = currentCount;
                        setTimeout(updateCount, 20); // Adjust animation speed here
                    } else {
                        counter.innerText = targetCount;
                    }
                };

                updateCount(); // Start the counter animation
                this.destroy(); // Destroy the Waypoint after triggering it once
            },
            offset: "80%", // Adjust the offset value as needed based on your layout
        });
    });

</script>

<script>

    $("#contactUsFrom").submit((e) => {
        e.preventDefault();
        
        $("#SendMailBtn").hide();
        $('#loadbtn').show();

        var form = $("#contactUsFrom").serialize();
        $.ajax({
            url: "./sendmail.php",
            method: 'POST',
            data: form,
            success: function (res) {

                if (res == "Success") {
                    Swal.fire(
                        'Mail Sent!',
                        'Thanks For Contact Us!! We Will Conatct You You As Soon As Possible',
                        'success'
                    )
                } else if (res == "Error") {
                    Swal.fire(
                        'Error!',
                        'Having issue,Try Again',
                        'error'
                    )
                }
                
                $("#SendMailBtn").show();
                $('#loadbtn').hide();

            },
            error: function (res) {

            }
        })
    })

</script>

</body>

</html>