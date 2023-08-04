<style>
    /* ContactUs */
    .ContactUs {
        padding: 50px 0px;
    }

    .ContactUs h2 {
        font-family: "Righteous", cursive;
        font-size: 3rem;
    }

    .ContactUs p {
        font-family: "Poppins", sans-serif;
    }

    .ContactUs .leftside {
        background: #06121c;
        color: white;
    }

    .contactUs_from {
        background: rgba(6, 18, 28, 0.9);
        padding: 40px;
    }

    .leftside h5 {
        font-size: 2rem;
        font-family: "Righteous", cursive;
        padding: 10px 0;
    }

    /* Assuming you have Font Awesome icons properly linked */

    .contact-info {
        padding-top: 20px;
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        cursor: pointer;
        /* Add a pointer cursor on hover to indicate interactivity */
    }

    .icon-left {
        font-size: 24px;
        /* You can adjust the icon size as needed */
        margin-right: 10px;
        transition: color 0.3s ease;
        /* Adding transition effect for smooth color change on hover */
    }

    .contact-text {
        transition: color 0.3s ease;
        /* Adding transition effect for smooth color change on hover */
    }

    /* Add hover styles to change the icon and text color to blue */
    .contact-info:hover .icon-left {
        color: blue;
    }

    .ContactUs hr {
        border: 5px solid #2066df;
        width: 22%;
        margin-top: -25px;
    }
</style>

<?php


?>

<!-- ContactUs -->
<section id="contactus" class="ContactUs">
    <div class="container mt-5">
        <h2 class="wow animate__animated animate__slideInLeft">Contact Us</h2>
        <hr align="left">
        <p>We warmly welcome any inquiries you may have! Please don't hesitate to reach out to us. Our team is here to
            assist you and provide the information you need. Feel free to contact us at your convenience. We look
            forward to hearing from you!</p>
        <br>
        <div class="row justify-content-between wow animate__animated animate__fadeInUpBig">
            <!-- Left Column -->
            <div class="col-md-4 leftside">
                <div class="bg-gray p-4">
                    <h5>Changzhou Jinchengrui New Materials Technology Co., Ltd</h5>
                    <div class="contact-info">
                        <i class="fas fa-home icon-left"></i>
                        <div class="contact-text">
                            Block B ,Changzhou Technology Street , Zhonglou District ,Changzhou ,China
                        </div>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-phone icon-left"></i>
                        <div class="contact-text">
                            0519-83972835 , +86 13951218935
                        </div>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-envelope icon-left"></i>
                        <div class="contact-text">
                            admin@jcr-nem.com
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-md-8 contactUs_from">
                <form id="contactUsFrom">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstName">First Name</label>
                            <input name="first_name" type="text" class="form-control" id="firstName"
                                placeholder="First Name" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastName">Last Name</label>
                            <input name="last_name" type="text" class="form-control" id="lastName"
                                placeholder="Last Name" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input name="phone" type="tel" class="form-control" id="phone" placeholder="Phone" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" required class="form-control" id="message" rows="5"
                            placeholder="Type your message here"></textarea>
                    </div>
                     <button id="SendMailBtn" name="mail" type="submit" class="btn btn-primary">Send</button>
                    <button id="loadbtn" style="display: none;" class="btn btn-primary" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>