<!-- Get current URI -->
<div class="bottom-nav">
    <?= ($currentPageName == 'index.php' || $currentPageName == '') ? "<a class='active' href='./index.php'>Home</a>" : "<a class='' href='" . $changeDirectoryHome . "index.php'>Home</a>" ?>
    <a class="<?= ($currentPageName == 'form') ? 'active' : '' ?>" href="<?= $changeDirectory . 'html/quests/form/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Form
    </a>
</div>
