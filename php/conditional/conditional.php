<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="#">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/styles/navbar.css">
        <link rel="stylesheet" href="../../assets/styles/style.css">
        <title>PHP Conditional</title>
    </head>
    <?php
        /* Navbar included */
        include '../../includes/navbar.php';
        include '../includes/bottomNavbar.php';
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
