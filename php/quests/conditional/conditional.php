<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>PHP Conditional</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP Conditional - Quest</h1>
        <h2>Conditional</h2>
        <?php
            $weapons = ['fists', 'whip', 'gun'];
            $opponentWeapon = $weapons[rand(0,2)]; // This allows you to choose a weapon randomly
            echo "You attack Indiana Jones with your " . $opponentWeapon . "!<br><br>";
            echo "--Example 1-- <br>";
            if ($opponentWeapon  == 'fists') {
                $indyWeapon = $weapons[2];
                echo "Indiana Jones shot you with his " . $indyWeapon . " and killed you!!<br>";
            } elseif ($opponentWeapon  == 'whip') {
                $indyWeapon = $weapons[0];
                echo "Indiana Jones beat you to death with his " . $indyWeapon . "!<br>";
            } else if ($opponentWeapon  == 'gun') {
                $indyWeapon = $weapons[1];
                echo "Indiana Jones disarmed you with his " . $indyWeapon . ", then killed you!<br>"; 
            } else {
                echo "You did not choose the right weapon !<br>"; 
            }
            echo "<br><br>";
            echo "--Example 2--<br>";
            switch ($opponentWeapon) {
                case 'fists':
                    $indyWeapon = $weapons[2];
                    break;
                case 'whip':
                    $indyWeapon = $weapons[0];
                    break;
                case 'gun':
                    $indyWeapon = $weapons[1];
                    break;
                default:
                    echo "You did not choose the right weapon !<br>";
            }
            echo 'But Indiana Jones beat your ' . $opponentWeapon . ' with his ' . $indyWeapon . ".<br>" ;
        ?>
    </body>
</html>
