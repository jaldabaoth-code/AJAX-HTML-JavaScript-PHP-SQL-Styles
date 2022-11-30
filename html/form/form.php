<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="#" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/styles/navbar.css">
        <link rel="stylesheet" href="../../assets/styles/style.css">
        <title>HTML Form</title>
    </head>
    <?php
        /* Navbar included */
        include '../../includes/navbar.php';
        include '../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>HTML Form - Quest</h1>
        <!-- HTML form -->
        <div class="form">
            <form action="result.php" method="POST" class="login">
                <div>
                    <label for="lastname">Lastname :</label>
                    <input type="text" id="lastname" name="lastname">
                </div>
                <div>
                    <label for="firstname">Firstname :</label>
                    <input type="text" id="firstname" name="firstname">
                </div>
                <div>
                    <label for="email">E-mail :</label>
                    <input type="email" id="email" name="email">
                </div>
                <div>
                    <label for="tel">Telephone :</label>
                    <input type="tel" id="tel" name="tel">
                </div>
                <div>
                    <label for="subject">Subject :</label>
                    <select id="subject" name="subject">
                        <option value="SUBJECT 1">SUBJECT 1</option>
                        <option value="SUBJECT 2">SUBJECT 2</option>
                        <option value="SUBJECT 3">SUBJECT 3</option>
                        <option value="SUBJECT 3">SUBJECT 4</option>
                        <option value="SUBJECT 4">SUBJECT 5</option>
                    </select>
                </div>
                <div>
                    <label for="message">Message :</label>
                    <textarea id="message" name="message"></textarea>
                </div>
                <div class="button">
                    <button type="submit" class="button">Send your message</button>
                </div>
            </form>
        </div>
    </body>
</html>
