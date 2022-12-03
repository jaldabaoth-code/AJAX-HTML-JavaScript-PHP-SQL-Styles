<?php
    /* EX1 - FUNCTION */
    function sayHello1()
    {
        echo "Hello NIte Owl";
    }

    /* EX2 - RETURN */
    function sayHello2(): string
    {
        $sayHello = "Hello NIte Owl";
        return $sayHello;
    }

    /* EX3 - SETTING */
    function sayHello3(string $name): string
    {
        $sayHello = "Hello " . $name;
        return $sayHello;
    }

    /* EX4 - END */
    function whoAmI(string $name, array $watchmen): ?string
    {
        foreach($watchmen as $watchmenName)
        {
            if ($name == $watchmenName) {
                $message = $name . " est un watchmen";
                return $message;            
            } else {
                $message = $name . " est un intrus";
            }
        }
        return $message; 
    }
    