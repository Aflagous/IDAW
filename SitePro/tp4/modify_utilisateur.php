<?php

require_once('config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    try {
        $pdo = new PDO("mysql:host=" . _MYSQL_HOST . ";dbname=" . _MYSQL_DBNAME, _MYSQL_USER, _MYSQL_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare("UPDATE utilisateurs SET name = :nouveau_nom, email = :nouvel_email WHERE id = :user_id");
        $stmt->bindParam(':nouveau_nom', $_POST['nouveau_nom']);
        $stmt->bindParam(':nouvel_email', $_POST['nouveau_email']);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        header("Location: users.php"); 
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
