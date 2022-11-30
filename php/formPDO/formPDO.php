<?php

require_once '../.env.php';

$pdo = new \PDO(DSN, USER, PASS);

/* conditions for form constraints */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array_map('trim', $_POST);
    $errors = [];
    if (empty($data['lastname'])) {
        $errors[] = 'Le nom est obligatoire';
    }
    $lastnameLength = 45;
    if (strlen($data['lastname']) > $lastnameLength) {
        $errors[] = 'Le nom doit faire moins de ' . $lastnameLength . '  caractères';
    }
    if (empty($data['firstname'])) {
        $errors[] = 'Le prénom est obligatoire';
    }
    $firstnameLength = 45;
    if (strlen($data['firstname']) > $firstnameLength) {
        $errors[] = 'Le prénom doit faire moins de ' . $firstnameLength . ' caractères';
    }
    if (empty($errors)) {
        header('Location: formPDO.php');
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
            /* head included */
            include '../includes/head.html';
        ?>
        <link rel="stylesheet" href="../assets/styles/style.css">
        <title>Formulaire PDO</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <h2>FORMULAIRE PDO</h2>
        <!-- PDO form -->
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
                    <label for="lastname">Nom :</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Votre Nom" value="<?= $data['lastname'] ?? '' ?>" required>
                </div>
                <div>
                    <label for="firstname">Prénom :</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Votre Prenom" value="<?= $data['firstname'] ?? '' ?>" required>
                </div>
                <div class="button">
                    <button type="submit" class="button">Envoyer votre message</button>
                </div>
            </form>
        </div>
    </body>
</html>
