<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* head included */
            include '../includes/head.html';
        ?>
        <link rel="stylesheet" href="../assets/styles/formStyle.css">
        <title>Workshop Wizard PHP</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <h1>Workshop Wizard PHP</h1>
        <?php
            /* EXO4 - Include/require */
            include("header.php");

            /* EXO1 - Démarrage */
            echo "Hello fellowship \n <br/>";

            /* EXO2 - Variables */
            $ringBearer = "Sauron";
            $ringMaker = "Sauron";
            $numberOfCompanyMembers = "8";
            $ringiSOnTheFinger = true;
            echo "The ring bearer's name : " . $ringBearer . "\n <br/>";
            echo "The name of the creator of the ring : " . $ringMaker . "\n <br/>";
            echo "The number of company members : " . $numberOfCompanyMembers . "\n <br/>";
            echo "If the ring is on the finger or not : " . $ringiSOnTheFinger . "\n <br/>";
            $ringBearer = "Frodon";
            echo "The ring bearer's name 2 : " . $ringBearer . "\n <br/>";
            $numberOfCompanyMembers = $numberOfCompanyMembers + 1;
            echo "1 number of additional company members : " . $numberOfCompanyMembers . "\n <br/>";
            $middleEarth = "";
            echo $middleEarth;

            /* EXO3 - Strings */
            echo "The wearer is " . $ringBearer . "\n <br/>";
            $phrase = "The wearer is " . $ringBearer;
            echo $phrase . " and ". $ringMaker . " is looking for him \n <br/>";
            echo strtoupper($ringMaker) . "\n <br/>";
            $ringMaker = strtoupper($ringMaker);
            echo strtoupper($ringMaker) . "\n <br/>";

            /* EXO4 - Include/require */
            include("footer.php");
            $wizard = 'Gandalf';
            require("wizard.php");
        ?>
    </body>
</html>
    