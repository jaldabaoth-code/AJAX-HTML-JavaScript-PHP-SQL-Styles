<!-- get current URI -->
<?php

    $pageName='';
    if (isset(explode('/', $uri)[2])) {
        $pageName=explode('/', $uri)[2];

    }
?>
<div class="bottomNav">
    <a class="<?= ($pageName=='index.php' || $pageName=='') ? 'active' : '' ?>" href="../index.php">Home</a>
    <a class="<?= ($pageName=='ajax') ? 'active' : '' ?>" href="../../ajax/ajax/ajax.php">
        <img class="navImage" src="../../assets/images/quest.png"> AJAX Challenge
    </a>
</div>
