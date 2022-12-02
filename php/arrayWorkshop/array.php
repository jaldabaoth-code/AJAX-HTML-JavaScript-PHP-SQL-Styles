<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="#">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/styles/navbar.css">
        <link rel="stylesheet" href="../../assets/styles/style.css">
        <title>Workshop Array PHP</title>
    </head>
    <?php
        /* Navbar included */
        include '../../includes/navbar.php';
        include '../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>Workshop Array PHP</h1>
        <?php
            /* EX2 --  Boucle for */
            for ($i=0; $i<10; $i++) {
                echo $i;
            }
        ?>
        <br/>
        <?php
            for ($i=0; $i<11; $i++) {
                echo $i;
            }
        ?>
        <br/>
        <?php
            for ($i=1; $i<11; $i++)
            {
                echo $i;
            }
        ?>
        <br/>
        <?php
            for ($i=10; $i>0; $i--)
            {
                echo $i;
            }
        ?>
        <br/>
        <?php
            for ($i=25; $i<50; $i=$i+5)
            {
                echo $i;
            }
        ?>
        <br/>
        <?php
            for ($i=10; $i>=-10; $i=$i-3)
            {
                echo $i;
            }
        ?>
        <br/>
        <br/>
        <?php
            /* EX3 -- Conditions */
            $name = "Darth Vader";
            if ($name === "Darth Vader" || $name === "Darth Sidious") {
                echo "Sith";
            } else if ($name === "Yoda") {
                echo "Jedi";
            } else {
                echo "sans doute une personne sans pouvoir";
            }
        ?>
        <br/>
        <br/>
        <?php
            /* EX4 -- Tableau indexé */
            $jedis = ["Obi-Wan Kenobi", "Yoda", "Luke Skywalker", "Windu", "Qui-gon Jinn"];
            $jedis[] = "Rey";
            echo $jedis[1];
            foreach ($jedis as $namejedi) {
                echo $namejedi;
            }
        ?>
        <br/>
        <br/>
        <?php
            /* EX5 -- Tableau associatif */
            $jedisNameAge = [
                'Yoda' => 900,
                'Leia' => 19,
                'Luke Skywalker' => 19,
                'Darth Vader' => 46,
                'Chewbacca' => 200,
            ];
            $jedisNameAge['Han Solo'] = 29;
            asort($jedisNameAge);
        ?>
        <ul>
            <?php foreach ($jedisNameAge as $name => $age) { ?>
                <li><?php echo $age . " and " . $name; ?></li>
            <?php } ?>
        </ul>
        <br/>
        <?php

            foreach ($jedisNameAge as $name => $age) {
                echo $name . " and " . $age;
            }
        ?>
        <br/>
        <?php
            foreach ($jedisNameAge as $name => $age) {
                if ($age>100) {
                    echo $name . " and " . $age;
                }
            }
        ?>
        <br/>
        <br/>
        <?php
            /* EX6 --  Tableaux multidimensionnels */
            $jedisNameAge = [
                'Jedi' => ['Luke Skywalker', 'Yoda', 'Windu'],
                'Sith' => ['Darth Vader', 'Darth Maul', 'Dooku'],
                'Gungan' => ['Jar Jar Binks'],
                'Human' => ['Han Solo', 'Leia'],
            ];
            foreach ($jedisNameAge as $raceName => $characterNames) {
                ?> <h2> <?php echo $raceName; ?> </h2>
                <?php foreach($characterNames as $characterName) { ?>
                <li> <?php echo $characterName; ?> </li><?php }
            }
            var_dump($jedisNameAge);
            foreach ($jedisNameAge as $raceName => $characterNames) {
                ?> <li> <?php echo $raceName . " " . count($characterNames) ?> </li> <?php
            }
            var_dump($jedisNameAge);
        ?>
    </body>
</html>
