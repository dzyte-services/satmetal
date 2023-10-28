<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SAT - Home</title>
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

    <?php
        include "header.php";
    ?>

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


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow " data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/hom-img1.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">About Us</div> -->
                    <h1 class="mb-4"></h1>
                    <p class="mb-4">All of our work is guaranteed to meet your satisfaction. Our shop has gone out of our way to work on jobs both in GTA and the province of Ontoria and with projects all over Canada. We offer detailing drawing, fabrication and erection.</p>
                </div>
            </div><br>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/hom-img2.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">About Us</div> -->
                    <h1 class="mb-4"></h1>
                    <p class="mb-4">We specialize in creating custom welding designs and fabrications for a wide variety of industires and residential projects.</p>
                </div>
            </div><br>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/hom-img3.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">About Us</div> -->
                    <h1 class="mb-4"></h1>
                    <p class="mb-4">We use the highest quality materials and customized designs on all the work that we do. We create long lasting fabrications that will be able to stand the test of time.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1">
                    <img src="img/hom-img1.jpg" class="img-fluid" alt="Image 1">
                </div>
                <div class="col-lg-6 order-lg-2">
                    <p>All of our work is guaranteed to meet your satisfaction. Our shop has gone out of our way to work on jobs both in GTA and the province of Ontoria and with projects all over Canada. We offer detailing drawing, fabrication and erection.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <p>We specialize in creating custom welding designs and fabrications for a wide variety of industires and residential projects.</p>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <img src="img/hom-img2.jpg" class="img-fluid" alt="Image 2">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <p>We use the highest quality materials and customized designs on all the work that we do. We create long lasting fabrications that will be able to stand the test of time.</p>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <img src="img/hom-img3.jpg" class="img-fluid" alt="Image 2">
                </div>
            </div>

        </div>
    </div> -->

    <?php
        include "footer.php";
    ?>

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