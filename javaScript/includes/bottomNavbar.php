<!-- Get current URI -->
<div class="bottom-nav">
    <?= ($currentPageName == 'index.php' || $currentPageName == '') ? "<a class='active' href='./index.php'>Home</a>" : "<a class='' href='../../index.php'>Home</a>" ?>
    <a class="<?= ($currentPageName == 'calculator') ? 'active' : '' ?>" href="<?= $changeDirectory . 'javaScript/quests/calculator/calculator.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Calculator
    </a>
    <a class="<?= ($currentPageName == 'createElement') ? 'active' : '' ?>" href="<?= $changeDirectory . 'javaScript/quests/createElement/createElement.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Create Element
    </a>
    <a class="<?= ($currentPageName == 'hoverMe') ? 'active' : '' ?>" href="<?= $changeDirectory . 'javaScript/quests/hoverMe/hoverMe.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Hover Me
    </a>
    <a class="<?= ($currentPageName == 'guessNumber') ? 'active' : '' ?>" href="<?= $changeDirectory . 'javaScript/quests/guessNumber/guessNumber.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Guess A Number
    </a>
</div>
