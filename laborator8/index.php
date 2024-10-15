<?php
    require_once "./Vehicul.php";
    
    $masina1 = new Masina("Toyota", "Carolla", 2018, 1.8);
    $masina2 = new Masina("Honda", "Civic", 2020, 2.0);
    $masina3 = new Masina("Mercedes", "GLE", 2024, 4.3);
    $motocicleta1 = new Motocicleta("BMW", "S1000RR", 2009, 1.0);
    $motocicleta2 = new Motocicleta("Yamaha", "R1", 2019, 1.0);

    GestionareVehicule::adauga($masina1);
    GestionareVehicule::adauga($masina2);
    GestionareVehicule::adauga($masina3);
    GestionareVehicule::adauga($motocicleta1);
    GestionareVehicule::adauga($motocicleta2);

    GestionareVehicule::afiseaza();
?>