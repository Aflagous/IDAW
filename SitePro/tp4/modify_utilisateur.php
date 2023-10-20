<?php

require_once("config.php");

if(isset($_POST['name']) && isset($_POST['email'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];}

try {
    
    $stmt = $pdo->prepare("INSERT INTO utilisateurs (name, email) VALUES (:name, :email)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    echo "Nouvel élément ajouté avec succès à la base de données !";
    header("Location: users.php");
} catch (PDOException $e) {
    echo "Erreur lors de l'ajout de l'élément : " . $e->getMessage();
}
?>

