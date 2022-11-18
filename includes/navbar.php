<!-- get current URI -->
<?php
    
$uri = $_SERVER['REQUEST_URI'];
$pageName=explode('/', $uri)[1];
?>
<div class="topnav">
    <a class="<?= ($pageName=='index.php' || $uri=='/') ? 'active' : '' ?>" href="../">Accueil</a>
    <a class="<?= ($pageName=='formPHP') ? 'active' : '' ?>" href="../formPHP/formPHP.php">Formulaire PHP</a>
    <a class="<?= ($pageName=='formHTML') ? 'active' : '' ?>" href="../formHTML/formHTML.php">Formulaire HTML</a>
    <a class="<?= ($pageName=='formPDO') ? 'active' : '' ?>" href="../formPDO/formPDO.php">Formulaire PDO</a>
    <a class="<?= ($pageName=='uploadImage') ? 'active' : '' ?>" href="../uploadImage/uploadImage.php">Upload Image</a>
    <a class="<?= ($pageName=='oop') ? 'active' : '' ?>" href="../oop/oop.php">OOP</a>
    <a class="<?= ($pageName=='date') ? 'active' : '' ?>" href="../date/date.php">Date</a>
    <a class="<?= ($pageName=='bootstrap') ? 'active' : '' ?>" href="../bootstrap/bootstrap.php">Bootstrap</a>
    <a class="<?= ($pageName=='session') ? 'active' : '' ?>" href="../session/session.php">Session</a>
    <a class="<?= ($pageName=='scss') ? 'active' : '' ?>" href="../scss/scss.php">SCSS</a>
    <a class="<?= ($pageName=='ajax') ? 'active' : '' ?>" href="../ajax/ajax.php">Ajax</a>
    <a class="<?= ($pageName=='workshopPHP') ? 'active' : '' ?>" href="../workshopPHP/workshopPHP.php">Workshop PHP</a>
    <a class="<?= ($pageName=='calculatorJS') ? 'active' : '' ?>" href="../calculatorJS/calculatorJS.php">Calculator JS</a>
    <a class="<?= ($pageName=='guessNumberJS') ? 'active' : '' ?>" href="../guessNumberJS/guessNumberJS.php">Guess A Number JS</a>
    <a class="<?= ($pageName=='createElementJS') ? 'active' : '' ?>" href="../createElementJS/createElementJS.php">Create Element JS</a>
    <a class="<?= ($pageName=='css') ? 'active' : '' ?>" href="../css/css.php">CSS</a>
    <a class="<?= ($pageName=='chessCSS') ? 'active' : '' ?>" href="../chessCSS/chessCSS.php">Chess CSS</a>
    <a class="<?= ($pageName=='workshopWizardPHP') ? 'active' : '' ?>" href="../workshopWizardPHP/workshopWizardPHP.php">Workshop Wizard PHP</a>
    <a class="<?= ($pageName=='xdebug') ? 'active' : '' ?>" href="../xdebug/xdebug.php">Xdebug</a>
    <a class="<?= ($pageName=='conditional') ? 'active' : '' ?>" href="../conditional/conditional.php">Conditional</a>
</div>
