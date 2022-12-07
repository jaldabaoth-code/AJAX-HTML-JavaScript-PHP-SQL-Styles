<?php
    require_once '../../../.env.php';
    $sort = $_GET['sort'] ?? 'name';
    $pdo = new \PDO(DSN, USER, PASS);
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
        <h2>Animals list</h2>
        <div class="animals">
            <table>
                <thead>
                    <tr>
                        <th>Animals</th>
                        <th><a href="?sort=name">Sort by name</a></th>
                        <th><a href="?sort=weight">Sort by weight</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($animals as $animal) : ?>
                        <tr>
                            <td>
                                <a href="show.php?id=<?= $animal['id'] ?> ">
                                    <img src="<?= $animal['image'] ?>" alt="picture of <?= $animal['name'] ?>">
                                </a>
                            </td>
                            <td>
                                <a href="show.php?id=<?= $animal['id'] ?> ">
                                    <?= $animal['name'] ?>
                                </a>
                            </td>
                            <td><?= $animal['weight'] . ' kg'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </div>
            </tbody>
        </table>
    </body>
</html>
