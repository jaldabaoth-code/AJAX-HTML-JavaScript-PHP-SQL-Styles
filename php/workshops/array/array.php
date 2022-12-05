<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* Head included */
            include '../../../includes/head.html';
        ?>
        <title>PHP Array</title>
    </head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
    <body>
        <h1>PHP Array - Workshop</h1>
        <h2>Array</h2>
        <?php
            /* EX2 -- Loop for */
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
            /* EX3 -- Conditional */
            $name = "Darth Vader";
            if ($name === "Darth Vader" || $name === "Darth Sidious") {
                echo "Sith";
            } else if ($name === "Yoda") {
                echo "Jedi";
            } else {
                echo "Probably a powerless person";
            }
        ?>
        <br/>
        <br/>
        <?php
            /* EX4 -- Indexed array */
            $jedis = ["Obi-Wan Kenobi", "Yoda", "Luke Skywalker", "Windu", "Qui-gon Jinn"];
            $jedis[] = "Rey";
            echo $jedis[1] . " ";
            foreach ($jedis as $jediName) {
                echo $jediName . " ";
            }
        ?>
        <br/>
        <br/>
        <?php
            /* EX5 -- Associative array */
            $jedisNameAge = [
                'Yoda' => 900,
                'Leia' => 19,
                'Luke Skywalker' => 19,
                'Darth Vader' => 46,
                'Chewbacca' => 200
            ];
            $jedisNameAge['Han Solo'] = 29;
            asort($jedisNameAge);
        ?>
        <ul>
            <?php foreach ($jedisNameAge as $name => $age) { ?>
                <li><?php echo $age . " years old is " . $name; ?></li>
            <?php } ?>
        </ul>
        <br/>
        <?php
            foreach ($jedisNameAge as $name => $age) {
                echo $name . " is " . $age . " years old. ";
            }
        ?>
        <br/>
        <?php
            foreach ($jedisNameAge as $name => $age) {
                if ($age>100) {
                    echo $name . " is " . $age. " years old. ";
                }
            }
        ?>
        <br/>
        <br/>
        <?php
            /* EX6 -- Multidimensional arrays */
            $jedisNameAge = [
                'Jedi' => ['Luke Skywalker', 'Yoda', 'Windu'],
                'Sith' => ['Darth Vader', 'Darth Maul', 'Dooku'],
                'Gungan' => ['Jar Jar Binks'],
                'Human' => ['Han Solo', 'Leia']
            ];
            foreach ($jedisNameAge as $raceName => $characterNames) {
        ?> 
                <h2> <?php echo $raceName; ?> </h2>
                <?php foreach ($characterNames as $characterName) { ?>
                    <li>
                        <?php echo $characterName; ?>
                    </li>
                <?php }
            }
            var_dump($jedisNameAge);
            foreach ($jedisNameAge as $raceName => $characterNames) {
                ?>  
                <li>
                    <?php echo $raceName . " " . count($characterNames) ?>
                </li>
            <?php } ?>
    </body>
</html>
