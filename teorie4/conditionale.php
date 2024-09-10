<?php
    $age = '18';
    $salary = '10000';

    if ($age >= 18) {
        echo "Ai majoratul";
    }

    if ($salary > 20000) {
        echo "Ok";
    } else {
        echo "Trebuie de progresat";
    }

    if($age >= 18){
        echo "Aveti acces";
    } elseif($age >= 63){
        echo "Esti la pensie";
    } else {
        echo "Acces interzis";
    }

    $color = "red";
    switch ($color) {
        case 'black':
            echo "Este negru";
            break;
        case 'blue':
            echo "Este albastru";
            break;
        case 'red':
            echo "Este rosu";
            break;
        default:
            echo "Nu avem asa culoare";
            break;
    }

?>