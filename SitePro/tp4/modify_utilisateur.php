<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['ID']; 
    $nom = $_POST['name']; 
    $email = $_POST['email']; 

    try {
        $pdo = new PDO("mysql:host=" . _MYSQL_HOST . ";dbname=" . _MYSQL_DBNAME, _MYSQL_USER, _MYSQL_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("UPDATE utilisateurs SET name = :name, email = :email WHERE id = :id");
        $stmt->bindParam(':name', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        header("Location: users.php"); 
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
