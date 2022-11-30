<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* head included */
            include '../includes/head.html';
        ?>
        <link rel="stylesheet" href="../assets/styles/style.css">
        <link rel="stylesheet" href="./src/styles.css" />
        <title>Create element JS</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <h1 class="mt-5">Create element JS</h1>
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
        <script src="src/index.js"></script>
    </body>
</html>
