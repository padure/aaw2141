<?php
    try {
        require_once './connect.php';
        $id = htmlspecialchars($_GET['id']);
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        header('location:index.php');
    } catch (PDOException $e) {
        die("Eroare la conexiune. " . $e->getMessage());
    }
?>