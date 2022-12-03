<?php
    require_once '../../../.env.php';

    $pdo = new \PDO(DSN, USER, PASS);
    /* Conditions for form constraints */
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = array_map('trim', $_POST);
        $errors = [];
        if (empty($data['lastname'])) {
            $errors[] = 'Lastname is required';
        }
        $lastnameLength = 45;
        if (strlen($data['lastname']) > $lastnameLength) {
            $errors[] = 'The lastname must be less than ' . $lastnameLength . ' characters';
        }
        if (empty($data['firstname'])) {
            $errors[] = 'Firstname is required';
        }
        $firstnameLength = 45;
        if (strlen($data['firstname']) > $firstnameLength) {
            $errors[] = 'The firstname must be less than ' . $firstnameLength . ' characters';
        }
        if (empty($errors)) {
            header('Location: pdo.php');
            $firstname = trim($_POST['firstname']);
            $lastname = trim($_POST['lastname']);
            $query = "INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)";
            $statement = $pdo->prepare($query);
            $statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
            $statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);
            $statement->execute();
            $friends = $statement->fetchAll();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>PHP PDO</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP PDO - Quest</h1>
        <h2>PDO</h2>
        <div class="form">
            <form action="" method="POST" class="login" novalidate>
                <?php if (!empty($errors)) : ?>
                    <ul class="error">
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <div>
                    <label for="lastname">Lastname :</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Your Lastname" value="<?= $data['lastname'] ?? '' ?>" required>
                </div>
                <div>
                    <label for="firstname">Firstname :</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Your Firstname" value="<?= $data['firstname'] ?? '' ?>" required>
                </div>
                <div class="button">
                    <button type="submit" class="button">Send your message</button>
                </div>
            </form>
        </div>
    </body>
</html>
