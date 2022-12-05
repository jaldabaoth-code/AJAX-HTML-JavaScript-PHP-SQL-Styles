<?php
    require_once '../../../.env.php';

    $pdo = new \PDO(DSN, USER, PASS);
    // ----- Insert into table ----- //
    /*
        $query = "INSERT INTO friend (firstname, lastname) VALUES ('Chandler', 'Bing')";
        $statement = $pdo->exec($query);
    */
    echo "With fetchAll and PDO::FETCH_BOTH";
    // ----- WITH fetchAll AND PDO::FETCH_BOTH ----- //
    $query = "SELECT * FROM friend";
    $statement = $pdo->query($query);
    // $friends = $statement->fetchAll();
    $friends = $statement->fetchAll(PDO::FETCH_BOTH); // same as $statement->fetchAll()
    var_dump($friends);
    echo "<hr>";
    echo "With fetch and PDO::FETCH_BOTH";
    // ----- WITH fetch AND PDO::FETCH_BOTH ----- //
    $query = "SELECT * FROM friend";
    $statement = $pdo->query($query);
    // $friends = $statement->fetchAll();
    $friends = $statement->fetch(PDO::FETCH_BOTH); // same as $statement->fetchAll()
    var_dump($friends);
    echo "<hr>";
    echo "With fetch and PDO::FETCH_ASSOC";
    // ----- WITH fetch AND PDO::FETCH_ASSOC ----- //
    $query = "SELECT * FROM friend";
    $statement = $pdo->query($query);
    // $friends = $statement->fetchAll();
    $friends = $statement->fetch(PDO::FETCH_ASSOC); // same as $statement->fetchAll()
    var_dump($friends);
    echo "<hr>";
    echo "With fetch and PDO::FETCH_NUM";
    // ----- WITH fetch AND PDO::FETCH_NUM ----- //
    $query = "SELECT * FROM friend";
    $statement = $pdo->query($query);
    // $friends = $statement->fetchAll();
    $friends = $statement->fetch(PDO::FETCH_NUM); // same as $statement->fetchAll()
    var_dump($friends);
    echo "<hr>";
    echo "With fetch and PDO::FETCH_CLASS";
    // ----- WITH fetch AND PDO::FETCH_CLASS ----- //
    $query = "SELECT * FROM friend";
    $statement = $pdo->query($query);
    //$friends = $statement->fetchAll();
    $friends = $statement->fetch(PDO::FETCH_CLASS | PDO::FETCH_CLASSTYPE); // same as $statement->fetchAll()
    var_dump($friends);
