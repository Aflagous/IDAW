<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['name'];

    try {
        $pdo = new PDO("mysql:host=" . _MYSQL_HOST . ";dbname=" . _MYSQL_DBNAME, _MYSQL_USER, _MYSQL_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE name = :name");
        $stmt->bindParam(':name', $nom);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            
            echo "Nom : " . $result['name'] . ", Email : " . $result['email'];
        } else {
            echo "Aucun utilisateur trouvé avec ce nom.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
