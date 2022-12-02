<!-- get current URI -->
<?php
    $pageName = '';
    if (isset(explode('/', $uri)[2])) {
        $pageName = explode('/', $uri)[2];
    }
?>
<div class="bottom-nav">
    <a class="<?= ($pageName == 'index.php' || $pageName == '') ? 'active' : '' ?>" href="../index.php">Home</a>
    <a class="<?= ($pageName == 'bootstrap') ? 'active' : '' ?>" href="../../styles/bootstrap/bootstrap.php">
        <img class="nav-image" src="../../assets/images/quest.png"> Bootstrap
    </a>
    <a class="<?= ($pageName == 'css') ? 'active' : '' ?>" href="../../styles/css/css.php">
        <img class="nav-image" src="../../assets/images/quest.png"> CSS
    </a>
    <a class="<?= ($pageName == 'scss') ? 'active' : '' ?>" href="../../styles/scss/scss.php">
        <img class="nav-image" src="../../assets/images/quest.png"> SCSS
    </a>
    <a class="<?= ($pageName == 'cssChess') ? 'active' : '' ?>" href="../../styles/cssChess/cssChess.php">
        <img class="nav-image" src="../../assets/images/quest.png"> CSS Chess
    </a>
</div>
