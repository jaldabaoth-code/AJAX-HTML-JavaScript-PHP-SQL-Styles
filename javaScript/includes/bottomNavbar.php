<!-- get current URI -->
<?php
    $pageName = '';
    if (isset(explode('/', $uri)[2])) {
        $pageName = explode('/', $uri)[2];
    }
?>
<div class="bottom-nav">
    <a class="<?= ($pageName == 'index.php' || $pageName == '') ? 'active' : '' ?>" href="../index.php">Home</a>
    <a class="<?= ($pageName == 'calculator') ? 'active' : '' ?>" href="../../javaScript/calculator/calculator.php">
        <img class="nav-image" src="../../assets/images/quest.png"> Calculator
    </a>
    <a class="<?= ($pageName == 'createElement') ? 'active' : '' ?>" href="../../javaScript/createElement/createElement.php">
        <img class="nav-image" src="../../assets/images/quest.png"> Create Element
    </a>
    <a class="<?= ($pageName == 'hoverMe') ? 'active' : '' ?>" href="../../javaScript/hoverMe/hoverMe.php">
        <img class="nav-image" src="../../assets/images/quest.png"> Hover Me
    </a>
    <a class="<?= ($pageName == 'guessNumber') ? 'active' : '' ?>" href="../../javaScript/guessNumber/guessNumber.php">
        <img class="nav-image" src="../../assets/images/quest.png"> Guess A Number
    </a>
</div>
