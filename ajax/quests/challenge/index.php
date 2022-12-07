<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>AJAX Challenge</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>AJAX Challenge - Quest</h1>
        <h2>Simpson API</h2>
        <div class="container">
            <div class="content" id="simpson"></div>
            <button class="btn btn-primary">Next</button>
        </div>
        <!-- We need to load axios first! -->
        <script	src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js" integrity="sha256-S1J4GVHHDMiirir9qsXWc8ZWw74PHHafpsHp5PXtjTs=" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
