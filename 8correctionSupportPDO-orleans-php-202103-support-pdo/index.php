<?php

require_once 'config.php';

$sort = $_GET['sort'] ?? 'name';

$pdo = new PDO(DSN, USER, PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (!in_array($sort, ['name', 'weight'])) {
    $sort = 'name';
}

$query = "SELECT * FROM animal ORDER BY $sort ASC";
$statement = $pdo->query($query);

$animals = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Animals list</h1>
    <a href="?sort=name">Sort by name</a>
    <a href="?sort=weight">Sort by weight</a>
    <div class="animals">
        <?php foreach ($animals as $animal) : ?>
            <figure>
                <img src="<?= $animal['image'] ?>" alt="picture of <?= $animal['name'] ?>">

                <figcaption>
                    <h2><?= $animal['name']?></h2>
                    <p><?= $animal['weight'] . 'kg'; ?></p>
                    <a href="show.php?id=<?= $animal['id'] ?> ">Show</a>
                </figcaption>
            </figure>
        <?php endforeach; ?>
    </div>
</body>

</html>