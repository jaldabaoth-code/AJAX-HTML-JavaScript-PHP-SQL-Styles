<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="#">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/styles/navbar.css">
        <link rel="stylesheet" href="../../assets/styles/style.css">
        <title>Workshop Wizard PHP</title>
    </head>
    <?php
        /* Navbar included */
        include '../../includes/navbar.php';
        include '../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>Workshop Wizard PHP</h1>
        <?php
            /* EXO4 - Include/require */
            include("header.php");

            /* EXO1 - Démarrage */
            echo "Hello fellowship <br/>";

            /* EXO2 - Variables */
            $ringBearer = "Sauron";
            $ringMaker = "Sauron";
            $numberOfCompanyMembers = "8";
            $ringiSOnTheFinger = true;
            echo "The ring bearer's name : " . $ringBearer . "<br/>";
            echo "The name of the creator of the ring : " . $ringMaker . "<br/>";
            echo "The number of company members : " . $numberOfCompanyMembers . "<br/>";
            echo "If the ring is on the finger or not : " . $ringiSOnTheFinger . "<br/>";
            $ringBearer = "Frodon";
            echo "The ring bearer's name 2 : " . $ringBearer . "<br/>";
            $numberOfCompanyMembers = $numberOfCompanyMembers + 1;
            echo "1 number of additional company members : " . $numberOfCompanyMembers . "<br/>";
            $middleEarth = "";
            echo $middleEarth;

            /* EXO3 - Strings */
            echo "The wearer is " . $ringBearer . "<br/>";
            $phrase = "The wearer is " . $ringBearer;
            echo $phrase . " and ". $ringMaker . " is looking for him <br/>";
            echo strtoupper($ringMaker) . "<br/>";
            $ringMaker = strtoupper($ringMaker);
            echo strtoupper($ringMaker) . "<br/>";

            /* EXO4 - Include/require */
            include("footer.php");
            $wizard = 'Gandalf';
            require("hello.php");
        ?>
    </body>
</html>
