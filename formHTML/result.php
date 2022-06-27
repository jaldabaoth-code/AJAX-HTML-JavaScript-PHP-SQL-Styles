<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* head included */
            include '../includes/head.html';
        ?>
        <title>Resultats</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <h2>LES RESULTATS DU FORMULAIRE HTML</h2>
        <p>
            <?php
                echo "Nom : " . $_POST['firstname'] . "<br />";
                echo "Prénom : " . $_POST['lastname'] . "<br />";
                echo "E-mail : " . $_POST['email'] . "<br />";
                echo "Téléphonie : " . $_POST['tel'] . "<br />";
                echo "Sujet : " . $_POST['subject'] . "<br />";
                echo "Message : " . $_POST['message'] . "<br />";
            ?>
        </p>
    </body>
</html>
