<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SAT - About</title>
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


    <!-- About Start -->
    <!-- Modal gallery -->
    <!-- Section: Images -->
    <div class="container-fluid py-5">
        <div class="container">
        <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
            <img src="img/img2.png" class="" style="width: 70%;" />
            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
            <img src="img/img3.png" class="" style="width: 70%;" />
            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
            <img src="img/img1.png" class="" style="width: 70%;" />
            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
            <img src="img/img4.jpeg" class="" style="width: 70%; margin-top: -35px;" />
            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
            </a>
        </div>
    </div>
</div>


        </div>
    </div>
    

    <!-- Footer Start -->
    <?php
        include "footer.php";
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