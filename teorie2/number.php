<?php
    $numeUtilizator = "John Doe";
    //Constante
    define('PORT', 8000);
    define('HOST_NAME', 8000);
    const URL = "localhost";

    echo $numeUtilizator . "<br>" ;
    echo gettype($numeUtilizator) . "<br>";

    echo is_integer($numeUtilizator) . "<br>";
    echo is_string($numeUtilizator) . "<br>";
    echo is_bool($numeUtilizator) . "<br>";
    
    
    echo PHP_INT_MAX . "<br>";
    echo PHP_INT_MIN . "<br>";
    
    // Operatori
    # Aritmetici + - / * %
    # Atribuire = =+ =- =/ =* =%
    # Incrementare ++$a $a++
    # Decrementare --$a $a--
    # Comparare == === <= >= < > ! != !== <>
    
    // Functii predefinite
    echo abs(-15) . "<br>";
    echo pow(2, 6) . "<br>";
    echo sqrt(16) . "<br>";
    echo max(2, 3, 5) . "<br>";
    echo min(2, 3, 5) . "<br>";
    echo round(2.6) . "<br>";
    echo floor(2.6) . "<br>";
    echo ceil(2.2) . "<br>";
    
?>