<?php
    // Functii
    # Declarative
    function suma(int|float $nr1, int|float $nr2): mixed{
        return $nr1 + $nr2;
    }
    echo suma(34, 23);
    # Anonima | Constanta
    $salut = function(string $nume):string{
        return "Salut, $nume";
    };
    echo $salut("Ion");
    
    $numeUser="John Doe";
    $hello = function ($text) use ($numeUser) : string {
        return "$text, $numeUser";
    };
    echo $hello("Hello");
    # 
?>