<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SAT - Gallery</title>
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
    <link href="css/project.css" rel="stylesheet">


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
        include 'header.php';
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


    <!-- Case Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
        <div class="tz-gallery" id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
            <div class="row carousel-inner overflow-hidden">
                <div class="col-lg-2">
                    <a class="lightbox" href="img/gallery/gimg1.jpg" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="0">
                        <img
                            src="img/gallery/gimg1.jpg"
                            data-mdb-img="img/gallery/gimg1.jpg"
                            alt="Table Full of Spices"
                            class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
                        />
                    </a>
                </div>

                <div class="col-lg-2">
                    <a class="lightbox" href="img/gallery/gimg2.jpg">
                        <img
                            src="img/gallery/gimg2.jpg"
                            data-mdb-img="img/gallery/gimg2.jpg"
                            alt="Table Full of Spices"
                            class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
                        />
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="lightbox" href="img/gallery/gimg3.jpg">
                        <img
                            src="img/gallery/gimg3.jpg"
                            data-mdb-img="img/gallery/gimg3.jpg"
                            alt="Table Full of Spices"
                            class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
                        />
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="lightbox" href="img/gallery/gimg4.jpg">
                        <img
                            src="img/gallery/gimg4.jpg"
                            data-mdb-img="img/gallery/gimg4.jpg"
                            alt="Table Full of Spices"
                            class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
                        />
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="lightbox" href="img/gallery/gimg5.jpg">
                        <img
                            src="img/gallery/gimg5.jpg"
                            data-mdb-img="img/gallery/gimg5.jpg"
                            alt="Table Full of Spices"
                            class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
                        />
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="lightbox" href="img/gallery/gimg6.jpg">
                        <img
                            src="img/gallery/gimg6.jpg"
                            data-mdb-img="img/gallery/gimg6.jpg"
                            alt="Table Full of Spices"
                            class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
                        />
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="lightbox" href="img/gallery/gimg7.jpg">
                        <img
                            src="img/gallery/gimg7.jpg"
                            data-mdb-img="img/gallery/gimg7.jpg"
                            alt="Table Full of Spices"
                            class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
                        />
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="lightbox" href="img/gallery/gimg8.jpg">
                        <img
                            src="img/gallery/gimg8.jpg"
                            data-mdb-img="img/gallery/gimg8.jpg"
                            alt="Table Full of Spices"
                            class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
                        />
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="lightbox" href="img/gallery/gimg9.jpg">
                        <img
                            src="img/gallery/gimg9.jpg"
                            data-mdb-img="img/gallery/gimg9.jpg"
                            alt="Table Full of Spices"
                            class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
                        />
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="lightbox" href="img/gallery/gimg10.jpg">
                        <img
                            src="img/gallery/gimg10.jpg"
                            data-mdb-img="img/gallery/gimg10.jpg"
                            alt="Table Full of Spices"
                            class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
                        />
                    </a>
                </div>
                <div class="col-lg-2">
                    <a class="lightbox" href="img/gallery/gimg11.jpg">
                        <img
                            src="img/gallery/gimg11.jpg"
                            data-mdb-img="img/gallery/gimg11.jpg"
                            alt="Table Full of Spices"
                            class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
                        />
                    </a>
                </div>
                <div class="col-lg-2">
                    <img
                        src="img/gallery/gimg12.jpg"
                        data-mdb-img="img/gallery/gimg12.jpg"
                        alt="Dark Roast Iced Coffee"
                        class="w-100 shadow-1-strong rounded"
                    />
                </div>
                <div class="col-lg-2">
                    <img
                        src="img/gallery/gimg13.jpg"
                        data-mdb-img="img/gallery/gimg13.jpg"
                        alt="Dark Roast Iced Coffee"
                        class="w-100 shadow-1-strong rounded"
                    />
                </div>
                <div class="col-lg-2">
                    <img
                        src="img/gallery/gimg14.jpg"
                        data-mdb-img="img/gallery/gimg14.jpg"
                        alt="Dark Roast Iced Coffee"
                        class="w-100 shadow-1-strong rounded"
                    />
                </div>
                <div class="col-lg-2">
                    <img
                        src="img/gallery/gimg15.jpg"
                        data-mdb-img="img/gallery/gimg15.jpg"
                        alt="Dark Roast Iced Coffee"
                        class="w-100 shadow-1-strong rounded"
                    />
                </div>
                <div class="col-lg-2">
                    <img
                        src="img/gallery/gimg16.jpg"
                        data-mdb-img="img/gallery/gimg16.jpg"
                        alt="Dark Roast Iced Coffee"
                        class="w-100 shadow-1-strong rounded"
                    />
                </div>
                <div class="col-lg-2">
                    <img
                        src="img/gallery/gimg17.jpg"
                        data-mdb-img="img/gallery/gimg17.jpg"
                        alt="Dark Roast Iced Coffee"
                        class="w-100 shadow-1-strong rounded"
                    />
                </div>
                <div class="col-lg-2">
                    <img
                        src="img/gallery/gimg18.jpg"
                        data-mdb-img="img/gallery/gimg18.jpg"
                        alt="Dark Roast Iced Coffee"
                        class="w-100 shadow-1-strong rounded"
                    />
                </div>
                
                
            </div>
        </div>
        </div>
    </div>
    <!-- Case End -->



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
    <script>
        var myCarousel = document.querySelector('#carouselExampleControls')
        var myModalEl = document.getElementById('exampleModal')

        myModalEl.addEventListener('show.bs.modal', function (event) {
            const trigger = event.relatedTarget
            var bsCarousel = bootstrap.Carousel.getInstance(myCarousel)
            bsCarousel.to(trigger.dataset.bsSlideTo)
        })

    </script>
</body>

</html>