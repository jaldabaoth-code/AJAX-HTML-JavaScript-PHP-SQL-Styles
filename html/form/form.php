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
        <h2>Form</h2>
        <!-- HTML form -->
        <div class="form">
            <form action="result.php" method="POST" class="login">
                <label for="lastname">Lastname :</label>
                <input type="text" id="lastname" name="lastname">
                <label for="firstname">Firstname :</label>
                <input type="text" id="firstname" name="firstname">
                <label for="email">E-mail :</label>
                <input type="email" id="email" name="email">
                <label for="tel">Telephone :</label>
                <input type="tel" id="tel" name="tel">
                <label for="subject">Subject :</label>
                <select id="subject" name="subject">
                    <option value="SUBJECT 1">SUBJECT 1</option>
                    <option value="SUBJECT 2">SUBJECT 2</option>
                    <option value="SUBJECT 3">SUBJECT 3</option>
                    <option value="SUBJECT 3">SUBJECT 4</option>
                    <option value="SUBJECT 4">SUBJECT 5</option>
                </select>
                <label for="message">Message :</label>
                <textarea id="message" name="message"></textarea>
                <div class="button">
                    <button type="submit" class="button">Send your message</button>
                </div>
            </form>
        </div>
    </body>
</html>
