<?php

require_once '_connec.php';
$pdo = new \PDO(DSN, USER, PASS);

        /*$title = trim($_POST['title']);
        $author = trim($_POST['author']);
        $content = trim($_POST['content']);*/
        $query = 'SELECT * from story';
        $statement = $pdo->query($query);
        $stories = $statement->fetchAll(PDO::FETCH_ASSOC);
        //$statement->exec();


        var_dump($stories);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kaamelott</title>
</head>
<body>
    <h1>KAAMELOTT STORY</h1>
    <?php foreach ($stories as $story): ?>
    <h2><?php $story['title'] ?></h2>
    <p><?php $story['content'] ?></p>
    <p><?php $story['author'] ?></p>
    <?php endforeach; ?>

    </body>
</html>







