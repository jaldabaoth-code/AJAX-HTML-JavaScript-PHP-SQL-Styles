<?php

/* Options in select */
$subjects = ['SUJET1' => 'SUJET1', 'SUJET2' => 'SUJET2', 'SUJET3' => 'SUJET3'];

/* Conditions for form constraints */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array_map('trim', $_POST);
    $errors = [];
    if (empty($data['lastname'])) {
        $errors[] = 'Le nom est obligatoire';
    }
    $lastnameLength = 255;
    if (strlen($data['lastname']) > $lastnameLength) {
        $errors[] = 'Le nom doit faire moins de ' . $lastnameLength . '  caractères';
    }
    if (empty($data['firstname'])) {
        $errors[] = 'Le prénom est obligatoire';
    }
    $firstnameLength = 255;
    if (strlen($data['firstname']) > $firstnameLength) {
        $errors[] = 'Le prénom doit faire moins de ' . $firstnameLength . ' caractères';
    }
    if (empty($data['email'])) {
        $errors[] = 'L\'email est obligatoire';
    }
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Mauvais format d\'email';
    }
    if (empty($data['tel'])) {
        $errors[] = 'Le numéro de téléphone est obligatoire';
    }
    if (!in_array($data['subject'], $sujets)) {
        $errors[] = 'La valeur du sujet n\'est pas valable';
    }
    if (empty($data['message'])) {
        $errors[] = 'Le message est obligatoire';
    }
    if (empty($errors)) {
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="#">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/styles/navbar.css">
        <link rel="stylesheet" href="../../assets/styles/style.css">
        <title>PHP Form</title>
    </head>
    <?php
        /* Navbar included */
        include '../../includes/navbar.php';
        include '../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP Form - Quest</h1>
        <h2>Form</h2>
        <!-- PHP form -->
        <div class="form">
            <form action="result.php" method="POST" class="login" novalidate>
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
                    <input type="text" id="firstname" name="firstname" placeholder="Votre Prénom" value="<?= $data['firstname'] ?? '' ?>" required>
                </div>
                <div>
                    <label for="email">E-mail :</label>
                    <input type="email" id="email" name="email" placeholder="exemple@mail.com" value="<?= $data['email'] ?? '' ?>" required>
                </div>
                <div>
                    <label for="tel">Téléphone :</label>
                    <input type="tel" id="tel" name="tel" placeholder="01 02 03 04 06" value="<?= $data['tel'] ?? '' ?>" required>
                </div>
                <div>
                    <label for="subject">Sujet :</label>
                    <select id="subject" name="subject">
                        <?php foreach ($subjects as $label => $subject) : ?>
                            <option <?php if (isset($data['subject']) && $data['subject'] === $subject) : ?> selected <?php endif; ?> value="<?= $subject ?>">
                            <?= $label ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" placeholder="Votre message" value="<?= $data['message'] ?? '' ?>" required></textarea>
                </div>
                <div class="button">
                    <button type="submit" class="button">Envoyer votre message</button>
                </div>
            </form>
        </div>
    </body>
</html>