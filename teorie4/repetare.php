<?php
    for ($i=0; $i < 10; $i++) { 
        echo $i . "<br>";
    }

    $contor = 0;

    while ($contor < 10) {
        echo $contor . "<br>";
        $contor++;
    }

    $suma = 0;

    do {
        $suma += 10;
        echo $suma . "<br>";
    } while ($suma < 100);

    $nume = ['Alin', 'Ion', 'Alina', 'Ionela'];
    
    for ($i=0; $i < count($nume) ; $i++) { 
        echo $nume[$i] . "<br>";
    }

    foreach ($nume as $value) {
        echo $value . "<br>";
    }

    $user = [
        'nume' => 'John Doe',
        'email' => 'jd@gmail.com',
        'city' => 'Cahul'
    ];

    foreach ($user as $key => $value) {
        echo  ucfirst($key) . ": " . $value . "<br>";
    }
    
?>