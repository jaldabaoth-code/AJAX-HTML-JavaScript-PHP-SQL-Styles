<?php
    /* Options in select */
    $subjects = ['SUBJECT1' => 'SUBJECT1', 'SUBJECT2' => 'SUBJECT2', 'SUBJECT3' => 'SUBJECT3'];
    /* Conditions for form constraints */
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = array_map('trim', $_POST);
        $errors = [];
        if (empty($data['lastname'])) {
            $errors[] = 'Lastname is required';
        }
        $lastnameLength = 255;
        if (strlen($data['lastname']) > $lastnameLength) {
            $errors[] = 'The lastname must be less than ' . $lastnameLength . ' characters';
        }
        if (empty($data['firstname'])) {
            $errors[] = 'Firstname is required';
        }
        $firstnameLength = 255;
        if (strlen($data['firstname']) > $firstnameLength) {
            $errors[] = 'The firstname must be less than ' . $firstnameLength . ' characters';
        }
        if (empty($data['email'])) {
            $errors[] = 'E-mail is required';
        }
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Wrong e-mail format';
        }
        if (empty($data['phone'])) {
            $errors[] = 'Phone number is required';
        }
        if (!in_array($data['subject'], $subjects)) {
            $errors[] = 'Subject value is invalid';
        }
        if (empty($data['message'])) {
            $errors[] = 'Message is required';
        }
        if (empty($errors)) {
            session_start();
            $_SESSION = $_POST;
            session_write_close();
            header('Location: result.php');
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
        <h1>PHP Form - Quest</h1>
        <h2>Form</h2>
        <div class="form">
            <form action="form.php" method="POST" novalidate>
                <?php if (!empty($errors)) : ?>
                    <ul class="error">
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                    <label for="lastname">Lastname :</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Your Lastname" value="<?= $data['lastname'] ?? '' ?>" required>
                    <label for="firstname">Firstname :</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Your Firstname" value="<?= $data['firstname'] ?? '' ?>" required>
                    <label for="email">E-mail :</label>
                    <input type="email" id="email" name="email" placeholder="exemple@email.com" value="<?= $data['email'] ?? '' ?>" required>
                    <label for="phone">Phone number :</label>
                    <input type="phone" id="phone" name="phone" placeholder="01 02 03 04 06" value="<?= $data['phone'] ?? '' ?>" required>
                    <label for="subject">Subject :</label>
                    <select id="subject" name="subject">
                        <?php foreach ($subjects as $label => $subject) : ?>
                            <option <?php if (isset($data['subject']) && $data['subject'] === $subject) : ?> selected <?php endif; ?> value="<?= $subject ?>">
                            <?= $label ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" placeholder="Your Message" value="<?= $data['message'] ?? '' ?>" required></textarea>
                <div class="button">
                    <button type="submit" class="button">Send</button>
                </div>
            </form>
        </div>
    </body>
</html>
