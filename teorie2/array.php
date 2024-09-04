<?php
    // $orase = array('Cahul', 'Cantemir', 'Leova');
    $orase = ['Cahul', 'Cantemir', 'Leova', ['Chisinau', 'Ialoveni']];
    
    $user = [
        'nume' => 'John Doe',
        'email' => 'jd@gmail.com'
    ];

    echo $orase[3][1] . "<br>";
    echo $user['email'] . "<br>";
?>