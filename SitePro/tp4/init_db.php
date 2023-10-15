<?php
require_once('config.php');

try {
    $sql = file_get_contents('sql/create_db.sql');
    $pdo = new PDO("mysql:host=" . _MYSQL_HOST . ";dbname=" . _MYSQL_DBNAME, _MYSQL_USER, _MYSQL_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec($sql);
    echo "Initialisation de la base de données réussie.";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
