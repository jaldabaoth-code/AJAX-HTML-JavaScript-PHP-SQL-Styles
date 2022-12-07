<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>PHP Debug Yourself</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP Debug Yourself - Quest</h1>
        <h2>Debug Yourself</h2>
        <?php
            $characters = [
                "Negan" => [
                    "city" => "The Sanctuary",
                    "weapon" => "Lucille"
                ],
                "Daryl" => [
                    "city" => "Alexandria",
                    "weapon" => "crossbow"
                ],
                "Ezekiel" => [
                    "city" => "The Kingdom",
                    "weapon" => "Shiva"
                ]
            ];
            // We write code here
            $myTable['Thomas']['city'] = 'Orleans';
            $myTable['Thomas']['weapon'] = 'Katana';
            $characters = array_merge($characters, $myTable);
            var_dump($characters);
        ?>
    </body>
</html>
