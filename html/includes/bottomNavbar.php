<!-- get current URI -->
<?php
    $pageName = '';
    if (isset(explode('/', $uri)[2])) {
        $pageName = explode('/', $uri)[2];
    }
?>
<div class="bottom-nav">
    <a class="<?= ($pageName == 'index.php' || $pageName == '') ? 'active' : '' ?>" href="../index.php">Home</a>
    <a class="<?= ($pageName == 'form') ? 'active' : '' ?>" href="../../html/form/form.php">
        <img class="nav-image" src="../../assets/images/quest.png"> Form
    </a>
</div>
