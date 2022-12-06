<!-- Get current URI -->
<div class="bottom-nav">
    <?= ($currentPageName == 'index.php' || $currentPageName == '') ? "<a class='active' href='./index.php'>Home</a>" : "<a class='' href='../../index.php'>Home</a>" ?>
    <a class="<?= ($currentPageName == 'challenge') ? 'active' : '' ?>" href="<?= $changeDirectory . 'ajax/quests/challenge/challenge.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Challenge
    </a>
</div>
