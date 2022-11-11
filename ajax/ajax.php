<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* head included */
            include '../includes/head.html';
        ?>
        <link rel="stylesheet" href="../assets/styles/formStyle.css">
        <title>Ajax quest challenge</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <h2>Simpson API</h1>
        <section class="section">
            <div class="container">
                <div class="content" id="simpson"></div>
                <button class="btn btn-primary mt-3">Next</button>
            </div>
        </section>
        <!-- We need to load axios first! -->
        <script	src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js" integrity="sha256-S1J4GVHHDMiirir9qsXWc8ZWw74PHHafpsHp5PXtjTs="	crossorigin="anonymous"	></script>
        <script src="assets/script.js"></script>
    </body>
</html>
