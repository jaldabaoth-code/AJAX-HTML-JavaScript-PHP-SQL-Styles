<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* head included */
            include '../includes/head.html';
        ?>
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="../assets/styles/formStyle.css">
        <title>SCSS</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <h2>SCSS</h2>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">TrouverLePrécieux</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">CAMARADES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">L'ANNEAU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">RÉCOMPENSE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CHASSEUR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">REJOINDRE</a>
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
            <h3>MON PRÉCIEUX</h3>
            <div class="orange-ring"></div>
        </div>
        <div class="d-flex flex-row justify-content-center align-items-center">
            <div class="yellow-ring"></div>
            <h3>LA BAGUE UNIQUE</h3>
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
            <h3 class="row">VEUILLEZ LE TROUVER</h3>
        </div>
        <!-- Footer -->
        <footer class="text-center text-lg-start">
            <div class="container p-4">
                <div class="row  d-flex justify-content-between">
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!" class="footer-text">À PROPOS DE NOUS</a>
                            </li>
                            <li>
                                <a href="#!" class="footer-text">CAMARADES</a>
                            </li>
                            <li>
                                <a href="#!" class="footer-text">REJOIGNEZ NOTRE ARMÉE</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="footer-text">FAQ</a>
                            </li>
                            <li>
                                <a href="#!" class="footer-text">CONDITIONS DE RÉCOMPENSE</a>
                            </li>
                            <li>
                                <a href="#!" class="footer-text">MENTIONS LEGALES</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!" class="footer-text">SAURON4EVER.COM</a>
                            </li>
                            <li>
                                <a href="#!" class="footer-text">RETROUVEZ-LE AUSSI SUR TWITTER</a>
                            </li>
                            <li>
                                <a href="#!" class="footer-text">TROUVEZLEPRÉCIEUX</a>
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
