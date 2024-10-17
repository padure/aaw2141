<?php
    try {
        $dsn = "mysql:host=localhost;dbname=aaw_lectia8";
        $username="root";
        $password="";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        $pdo = new PDO($dsn, $username, $password, $options);
        
        $sql = "SELECT * FROM users";
        $stmt = $pdo->query($sql);
        $users = $stmt->fetchAll();

    } catch (PDOException $e) {
        die("Eroare la conexiune. " . $e->getMessage());
    }
?>