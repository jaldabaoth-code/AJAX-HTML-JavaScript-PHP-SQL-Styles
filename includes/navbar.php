<!-- get current URI -->
<?php
    $uri = $_SERVER['REQUEST_URI'];
    $pageGroupeName = explode('/', $uri)[1];
?>
<div class="top-nav">
    <a class="<?= ($pageGroupeName == 'index.php' || $uri=='/') ? 'active' : '' ?>" href="../../../">Home</a>
    <a class="<?= ($pageGroupeName == 'ajax') ? 'active' : '' ?>" href="../../../ajax/index.php">AJAX</a>
    <a class="<?= ($pageGroupeName == 'html') ? 'active' : '' ?>" href="../../../html/index.php">HTML</a>
    <a class="<?= ($pageGroupeName == 'javaScript') ? 'active' : '' ?>" href="../../../javaScript/index.php">JavaScript</a>
    <a class="<?= ($pageGroupeName == 'php') ? 'active' : '' ?>" href="../../../php/index.php">PHP</a>
    <a class="<?= ($pageGroupeName == 'sql') ? 'active' : '' ?>" href="../../../sql/index.php">SQL</a>
    <a class="<?= ($pageGroupeName == 'styles') ? 'active' : '' ?>" href="../../../styles/index.php">Styles</a>
</div>
