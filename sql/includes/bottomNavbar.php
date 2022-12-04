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
    <a class="<?= ($pageName == 'join') ? 'active' : '' ?>" href="../../../sql/quests/join/join.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> Join
    </a>
    <a class="<?= ($pageName == 'advanced') ? 'active' : '' ?>" href="../../../sql/quests/advanced/advanced.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> Advanced
    </a>
    <a class="<?= ($pageName == 'select') ? 'active' : '' ?>" href="../../../sql/workshops/select/select.php">
        <img class="nav-image" src="../../../assets/images/workshop.png"> Select
    </a>
    <a class="<?= ($pageName == 'kaamelott') ? 'active' : '' ?>" href="../../../sql/workshops/kaamelott/kaamelott.php">
        <img class="nav-image" src="../../../assets/images/workshop.png"> Kaamelott
    </a>
</div>
