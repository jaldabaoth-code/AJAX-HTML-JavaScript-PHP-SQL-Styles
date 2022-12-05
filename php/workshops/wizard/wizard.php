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
            /* Exercise 4 - Include */
            include("includes/header.php");
            /* Exercise 1 - Startup */
            echo "Hello fellowship <br/>";
            /* Exercise 2 - Variables */
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
            /* Exercise 3 - Strings */
            echo "The wearer is " . $ringBearer . "<br/>";
            $phrase = "The wearer is " . $ringBearer;
            echo $phrase . " and ". $ringMaker . " is looking for him <br/>";
            echo strtoupper($ringMaker) . "<br/>";
            $ringMaker = strtoupper($ringMaker);
            echo strtoupper($ringMaker) . "<br/>";
            /* Exercise 4 - Include/Require */
            include("includes/footer.php");
            $wizard = 'Gandalf';
            require("includes/hello.php");
        ?>
    </body>
</html>
