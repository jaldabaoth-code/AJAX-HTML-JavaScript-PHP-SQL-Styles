<!-- Get current URI -->
<div class="bottom-nav">
    <?= ($currentPageName == 'index.php' || $currentPageName == '') ? "<a class='active' href='./index.php'>Home</a>" : "<a class='' href='" . $changeDirectoryHome . "index.php'>Home</a>" ?>
    <a class="<?= ($currentPageName == 'information' && $currentWorkName == 'quests') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/information/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Information
    </a>
    <a class="<?= ($currentPageName == 'array' && $currentWorkName == 'quests') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/array/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Array
    </a>
    <a class="<?= ($currentPageName == 'multidimensionalArray' && $currentWorkName == 'quests') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/multidimensionalArray/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Multidimensional Array
    </a>
    <a class="<?= ($currentPageName == 'conditional') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/conditional/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Conditional
    </a>
    <a class="<?= ($currentPageName == 'date') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/date/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Date
    </a>
    <a class="<?= ($currentPageName == 'pdo' && $currentWorkName == 'quests') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/pdo/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory .'assets/images/quest.png' ?>"> PDO
    </a>
    <a class="<?= ($currentPageName == 'form' && $currentWorkName == 'quests') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/form/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Form
    </a>
    <a class="<?= ($currentPageName == 'oop' && $currentWorkName == 'quests') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/oop/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> OOP
    </a>
    <a class="<?= ($currentPageName == 'variable' && $currentWorkName == 'quests') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/variable/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Variable
    </a>
    <a class="<?= ($currentPageName == 'uploadImage') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/uploadImage/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Upload Image
    </a>
    <a class="<?= ($currentPageName == 'xdebug') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/xdebug/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Xdebug
    </a>
    <a class="<?= ($currentPageName == 'debugYourself') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/debugYourself/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Debug Yourself
    </a>
    <a class="<?= ($currentPageName == 'function' && $currentWorkName == 'quests') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/function/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Function
    </a>
    <a class="<?= ($currentPageName == 'array' && $currentWorkName == 'workshops') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/workshops/array/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> Array
    </a>
    <a class="<?= ($currentPageName == 'function' && $currentWorkName == 'workshops') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/workshops/function/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> Function
    </a>
    <a class="<?= ($currentPageName == 'wildTemplate') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/workshops/wildTemplate/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> Wild Template
    </a>
    <a class="<?= ($currentPageName == 'wizard') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/workshops/wizard/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> Wizard
    </a>
    <a class="<?= ($currentPageName == 'pdo' && $currentWorkName == 'workshops') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/workshops/pdo/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> PDO
    </a>
    <a class="<?= ($currentPageName == 'mvc1' && $currentWorkName == 'workshops') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/workshops/mvc1/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> MVC 1
    </a>
    <a class="<?= ($currentPageName == 'mvc2' && $currentWorkName == 'workshops') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/workshops/mvc2/public/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> MVC 2
    </a>
    <a class="<?= ($currentPageName == 'mvc3' && $currentWorkName == 'workshops') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/workshops/mvc3/public/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> MVC 3
    </a>
    <a class="<?= ($currentPageName == 'form' && $currentWorkName == 'lessons') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/lessons/form/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/lesson.png' ?>"> Form
    </a>
    <a class="<?= ($currentPageName == 'oop' && $currentWorkName == 'lessons') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/lessons/oop/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/lesson.png' ?>"> OOP
    </a>
    <a class="<?= ($currentPageName == 'pdo' && $currentWorkName == 'lessons') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/lessons/pdo/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/lesson.png' ?>"> PDO
    </a>
</div>
