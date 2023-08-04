<style>
    @import url("https://fonts.googleapis.com/css2?family=Lobster&display=swap");

    html {
        scroll-behavior: smooth;
    }

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
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="https://jcr-nem.site/">
            <span class="h3 mb-3 font-weight-bold" style="
          font-family: 'Righteous', cursive;
          text-shadow: -4px -1px 4px rgba(150, 150, 150, 5);
          color: #fff;
          font-size: 1.5rem;
        ">Jinchengrui New Materials</span>
        </a>
        <!-- Navbar Menu -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color: #fff; font-size: 28px"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutus">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#products">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactus">Contact</a>
                </li>
            </ul>
            <!-- For Sample Button -->
            <a href="#contactus" class="btn sample-btn">
                Request a Quote <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</nav>