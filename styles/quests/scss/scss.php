<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <link rel="stylesheet" href="assets/styles/style.css">
        <title>Styles SCSS</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>Styles SCSS - Quest</h1>
        <h2>SCSS</h2>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">FindThePrecious</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">COMRADES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">THE RING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">REWARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">HUNTER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">REJOIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Rings -->
        <div class="d-flex flex-row justify-content-center align-items-center">
            <div class="orange-ring"></div>
            <h3>MY PRECIOUS</h3>
            <div class="orange-ring"></div>
        </div>
        <div class="d-flex flex-row justify-content-center align-items-center">
            <div class="yellow-ring"></div>
            <h3>THE UNIQUE RING</h3>
        </div>
        <div class="d-flex flex-row ring justify-content-center align-items-center">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="d-flex flex-row ring justify-content-center">
            <h3 class="row">PLEASE FIND IT</h3>
        </div>
        <!-- Footer -->
        <footer class="text-center text-lg-start">
            <div class="container p-4">
                <div class="row  d-flex justify-content-between">
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!" class="footer-text">ABOUT US</a>
                            </li>
                            <li>
                                <a href="#!" class="footer-text">COMRADES</a>
                            </li>
                            <li>
                                <a href="#!" class="footer-text">JOIN OUR ARMY</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="footer-text">FAQs</a>
                            </li>
                            <li>
                                <a href="#!" class="footer-text">REWARD CONDITIONS</a>
                            </li>
                            <li>
                                <a href="#!" class="footer-text">LEGAL NOTICE</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!" class="footer-text">SAURON4EVER.COM</a>
                            </li>
                            <li>
                                <a href="#!" class="footer-text">FIND IT ALSO ON TWITTER</a>
                            </li>
                            <li>
                                <a href="#!" class="footer-text">FINDTHEPRECIOUS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>
