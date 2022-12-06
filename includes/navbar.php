<!-- Get current URI -->
<?php
    $uri = $_SERVER['REQUEST_URI'];
    $pageGroupeName = explode('/', $uri)[1];
    // Get current page for acitve navbar class
    $currentPageName = '';
    $currentWorkName = '';
    if (isset(explode('/', $uri)[3])) {
        $currentWorkName = explode('/', $uri)[2];
        $currentPageName = explode('/', $uri)[3];
    }
    // Change directory for to access the desired file
    if ($currentPageName == 'mvc2' || $currentPageName == 'mvc3') {
        $changeDirectory = "../../../../";
    } else {
        $changeDirectory = "../../../";
    }
?>
<div class="top-nav">
    <a class="<?= ($pageGroupeName == 'index.php' || $uri=='/') ? 'active' : '' ?>" href="<?= $changeDirectory ?>">Home</a>
    <a class="<?= ($pageGroupeName == 'ajax') ? 'active' : '' ?>" href="<?= $changeDirectory . 'ajax/index.php' ?>">AJAX</a>
    <a class="<?= ($pageGroupeName == 'html') ? 'active' : '' ?>" href="<?= $changeDirectory . 'html/index.php' ?>">HTML</a>
    <a class="<?= ($pageGroupeName == 'javaScript') ? 'active' : '' ?>" href="<?= $changeDirectory . 'javaScript/index.php' ?>">JavaScript</a>
    <a class="<?= ($pageGroupeName == 'php') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/index.php' ?>">PHP</a>
    <a class="<?= ($pageGroupeName == 'sql') ? 'active' : '' ?>" href="<?= $changeDirectory . 'sql/index.php' ?>">SQL</a>
    <a class="<?= ($pageGroupeName == 'styles') ? 'active' : '' ?>" href="<?= $changeDirectory . 'styles/index.php' ?>">Styles</a>
</div>
