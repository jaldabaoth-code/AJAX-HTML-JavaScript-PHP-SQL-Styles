<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* head included */
            include '../includes/head.html';
        ?>
        <link rel="stylesheet" href="../assets/styles/style.css">
        <link rel="stylesheet" href="style.css">
        <title>Chess CSS</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
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
