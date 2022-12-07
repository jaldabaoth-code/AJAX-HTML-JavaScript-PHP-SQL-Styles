<?php
    require_once '../../../.env.php';
    $pdo = new \PDO(DSN, USER, PASS);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = array_map('trim', $_POST);
        $errors = [];
        if (empty($data['title'])) {
            $errors[] = 'Title is required';
        }
        $titleLength = 255;
        if (strlen($data['title']) > $titleLength) {
            $errors[] = 'The title must be less than ' . $titleLength . ' characters';
        }
        if (empty($data['author'])) {
            $errors[] = 'Firstname is required';
        }
        $authorLength = 100;
        if (strlen($data['author']) > $authorLength) {
            $errors[] = 'The firstname must be less than ' . $authorLength . ' characters';
        }
        if (empty($errors)) {
            header('Location: index.php');
            $query = "INSERT INTO story (title, author, content) VALUES (:title, :author, :content)";
            $statement = $pdo->prepare($query);
            $statement->bindValue(':title', $data['title'], \PDO::PARAM_STR);
            $statement->bindValue(':author', $data['author'], \PDO::PARAM_STR);
            $statement->bindValue(':content', $data['content'], \PDO::PARAM_STR);
            $statement->execute();
            $kaamelott = $statement->fetchAll();
        }
        /*
            // Another way to do
            if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['content'])) {
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
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>PHP PDO</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP PDO - Workshop</h1>
        <h2>PDO</h2>
        <h3>Kaamelott Story</h3>
        <div class="form">
            <form action="" method="POST" novalidate>
                <?php if (!empty($errors)) : ?>
                    <ul class="error">
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <div>
                    <label for="title">Title :</label>
                    <input type="text" id="title" name="title" placeholder="Story Title" value="<?= $data['title'] ?? '' ?>" required>
                </div>
                <div>
                    <label for="author">Author :</label>
                    <input type="text" id="author" name="author" placeholder="Athor Name" value="<?= $data['author'] ?? '' ?>" required>
                </div>

                <div>
                    <label for="content">Story Content :</label>
                    <textarea id="content" name="content" placeholder="Your Story" value="<?= $data['content'] ?? '' ?>" required></textarea>
                </div>
                <button type="submit" class="button">Send</button>
            </form>
        </div>
        <hr>
        <h3>Show Stories</h3>
        <?php
            $query = 'SELECT * from story';
            $statement = $pdo->query($query);
            $stories = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach ($stories as $story):
                echo 'Title : ' . $story['title'] . '<br>';
                echo 'Content : ' . $story['content'] . '<br>';
                echo 'Author : ' . $story['author'] . '<br>';
                echo '..............................................' . '<br>';
            endforeach;
        ?>
    </body>
</html>
