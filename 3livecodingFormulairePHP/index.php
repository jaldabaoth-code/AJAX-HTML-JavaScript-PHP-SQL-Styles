<?php

$titles = ['Monsieur' => 'M', 'Madame' => 'Mme', 'Mademoiselle' => 'Melle'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // foreach($_POST as $key => $value) {
    //     $data[$key] = trim($value);
    // }
    $data = array_map('trim', $_POST);

    $errors = [];

    if (empty($data['firstname'])) {
        $errors[] = 'Le prénom est obligatoire';
    }

    $firstnameLength = 255;
    if (strlen($data['firstname']) > $firstnameLength) {
        $errors[] = 'Le prénom doit faire moins de ' . $firstnameLength . ' caractères';
    }

    if (empty($data['lastname'])) {
        $errors[] = 'Le nom est obligatoire';
    }

    $lastnameLength = 255;
    if (strlen($data['lastname']) > $lastnameLength) {
        $errors[] = 'Le nom doit faire moins de ' . $lastnameLength . '  caractères';
    }

    if (empty($data['email'])) {
        $errors[] = 'L\'email est obligatoire';
    }

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Mauvais format d\'email';
    }


    if (!in_array($data['title'], $titles)) {
        $errors[] = 'La valeur du titre n\'est pas valable';
    }

    if (empty($errors)) {
        // je traite mon form
        // enregistre en BDD
        // ou j'envoie un mail...

        header('Location: index.php'); // GET
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livecoding form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Wilder</h1>

    <form action="" method="POST" novalidate>
        <?php if (!empty($errors)) : ?>
            <ul class="error">
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <label for="firstname">Firstname</label>
        <input type="text" id="firstname" name="firstname" placeholder="Bilbo" value="<?= $data['firstname'] ?? '' ?>" required>

        <label for="lastname">Lastname</label>
        <input type="text" id="lastname" name="lastname" placeholder="Baggins" value="<?= $data['lastname'] ?? '' ?>" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="bilbo@baggins.me" value="<?= $data['email'] ?? '' ?>" required>

        <label for="title">Title</label>
        <select name="title" id="title">
            <?php foreach ($titles as $label => $title) : ?>
                <option <?php if (isset($data['title']) && $data['title'] === $title) : ?> selected <?php endif; ?> value="<?= $title ?>">
                    <?= $label ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button>Send</button>
    </form>
</body>

</html>