<!-- get current URI -->
<?php
    
$pageName=explode('/', $uri)[2];
?>
<div class="bottomNav">
    <a class="<?= ($pageName=='ajax') ? 'active' : '' ?>" href="../ajax/ajax/ajax.php">AJAX</a>
</div>
