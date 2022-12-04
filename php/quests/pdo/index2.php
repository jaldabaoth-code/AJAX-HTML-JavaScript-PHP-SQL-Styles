<?php

    require_once '../../../.env.php';

    $pdo = new \PDO(DSN, USER, PASS);


    /*
        $query = "INSERT INTO friend (firstname, lastname) VALUES ('Chandler', 'Bing')";
        $statement = $pdo->exec($query);
    */

    // ----- AVEC fetchAll ET PDO::FETCH_BOTH ----- //
    $query = "SELECT * FROM friend";
    $statement = $pdo->query($query);
    // $friends = $statement->fetchAll();
    $friends = $statement->fetchAll(PDO::FETCH_BOTH); // same as $statement->fetchAll()
    var_dump($friends);

    // ----- AVEC fetch ET PDO::FETCH_BOTH ----- //
    $query = "SELECT * FROM friend";
    $statement = $pdo->query($query);
    // $friends = $statement->fetchAll();
    $friends = $statement->fetch(PDO::FETCH_BOTH); // same as $statement->fetchAll()
    var_dump($friends);

    // ----- AVEC fetch ET PDO::FETCH_ASSOC ----- //
    $query = "SELECT * FROM friend";
    $statement = $pdo->query($query);
    // $friends = $statement->fetchAll();
    $friends = $statement->fetch(PDO::FETCH_ASSOC); // same as $statement->fetchAll()
    var_dump($friends);

    // ----- AVEC fetch ET PDO::FETCH_NUM ----- //
    $query = "SELECT * FROM friend";
    $statement = $pdo->query($query);
    // $friends = $statement->fetchAll();
    $friends = $statement->fetch(PDO::FETCH_NUM); // same as $statement->fetchAll()
    var_dump($friends);

    // ----- AVEC fetch ET PDO::FETCH_CLASS ----- //
    $query = "SELECT * FROM friend";
    $statement = $pdo->query($query);
    $friends = $statement->fetchAll();
    $friends = $statement->fetch(PDO::FETCH_CLASS); // same as $statement->fetchAll()
    var_dump($friends);
