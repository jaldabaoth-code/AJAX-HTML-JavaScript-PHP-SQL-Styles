<!-- Get current URI -->
<?php
    $pageName = '';
    if (isset(explode('/', $uri)[3])) {
        $pageName = explode('/', $uri)[3];
    }
?>
<div class="bottom-nav">
    <?= ($pageName == 'index.php' || $pageName == '') ? "<a class='active' href='./index.php'>Home</a>" : "<a class='' href='../../index.php'>Home</a>" ?>
    <a class="<?= ($pageName == 'rdbmsIntroduction') ? 'active' : '' ?>" href="../../../sql/quests/rdbmsIntroduction/rdbmsIntroduction.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> RDBMS Introduction
    </a>
</div>
