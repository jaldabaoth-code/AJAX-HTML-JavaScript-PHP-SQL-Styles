<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>PHP Wizard</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP Wizard - Workshop</h1>
        <h2>Wizard</h2>
        <?php
            /* EXO4 - Include/require */
            include("includes/header.php");
            /* EXO1 - Startup */
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
            include("includes/footer.php");
            $wizard = 'Gandalf';
            require("includes/hello.php");
        ?>
    </body>
</html>
