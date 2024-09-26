<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nume       = $_POST['nume'];
        $genul      = $_POST['genul'] ?? null;
        $localitate = $_POST['localitate'];
        $abonat     = $_POST['abonat'] ?? null;
        $email      = $_POST['email'];
        $parola     = $_POST['parola'];
        die($genul);
    }
?>