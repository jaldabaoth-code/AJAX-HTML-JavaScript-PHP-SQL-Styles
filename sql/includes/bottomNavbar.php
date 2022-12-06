<!-- Get current URI -->
<div class="bottom-nav">
    <?= ($currentPageName == 'index.php' || $currentPageName == '') ? "<a class='active' href='./index.php'>Home</a>" : "<a class='' href='../../index.php'>Home</a>" ?>
    <a class="<?= ($currentPageName == 'rdbmsIntroduction') ? 'active' : '' ?>" href="<?= $changeDirectory . 'sql/quests/rdbmsIntroduction/rdbmsIntroduction.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> RDBMS Introduction
    </a>
    <a class="<?= ($currentPageName == 'join') ? 'active' : '' ?>" href="<?= $changeDirectory . 'sql/quests/join/join.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Join
    </a>
    <a class="<?= ($currentPageName == 'advanced') ? 'active' : '' ?>" href="<?= $changeDirectory . 'sql/quests/advanced/advanced.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Advanced
    </a>
    <a class="<?= ($currentPageName == 'select') ? 'active' : '' ?>" href="<?= $changeDirectory . 'sql/workshops/select/select.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> Select
    </a>
    <a class="<?= ($currentPageName == 'kaamelott') ? 'active' : '' ?>" href="<?= $changeDirectory . 'sql/workshops/kaamelott/kaamelott.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> Kaamelott
    </a>
</div>
