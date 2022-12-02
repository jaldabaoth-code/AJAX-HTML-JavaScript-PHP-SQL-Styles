<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="#" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/styles/navbar.css">
        <link rel="stylesheet" href="../../assets/styles/style.css">
        <link rel="stylesheet" href="./assets/styles/style.css">
        <title>JavaScipt Create Element</title>
    </head>
    <?php
        /* Navbar included */
        include '../../includes/navbar.php';
        include '../includes/bottomNavbar.php';
    ?>
    <body>
        <h1 class="mt-5">JavaScipt Create Element - Quest</h1>
        <h2>Adopt A Cat!</h2>
        <div class="cards">
            <div class="card">
                <div class="card-header">
                    <div class="card-img"></div>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Billy</h3>
                    <button class="card-button">Adopt Now</button>
                </div>
            </div>
        </div>
        <h2 class="title">Hover me</h1>
        <img src="https://placedog.net/500" class="img-dogs displayed" alt="picture of dog" />
        <script src="assets/js/index.js"></script>
    </body>
</html>
