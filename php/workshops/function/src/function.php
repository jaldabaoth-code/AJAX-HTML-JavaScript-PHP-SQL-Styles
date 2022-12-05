<?php
    /* Exercise 1 - Function */
    function sayHello1()
    {
        echo "Hello NIte Owl";
    }

    /* Exercise2 - Return */
    function sayHello2(): string
    {
        $sayHello = "Hello NIte Owl";
        return $sayHello;
    }

    /* Exercise 3 - Setting */
    function sayHello3(string $name): string
    {
        $sayHello = "Hello " . $name;
        return $sayHello;
    }

    /* Exercise 4 - End */
    function whoAmI(string $name, array $watchmen): ?string
    {
        foreach ($watchmen as $watchmenName)
        {
            if ($name == $watchmenName) {
                $message = $name . " is a watchmen";
                return $message;            
            } else {
                $message = $name . " is an intruder";
            }
        }
        return $message; 
    }
