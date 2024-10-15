<?php
    require_once "./Car.php";
    
    $car1 = new Car();
    $car1->color = "SkyBlue";
    $car1->year = 2020;
    
    $car1->startEngine();
    echo $car1->getEngineStatus();
    $car1->stopEngine();
    echo $car1->getEngineStatus();
    // var_dump($car1);

    $car2 = new Car("Blue", 2024);
    var_dump($car2);
?>