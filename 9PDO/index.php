<?php

require_once '_connec.php';
$pdo = new \PDO(DSN, USER, PASS);


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
        header('Location: index.php');
        $query = "INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':firstname', $data['firstname'], \PDO::PARAM_STR);
        $statement->bindValue(':lastname', $data['lastname'], \PDO::PARAM_STR);
        $statement->execute();
        $friends = $statement->fetchAll();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <h1>FORMULAIRE</h1>

        <form action="" method="POST" class="login" novalidate>
            <?php if (!empty($errors)) : ?>
                <ul class="error">
                    <?php foreach ($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div>
                <label  for="lastname">Nom :</label>
                <input  type="text"  id="lastname"  name="lastname" placeholder="Votre Nom" value="<?= $data['lastname'] ?? '' ?>" required>

            </div>
            <div>
                <label  for="firstname">Prénom :</label>
                <input  type="text"  id="firstname"  name="firstname" placeholder="Votre Prenom" value="<?= $data['firstname'] ?? '' ?>" required>
            </div>
            <div  class="button">
                <button  type="submit" class="button">Envoyer votre message</button>
            </div>
        </form>
    </div>
</body>
</html>