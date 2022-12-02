<!-- get current URI -->
<?php

    $pageName = '';
    if (isset(explode('/', $uri)[2])) {
        $pageName = explode('/', $uri)[2];
    }
?>
<div class="bottomNav">
    <a class="<?= ($pageName == 'index.php' || $pageName == '') ? 'active' : '' ?>" href="../index.php">Home</a>
    <a class="<?= ($pageName == 'array') ? 'active' : '' ?>" href="../../php/array/array.php">
        <img class="navImage" src="../../assets/images/quest.png"> Array
    </a>
    <a class="<?= ($pageName == 'conditional') ? 'active' : '' ?>" href="../../php/conditional/conditional.php">
        <img class="navImage" src="../../assets/images/quest.png"> Conditional
    </a>
    <a class="<?= ($pageName == 'date') ? 'active' : '' ?>" href="../../php/date/date.php">
        <img class="navImage" src="../../assets/images/quest.png"> Date
    </a>
    <a class="<?= ($pageName == 'pdo') ? 'active' : '' ?>" href="../../php/pdo/pdo.php">
        <img class="navImage" src="../../assets/images/quest.png"> PDO
    </a>
    <a class="<?= ($pageName == 'form') ? 'active' : '' ?>" href="../../php/form/form.php">
        <img class="navImage" src="../../assets/images/quest.png"> Form
    </a>
    <a class="<?= ($pageName == 'oop') ? 'active' : '' ?>" href="../../php/oop/oop.php">
        <img class="navImage" src="../../assets/images/quest.png"> OOP
    </a>
    <a class="<?= ($pageName == 'uploadImage') ? 'active' : '' ?>" href="../../php/uploadImage/uploadImage.php">
        <img class="navImage" src="../../assets/images/quest.png"> Upload Image
    </a>
    <a class="<?= ($pageName == 'xdebug') ? 'active' : '' ?>" href="../../php/xdebug/xdebug.php">
        <img class="navImage" src="../../assets/images/quest.png"> Xdebug
    </a>
    <a class="<?= ($pageName == 'arrayWorkshop') ? 'active' : '' ?>" href="../../php/arrayWorkshop/array.php">
        <img class="navImage" src="../../assets/images/workshop.png"> Array
    </a>
    <a class="<?= ($pageName == 'functionWorkshop') ? 'active' : '' ?>" href="../../php/functionWorkshop/function.php">
        <img class="navImage" src="../../assets/images/workshop.png"> Function
    </a>
    <a class="<?= ($pageName == 'wildTemplateWorkshop') ? 'active' : '' ?>" href="../../php/wildTemplateWorkshop/wildTemplate.php">
        <img class="navImage" src="../../assets/images/workshop.png"> Wild Template
    </a>
    <a class="<?= ($pageName == 'wizardWorkshop') ? 'active' : '' ?>" href="../../php/wizardWorkshop/wizard.php">
        <img class="navImage" src="../../assets/images/workshop.png"> wizard
    </a>
</div>
