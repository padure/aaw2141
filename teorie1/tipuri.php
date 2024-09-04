<?php
    # Scalare
    // bool - true, false
    // int - 2, 34, 10000
    // float - 1.5, 2.4, 23.19999
    // string - "Hello"
    # Compuse
    // array - $numere = [1, 2, 3]
    // objet
    // callable
    // iterabile
    # Speciale
    // resource
    // null  
?>

<?php
    //Conversii
    (int) $nr1 = "1";
    (string) $nume = "John";
    echo gettype( (int) $nr1);
    $numere = [1, 2, 3, "Pauza"];
    print_r($numere);
    echo "<pre>";
    var_dump($numere);
    echo "</pre>";
?>