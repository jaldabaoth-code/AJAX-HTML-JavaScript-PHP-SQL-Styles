<!-- Get current URI -->
<div class="bottom-nav">
    <?= ($currentPageName == 'index.php' || $currentPageName == '') ? "<a class='active' href='./index.php'>Home</a>" : "<a class='' href='" . $changeDirectoryHome . "index.php'>Home</a>" ?>
    <a class="<?= ($currentPageName == 'calculator') ? 'active' : '' ?>" href="<?= $changeDirectory . 'javaScript/quests/calculator/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Calculator
    </a>
    <a class="<?= ($currentPageName == 'createElement') ? 'active' : '' ?>" href="<?= $changeDirectory . 'javaScript/quests/createElement/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Create Element
    </a>
    <a class="<?= ($currentPageName == 'hoverMe') ? 'active' : '' ?>" href="<?= $changeDirectory . 'javaScript/quests/hoverMe/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Hover Me
    </a>
    <a class="<?= ($currentPageName == 'guessNumber') ? 'active' : '' ?>" href="<?= $changeDirectory . 'javaScript/quests/guessNumber/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Guess A Number
    </a>
</div>
