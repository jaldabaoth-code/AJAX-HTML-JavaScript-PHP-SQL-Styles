<!-- Get current URI -->
<div class="bottom-nav">
    <?= ($currentPageName == 'index.php' || $currentPageName == '') ? "<a class='active' href='./index.php'>Home</a>" : "<a class='' href='" . $changeDirectoryHome . "index.php'>Home</a>" ?>
    <a class="<?= ($currentPageName == 'introduction1') ? 'active' : '' ?>" href="<?= $changeDirectory . 'javaScript/quests/introduction1/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Introduction 1
    </a>
    <a class="<?= ($currentPageName == 'introduction3') ? 'active' : '' ?>" href="<?= $changeDirectory . 'javaScript/quests/introduction3/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Introduction 3
    </a>
    <a class="<?= ($currentPageName == 'introduction5') ? 'active' : '' ?>" href="<?= $changeDirectory . 'javaScript/quests/introduction5/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Introduction 5
    </a>
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
    <a class="<?= ($currentPageName == 'resizeObserver') ? 'active' : '' ?>" href="<?= $changeDirectory . 'javaScript/tutorials/resizeObserver/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/tutorial.png' ?>"> Resize Observer
    </a>
</div>
