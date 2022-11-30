<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="#" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/styles/navbar.css">
        <link rel="stylesheet" href="../../assets/styles/style.css">
        <title>AJAX</title>
    </head>
    <?php
        /* navbar included */
        include '../../includes/navbar.php';
        include '../includes/navbar.php';
    ?>
    <body>
        <h1>Ajax quest challenge</h1>
        <h2>Simpson API</h2>
        <section>
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
