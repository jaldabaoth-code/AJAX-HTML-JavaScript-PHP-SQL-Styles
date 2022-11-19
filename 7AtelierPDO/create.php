<?php

require_once '_connec.php';
$pdo = new \PDO(DSN, USER, PASS);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
/* Une autre facon de faire
if (isset($_POST['title']) &&
    isset($_POST['author']) &&
    isset($_POST['content']))
    {
    
        $data = array_map('trim', $_POST);

    } else {
        $title = trim($_POST['title']);
        $author = trim($_POST['author']);
        $content = trim($_POST['content']);
        $query = "INSERT INTO story (title, author, content) VALUES (:title, :author, :content)";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':title', $title, \PDO::PARAM_STR);
        $statement->bindValue(':author', $author, \PDO::PARAM_STR);
        $statement->bindValue(':content', $content, \PDO::PARAM_STR);
        $statement->execute();
        $kaamelott = $statement->fetchAll();
    }
*/
    $data = array_map('trim', $_POST);

    $errors = [];


    if (empty($data['title'])) {
        $errors[] = 'Titre est obligatoire';
    }

    $titleLength = 255;
    if (strlen($data['title']) > $titleLength) {
        $errors[] = 'Le titre doit faire moins de ' . $titleLength . '  caractères';
    }

    if (empty($data['author'])) {
        $errors[] = 'Le prénom est obligatoire';
    }

    $authorLength = 100;
    if (strlen($data['author']) > $authorLength) {
        $errors[] = 'Le prénom doit faire moins de ' . $authorLength . ' caractères';
    }

/*
    if (empty($data['content'])) {
        $errors[] = 'Le story est obligatoire';
    }
*/
    if (empty($errors)) {
        header('Location: create.php');


        $query = "INSERT INTO story (title, author, content) VALUES (:title, :author, :content)";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':title', $data['title'], \PDO::PARAM_STR);
        $statement->bindValue(':author', $data['author'], \PDO::PARAM_STR);
        $statement->bindValue(':content', $data['content'], \PDO::PARAM_STR);
        $statement->execute();
        $kaamelott = $statement->fetchAll();
    }

}
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
    <div class="form">
        <h1>KAAMELOTT STORY</h1>

        <form action="" method="POST" class="login" novalidate>
            <?php if (!empty($errors)) : ?>
                <ul class="error">
                    <?php foreach ($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div>
                <label  for="title">Title :</label>
                <input  type="text"  id="title"  name="title" placeholder="Story Title" value="<?= $data['title'] ?? '' ?>" required>
            </div>
            <div>
                <label  for="author">Author :</label>
                <input  type="text"  id="author"  name="author" placeholder="Athor Name" value="<?= $data['author'] ?? '' ?>" required>
            </div>

            <div>
                <label  for="content">Story Content :</label>
                <textarea  id="content"  name="content" placeholder="Your Story" value="<?= $data['content'] ?? '' ?>" required></textarea>
            </div>
            <div  class="button">
                <button  type="submit" class="button">Send Your Story</button>
            </div>
        </form>
    </div>
</body>
</html>
