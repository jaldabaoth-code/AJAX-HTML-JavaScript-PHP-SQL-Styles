<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>PHP Function</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP Function - Quest</h1>
        <h2>Function</h2>
        <?php
            function writeSecretSentence(string $animal, string $object): string
            {
                $secretSentence = $animal . " loses to " . $object;
                return $secretSentence;
            }
            $animal = readline("Enter the name of an animal : ");
            $objet = readline("Enter the name of an object : ");
            $secretSentence = writeSecretSentence($animal, $objet);
            echo $secretSentence;
        ?>
    </body>
</html>
