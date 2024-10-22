<?php
    try {
        require_once './connect.php';
        
    } catch (PDOException $e) {
        die("Eroare la conexiune. " . $e->getMessage());
    }
?>