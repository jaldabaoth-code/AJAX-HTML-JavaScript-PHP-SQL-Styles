<!-- Get current URI -->
<?php
    $pageName = '';
    $workName = '';
    if (isset(explode('/', $uri)[3])) {
        $workName = explode('/', $uri)[2];
        $pageName = explode('/', $uri)[3];
    }
?>
<div class="bottom-nav">
    <?= ($pageName == 'index.php' || $pageName == '') ? "<a class='active' href='./index.php'>Home</a>" : "<a class='' href='../../index.php'>Home</a>" ?>
    <a class="<?= ($pageName == 'array' && $workName == 'quests') ? 'active' : '' ?>" href="../../../php/quests/array/array.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> Array
    </a>
    <a class="<?= ($pageName == 'multidimensionalArray' && $workName == 'quests') ? 'active' : '' ?>" href="../../../php/quests/multidimensionalArray/multidimensionalArray.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> Multidimensional Array
    </a>
    <a class="<?= ($pageName == 'conditional') ? 'active' : '' ?>" href="../../../php/quests/conditional/conditional.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> Conditional
    </a>
    <a class="<?= ($pageName == 'date') ? 'active' : '' ?>" href="../../../php/quests/date/date.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> Date
    </a>
    <a class="<?= ($pageName == 'pdo') ? 'active' : '' ?>" href="../../../php/quests/pdo/pdo.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> PDO
    </a>
    <a class="<?= ($pageName == 'form' && $workName == 'quests') ? 'active' : '' ?>" href="../../../php/quests/form/form.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> Form
    </a>
    <a class="<?= ($pageName == 'oop' && $workName == 'quests') ? 'active' : '' ?>" href="../../../php/quests/oop/oop.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> OOP
    </a>
    <a class="<?= ($pageName == 'uploadImage') ? 'active' : '' ?>" href="../../../php/quests/uploadImage/uploadImage.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> Upload Image
    </a>
    <a class="<?= ($pageName == 'xdebug') ? 'active' : '' ?>" href="../../../php/quests/xdebug/xdebug.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> Xdebug
    </a>
    <a class="<?= ($pageName == 'debugYourself') ? 'active' : '' ?>" href="../../../php/quests/debugYourself/debugYourself.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> Debug Yourself
    </a>
    <a class="<?= ($pageName == 'function' && $workName == 'quests') ? 'active' : '' ?>" href="../../../php/quests/function/function.php">
        <img class="nav-image" src="../../../assets/images/quest.png"> Function
    </a>
    <a class="<?= ($pageName == 'array' && $workName == 'workshops') ? 'active' : '' ?>" href="../../../php/workshops/array/array.php">
        <img class="nav-image" src="../../../assets/images/workshop.png"> Array
    </a>
    <a class="<?= ($pageName == 'function' && $workName == 'workshops') ? 'active' : '' ?>" href="../../../php/workshops/function/function.php">
        <img class="nav-image" src="../../../assets/images/workshop.png"> Function
    </a>
    <a class="<?= ($pageName == 'wildTemplate') ? 'active' : '' ?>" href="../../../php/workshops/wildTemplate/wildTemplate.php">
        <img class="nav-image" src="../../../assets/images/workshop.png"> Wild Template
    </a>
    <a class="<?= ($pageName == 'wizard') ? 'active' : '' ?>" href="../../../php/workshops/wizard/wizard.php">
        <img class="nav-image" src="../../../assets/images/workshop.png"> Wizard
    </a>
    <a class="<?= ($pageName == 'form' && $workName == 'lessons') ? 'active' : '' ?>" href="../../../php/lessons/form/form.php">
        <img class="nav-image" src="../../../assets/images/lesson.png"> Form
    </a>
    <a class="<?= ($pageName == 'oop' && $workName == 'lessons') ? 'active' : '' ?>" href="../../../php/lessons/oop/oop.php">
        <img class="nav-image" src="../../../assets/images/lesson.png"> OOP
    </a>
</div>
