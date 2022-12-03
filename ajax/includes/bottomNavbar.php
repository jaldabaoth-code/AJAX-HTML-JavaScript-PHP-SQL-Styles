<!-- Get current URI -->
<?php
    $pageName = '';
    if (isset(explode('/', $uri)[3])) {
        $pageName = explode('/', $uri)[3];
    }
?>
<div class="bottom-nav">
    <a class="<?= ($pageName == 'index.php' || $pageName == '') ? 'active' : '' ?>" href="../../index.php">Home</a>
    <a class="<?= ($pageName == 'challenge') ? 'active' : '' ?>" href="../../ajax/quests/challenge/challenge.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> Challenge
    </a>
</div>
