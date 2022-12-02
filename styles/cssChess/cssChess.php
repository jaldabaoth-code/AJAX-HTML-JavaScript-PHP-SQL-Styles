<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="#">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/styles/navbar.css">
        <link rel="stylesheet" href="../../assets/styles/style.css">
        <link rel="stylesheet" href="style.css">
        <title>Chess CSS</title>
    </head>
    <?php
        /* Navbar included */
        include '../../includes/navbar.php';
        include '../includes/bottomNavbar.php';
    ?>
    <body class="text-center">
        <h1>Chess CSS</h1>
        <input type="checkbox" id="rotate">
        <label class="chessButton" for="rotate">Rotate</label>
        <input type="checkbox" id="threed">
        <label class="chessButton" for="threed">3D</label>
        <main class="chessboard">
            <div data-piece="♜"></div>
            <div data-piece="♞"></div>
            <div data-piece="♝"></div>
            <div data-piece="♛"></div>
            <div data-piece="♚"></div>
            <div data-piece="♝"></div>
            <div data-piece="♞"></div>
            <div data-piece="♜"></div>
            <div data-piece="♟"></div>
            <div data-piece="♟"></div>
            <div data-piece="♟"></div>
            <div data-piece="♟"></div>
            <div data-piece="♟"></div>
            <div data-piece="♟"></div>
            <div data-piece="♟"></div>
            <div data-piece="♟"></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div data-piece="♙"></div>
            <div data-piece="♙"></div>
            <div data-piece="♙"></div>
            <div data-piece="♙"></div>
            <div data-piece="♙"></div>
            <div data-piece="♙"></div>
            <div data-piece="♙"></div>
            <div data-piece="♙"></div>
            <div data-piece="♖"></div>
            <div data-piece="♘"></div>
            <div data-piece="♗"></div>
            <div data-piece="♕"></div>
            <div data-piece="♔"></div>
            <div data-piece="♗"></div>
            <div data-piece="♘"></div>
            <div data-piece="♖"></div>
        </main>
    </body>
</html>
