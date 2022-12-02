<!-- get current URI -->
<?php
    $pageName = '';
    if (isset(explode('/', $uri)[2])) {
        $pageName = explode('/', $uri)[2];
    }
?>
<div class="bottom-nav">
    <a class="<?= ($pageName == 'index.php' || $pageName == '') ? 'active' : '' ?>" href="../index.php">Home</a>
    <a class="<?= ($pageName == 'challenge') ? 'active' : '' ?>" href="../../ajax/challenge/challenge.php">
        <img class="nav-image" src="../../assets/images/quest.png"> Challenge
    </a>
</div>
