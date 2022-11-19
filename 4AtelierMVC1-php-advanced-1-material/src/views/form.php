<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Recipe</title>
</head>
<body>
    <div class="form">
        <h1>FORMULAIRE RECIPE</h1>

        <form action="" method="POST" class="login">
            <?php if (!empty($errors)) : ?>
                <ul class="error">
                    <?php foreach ($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div>
                <label  for="title">Un titre :</label>
                <input  type="text"  id="title"  name="title" placeholder="Un titre" required>

            </div>
            <div>
                <label  for="description">Une Description :</label>
                <textarea  id="description"  name="description" required></textarea>
            </div>
            <div  class="button">
                <button  type="submit" class="button">Envoyer</button>
            </div>
        </form>
    </div>
</body>
</html>