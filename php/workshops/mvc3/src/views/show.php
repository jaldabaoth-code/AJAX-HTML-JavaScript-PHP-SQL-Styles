<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $recipe['title'] ?></title>
    </head>
    <body>
        <a href="/">Home</a>
        <h1><?= $recipe['title'] ?></h1>
        <a href="/edit?id=<?= $recipe['id'] ?>">Edit</a>
        <form action="/delete" method="POST">
            <input type="hidden" value="<?= $recipe['id'] ?>" name="id">
            <button>Remove</button>
        </form>
        <a href="/delete?id=<?= $recipe['id'] ?>">Remove</a>
        <div>
            <?= $recipe['description'] ?>
        </div>
    </body>
</html>
