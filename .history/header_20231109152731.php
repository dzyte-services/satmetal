    <?php
        $currentPage1 = basename($_SERVER['PHP_SELF']);
    ?>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <div class="row">
                    <div class="col-lg-6 col-md-4">
                        <a href="index.php" class="navbar-brand">
                            <img class="img-fluid" width="40%" height="40%" src="img/logo2.jpeg" alt="">
                        </a>
                        <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="col-lg-6 col-md-8">
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link  <?php echo ($currentPage1 === 'index.php') ? 'active' : ''; ?>">Home</a>
                        <a href="about.php" class="nav-item nav-link <?php echo ($currentPage1 === 'about.php') ? 'active' : ''; ?>">About Us</a>
                        <a href="service.php" class="nav-item nav-link <?php echo ($currentPage1 === 'service.php') ? 'active' : ''; ?>">Services</a>
                        <a href="project.php" class="nav-item nav-link <?php echo ($currentPage1 === 'project.php') ? 'active' : ''; ?>">Gallery</a>
                        
                        <a href="contact.php" class="nav-item nav-link <?php echo ($currentPage1 === 'contact.php') ? 'active' : ''; ?>">Contact us</a>
                    </div>
                    <butaton type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                </div>
                    </div>
                </div>
                
                
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    
    <div>
          <?php
                $currentPage = $_SERVER['SCRIPT_NAME'];
                $current_page = basename($currentPage);
                
                if ($current_page === "index.php") {
                    include("header/home.php");
                } elseif ($current_page === "about.php") {
                    include("header/about.php");
                } elseif ($current_page === "service.php") {
                    include("header/service.php");
                } elseif ($current_page === "project.php") {
                    include("header/gallery.php");
                } elseif ($current_page === "contact.php") {
                    include("header/contact.php");
                }
          
           
            
            ?>
    </div>