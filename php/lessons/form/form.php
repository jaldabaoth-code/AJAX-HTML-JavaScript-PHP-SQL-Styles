<?php
    $titles = ['Mister' => 'Mr', 'Madam' => 'Mrs', 'Miss' => 'Ms'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        /*
            foreach ($_POST as $key => $value) {
                $data[$key] = trim($value);
            }
        */
        $data = array_map('trim', $_POST);
        $errors = [];
        if (empty($data['firstname'])) {
            $errors[] = 'Firstname is required';
        }
        $firstnameLength = 255;
        if (strlen($data['firstname']) > $firstnameLength) {
            $errors[] = 'The firstname must be less than ' . $firstnameLength . ' characters';
        }
        if (empty($data['lastname'])) {
            $errors[] = 'Lastname is required';
        }
        $lastnameLength = 255;
        if (strlen($data['lastname']) > $lastnameLength) {
            $errors[] = 'The lastname must be less than ' . $lastnameLength . ' characters';
        }
        if (empty($data['email'])) {
            $errors[] = 'E-mail is required';
        }
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Wrong e-mail format';
        }
        if (!in_array($data['title'], $titles)) {
            $errors[] = 'The title value is not valid';
        }
        if (empty($errors)) {
            // I process my form
            // Save in DB
            // Or send an email...
            header('Location: form.php');
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
        <title>PHP Form</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP Form - Lesson (Livecoding)</h1>
        <h2>Wilder</h2>
        <div class="form">
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
                <button type="submit" class="button">Send</button>
            </form>
        </div>
    </body>
</html>
