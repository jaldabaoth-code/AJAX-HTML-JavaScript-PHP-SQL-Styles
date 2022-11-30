<!-- get current URI -->
<?php

    $pageName = '';
    if (isset(explode('/', $uri)[2])) {
        $pageName = explode('/', $uri)[2];
    }
?>
<div class="bottomNav">
    <a class="<?= ($pageName == 'index.php' || $pageName == '') ? 'active' : '' ?>" href="../index.php">Home</a>
    <a class="<?= ($pageName == 'calculator') ? 'active' : '' ?>" href="../../javaScript/calculator/calculator.php">
        <img class="navImage" src="../../assets/images/quest.png"> Calculator
    </a>
    <a class="<?= ($pageName == 'createElement') ? 'active' : '' ?>" href="../../javaScript/createElement/createElement.php">
        <img class="navImage" src="../../assets/images/quest.png"> Create Element
    </a>
    <a class="<?= ($pageName == 'guessNumber') ? 'active' : '' ?>" href="../../javaScript/guessNumber/guessNumber.php">
        <img class="navImage" src="../../assets/images/quest.png"> Guess Number
    </a>
</div>
