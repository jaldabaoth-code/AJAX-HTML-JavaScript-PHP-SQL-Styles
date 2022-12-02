<!-- get current URI -->
<?php

    $pageName = '';
    if (isset(explode('/', $uri)[2])) {
        $pageName = explode('/', $uri)[2];
    }
?>
<div class="bottomNav">
    <a class="<?= ($pageName == 'index.php' || $pageName == '') ? 'active' : '' ?>" href="../index.php">Home</a>
    <a class="<?= ($pageName == 'array') ? 'active' : '' ?>" href="../../styles/bootstrap/bootstrap.php">
        <img class="navImage" src="../../assets/images/quest.png"> Bootsrap
    </a>
    <a class="<?= ($pageName == 'conditional') ? 'active' : '' ?>" href="../../styles/css/css.php">
        <img class="navImage" src="../../assets/images/quest.png"> CSS
    </a>
    <a class="<?= ($pageName == 'date') ? 'active' : '' ?>" href="../../styles/scss/scss.php">
        <img class="navImage" src="../../assets/images/quest.png"> SCSS
    </a>
    <a class="<?= ($pageName == 'pdo') ? 'active' : '' ?>" href="../../styles/cssChess/cssChess.php">
        <img class="navImage" src="../../assets/images/quest.png"> CSS Chess
    </a>
</div>
