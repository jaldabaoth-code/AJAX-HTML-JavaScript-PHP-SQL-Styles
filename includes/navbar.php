<!-- get current URI -->
<?php
    
$uri = $_SERVER['REQUEST_URI'];
$pageName=explode('/', $uri)[1];
?>
<div class="topnav">
    <a class="<?= ($pageName=='index.php' || $uri=='/') ? 'active' : '' ?>" href="../">Accueil</a>
    <a class="<?= ($pageName=='ajax') ? 'active' : '' ?>" href="../ajax/index.php">AJAX</a>
    <a class="<?= ($pageName=='html') ? 'active' : '' ?>" href="../html/index.php">HTML</a>
    <a class="<?= ($pageName=='js') ? 'active' : '' ?>" href="../js/index.php">JS</a>
    <a class="<?= ($pageName=='php') ? 'active' : '' ?>" href="../php/index.php">PHP</a>
    <a class="<?= ($pageName=='sql') ? 'active' : '' ?>" href="../sql/index.php">SQL</a>
    <a class="<?= ($pageName=='styles') ? 'active' : '' ?>" href="../styles/index.php">Styles</a>
</div>
