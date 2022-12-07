<?php
    require_once '../../../.env.php';
    $pdo = new \PDO(DSN, USER, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id = $_GET['id'];
    $query = "SELECT * FROM animal WHERE id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $animal = $statement->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <link rel="stylesheet" href="assets/styles/style.css">
        <title>PHP PDO</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP PDO - Lesson</h1>
        <h2>Animal</h2>
        <div class="animal">
            <p><?= $animal['name'] ?> - <?= $animal['weight'] ?> kg</p>
            <img src="<?= $animal['image'] ?>" alt="picture of <?= $animal['name'] ?>">
        </div>
    </body>
</html>
