<!-- get current URI -->
<?php
    
$uri = $_SERVER['REQUEST_URI'];
$pageName=explode('/', $uri)[2];
?>
<div class="topnav">
    <a class="<?= ($pageName=='ajax') ? 'active' : '' ?>" href="../ajax/ajax/ajax.php">AJAX</a>
</div>
