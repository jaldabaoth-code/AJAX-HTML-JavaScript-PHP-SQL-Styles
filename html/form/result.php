<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../includes/head.html';
        ?>
        <title>HTML Form</title>
    </head>
    <?php
        /* Navbar included */
        include '../../includes/navbar.php';
        include '../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>HTML Form - Quest</h1>
        <h2>Form Results</h2>
        <p>
            <?php
                echo "Firstname : " . $_POST['firstname'] . "<br />";
                echo "Lastname : " . $_POST['lastname'] . "<br />";
                echo "E-mail : " . $_POST['email'] . "<br />";
                echo "Telephone : " . $_POST['tel'] . "<br />";
                echo "Subject : " . $_POST['subject'] . "<br />";
                echo "Message : " . $_POST['message'] . "<br />";
            ?>
        </p>
    </body>
</html>
