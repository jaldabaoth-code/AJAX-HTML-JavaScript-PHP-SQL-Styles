<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* head included */
            include '../includes/head.html';
        ?>
        <link rel="stylesheet" href="../assets/styles/style.css">
        <title>Formulaire HTML</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <h2>FORMULAIRE HTML</h2>
        <!-- HTML form -->
        <div class="form">
            <form action="result.php" method="POST" class="login">
                <div>
                    <label for="lastname">Nom :</label>
                    <input type="text" id="lastname" name="lastname">
                </div>
                <div>
                    <label for="firstname">Prénom :</label>
                    <input type="text" id="firstname" name="firstname">
                </div>
                <div>
                    <label for="email">E-mail :</label>
                    <input type="email" id="email" name="email">
                </div>
                <div>
                    <label for="tel">Téléphone :</label>
                    <input type="tel" id="tel" name="tel">
                </div>
                <div>
                    <label for="subject">Sujet :</label>
                    <select id="subject" name="subject">
                        <option value="SUJET 1">SUJET 1</option>
                        <option value="SUJET 2">SUJET 2</option>
                        <option value="SUJET 3">SUJET 3</option>
                        <option value="SUJET 3">SUJET 4</option>
                        <option value="SUJET 4">SUJET 5</option>
                    </select>
                </div>
                <div>
                    <label for="message">Message :</label>
                    <textarea id="message" name="message"></textarea>
                </div>
                <div class="button">
                    <button type="submit" class="button">Envoyer votre message</button>
                </div>
            </form>
        </div>
    </body>
</html>
