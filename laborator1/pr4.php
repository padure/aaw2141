<?php
    $nr1 = 58;
    $nr2 = 8;
    $operator = '/';
    switch ($operator) {
        case '/':
            echo $nr1 / $nr2;
            break;
        case '*':
            echo $nr1 * $nr2;
            break;
        case '+':
            echo $nr1 + $nr2;
            break;
        case '-':
            echo $nr1 - $nr2;
            break;
        default:
            echo "Operator inexistent";
            break;
    }
?>