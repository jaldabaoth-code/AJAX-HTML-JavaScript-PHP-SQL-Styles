<!-- Get current URI -->
<div class="bottom-nav">
    <?= ($currentPageName == 'index.php' || $currentPageName == '') ? "<a class='active' href='./index.php'>Home</a>" : "<a class='' href='" . $changeDirectoryHome . "index.php'>Home</a>" ?>
    <a class="<?= ($currentPageName == 'bootstrap') ? 'active' : '' ?>" href="<?= $changeDirectory . 'styles/quests/bootstrap/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Bootstrap
    </a>
    <a class="<?= ($currentPageName == 'css') ? 'active' : '' ?>" href="<?= $changeDirectory . 'styles/quests/css/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> CSS
    </a>
    <a class="<?= ($currentPageName == 'scss') ? 'active' : '' ?>" href="<?= $changeDirectory . 'styles/quests/scss/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> SCSS
    </a>
    <a class="<?= ($currentPageName == 'cssChess') ? 'active' : '' ?>" href="<?= $changeDirectory . 'styles/quests/cssChess/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> CSS Chess
    </a>
</div>
