<?php

require_once 'config.php';

$pdo = new PDO(DSN, USER, PASSWORD);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'];

$query = "SELECT * FROM animal WHERE id=:id";
$statement = $pdo->prepare($query);
$statement->bindValue(':id', $id);
$statement->execute();

$animal = $statement->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
</head>
<body>
    <h1><?= $animal['name'] ?></h1>
    <img src="<?= $animal['image'] ?>" alt="picture of <?= $animal['name'] ?>">
    <p>Weight: <?= $animal['weight'] ?></p>
</body>
</html>