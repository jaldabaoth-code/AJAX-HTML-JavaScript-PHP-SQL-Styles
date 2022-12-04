<!-- Get current URI -->
<?php
    $pageName = '';
    if (isset(explode('/', $uri)[3])) {
        $pageName = explode('/', $uri)[3];
    }
?>
<div class="bottom-nav">
    <?= ($pageName == 'index.php' || $pageName == '') ? "<a class='active' href='./index.php'>Home</a>" : "<a class='' href='../../index.php'>Home</a>" ?>
    <a class="<?= ($pageName == 'calculator') ? 'active' : '' ?>" href="../../../javaScript/quests/calculator/calculator.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> Calculator
    </a>
    <a class="<?= ($pageName == 'createElement') ? 'active' : '' ?>" href="../../../javaScript/quests/createElement/createElement.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> Create Element
    </a>
    <a class="<?= ($pageName == 'hoverMe') ? 'active' : '' ?>" href="../../../javaScript/quests/hoverMe/hoverMe.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> Hover Me
    </a>
    <a class="<?= ($pageName == 'guessNumber') ? 'active' : '' ?>" href="../../../javaScript/quests/guessNumber/guessNumber.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> Guess A Number
    </a>
</div>
