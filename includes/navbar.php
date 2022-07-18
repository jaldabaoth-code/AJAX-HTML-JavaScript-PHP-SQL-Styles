<!-- get current URI -->
<?php
    
$uri = $_SERVER['REQUEST_URI'];
?>
<div class="topnav">
    <a class="<?= ($uri=='/index.php' || $uri=='/') ? 'active' : '' ?>" href="../">Accueil</a>
    <a class="<?= ($uri=='/formPHP/formPHP.php') ? 'active' : '' ?>" href="../formPHP/formPHP.php">Formulaire PHP</a>
    <a class="<?= ($uri=='/formHTML/formHTML.php') ? 'active' : '' ?>" href="../formHTML/formHTML.php">Formulaire HTML</a>
    <a class="<?= ($uri=='/formPDO/formPDO.php') ? 'active' : '' ?>" href="../formPDO/formPDO.php">Formulaire PDO</a>
    <a class="<?= ($uri=='/uploadImage/uploadImage.php') ? 'active' : '' ?>" href="../uploadImage/uploadImage.php">Upload Image</a>
    <a class="<?= ($uri=='/oop/oop.php') ? 'active' : '' ?>" href="../oop/oop.php">OOP</a>
    <a class="<?= ($uri=='/date/date.php') ? 'active' : '' ?>" href="../date/date.php">Date</a>
    <a class="<?= ($uri=='/bootstrap/bootstrap.php') ? 'active' : '' ?>" href="../bootstrap/bootstrap.php">Bootstrap</a>
    <a class="<?= ($uri=='/session/session.php') ? 'active' : '' ?>" href="../session/session.php">Session</a>
    <a class="<?= ($uri=='/scss/scss.php') ? 'active' : '' ?>" href="../scss/scss.php">SCSS</a>
    <a class="<?= ($uri=='/ajax/ajax.php') ? 'active' : '' ?>" href="../ajax/ajax.php">Ajax</a>
</div>
