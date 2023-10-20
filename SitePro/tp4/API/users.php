<?php
require_once('../config.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    try {
        $pdo = new PDO("mysql:host=" . _MYSQL_HOST . ";dbname=" . _MYSQL_DBNAME, _MYSQL_USER, _MYSQL_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare("SELECT * FROM utilisateurs");
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($users);
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(array("message" => "Erreur serveur : " . $e->getMessage()));
    }
}   elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['email'])) {
        try {
            $pdo = new PDO("mysql:host=" . _MYSQL_HOST . ";dbname=" . _MYSQL_DBNAME, _MYSQL_USER, _MYSQL_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare("INSERT INTO utilisateurs (name, email) VALUES (:name, :email)");
            $stmt->bindParam(':name', $_POST['name']);
            $stmt->bindParam(':email', $_POST['email']);
            $stmt->execute();
            http_response_code(201);
            echo json_encode(array("message" => "Utilisateur créé avec succès"));
        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode(array("message" => "Erreur serveur : " . $e->getMessage()));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => "Données invalides, veuillez fournir un nom et un email"));
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['id']) && isset($data['name']) && isset($data['email'])) {
        try {
            $pdo = new PDO("mysql:host=" . _MYSQL_HOST . ";dbname=" . _MYSQL_DBNAME, _MYSQL_USER, _MYSQL_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare("UPDATE utilisateurs SET name = :name, email = :email WHERE id = :id");
            $stmt->bindParam(':name', $data['name']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':id', $data['id']);
            $stmt->execute();
            http_response_code(200);
            echo json_encode(array("message" => "Utilisateur mis à jour avec succès"));
        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode(array("message" => "Erreur serveur : " . $e->getMessage()));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => "Données invalides, veuillez fournir un ID, un nom et un email"));
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $id = $_GET['id'] ?? null;
    if ($id) {
        try {
            $pdo = new PDO("mysql:host=" . _MYSQL_HOST . ";dbname=" . _MYSQL_DBNAME, _MYSQL_USER, _MYSQL_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare("DELETE FROM utilisateurs WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            http_response_code(204);
        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode(array("message" => "Erreur serveur : " . $e->getMessage()));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => "ID d'utilisateur manquant"));
    }
} else {
    http_response_code(405);
    echo json_encode(array("message" => "Méthode non autorisée"));
}
