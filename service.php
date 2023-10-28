<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SAT - Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php
        include "header.php";
    ?>
    <!-- Navbar End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light py-5">
    <div class="container">
        <!-- <h1 class="mt-5 mb-4">SERVICES</h1> -->
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <img src="img/simg1.png" alt="Designing" class="img-fluid w-50 mb-3">
                    <h4>DESIGNING</h4>
                </div>
                <p class='text-justify'>SAT METAL FABRICATION offers design assistance for the development of building envelope solutions for architectural projects and fabrication solutions...</p>
                <ul>
                    <li>Solutions for structural performance, attachment methods, and aesthetics</li>
                    <li>Recommendations for fabrication and installation means and methods</li>
                    <li>Details for all building conditions</li>
                    <li>System Customization</li>
                    <li>Material Maximization</li>
                    <li>Cost savings options</li>
                    <li>Budgets</li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <img src="img/simg2.png" alt="Fabrication" class="img-fluid w-50 mb-3">
                    <h4>FABRICATION</h4>
                </div>
                <p>Our professionals are well experienced and trained to handle the metal fabrication jobs. We have the best machineries to meet the requirements of our customers and satisfy them completely...</p>
                <p>Customer satisfaction and production of flawless products is our prime goal we strive to achieve the same. We have all your requirements met which will be beneficial for the growth of your business. We will assist you in meeting all your stainless steel fabrication requirements.</p>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <img src="img/simg3.png" alt="Erection and Installation" class="img-fluid w-50">
                    <h4>ERECTION AND INSTALLATION</h4>
                </div>
                <p>We are committed to excellence by providing high-quality products and working closely with general contractors and sub-contractors to ensure each project is expertly completed...</p>
                <p>We undertake metal installations nationwide through our own skilled and trained installers. This allows us to service single architectural projects and multi-location branding programs throughout Canada...</p>
                <p>We have the expertise and experience in the installation and erection. Our projects stand witness to these specialties...</p>
            </div>
        </div>
    </div>
    </div>
    <!-- Service End -->




    <!-- Footer Start -->
    <?php
        include 'footer.php';
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>