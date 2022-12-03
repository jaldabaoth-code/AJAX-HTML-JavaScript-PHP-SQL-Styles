<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <link rel="stylesheet" href="../assets/styles/style.css">
        <title>PHP Form</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP Form - Quest</h1>
        <h2>Form Results</h2>
        <p>
            <?php
                echo "Firstname : " . $_POST['firstname'] . "<br />";
                echo "Lastname : " . $_POST['lastname'] . "<br />";
                echo "E-mail : " . $_POST['email'] . "<br />";
                echo "Phone number : " . $_POST['phone'] . "<br />";
                echo "Subject : " . $_POST['subject'] . "<br />";
                echo "Message : " . $_POST['message'] . "<br />";
            ?>
        </p>
    </body>
</html>
