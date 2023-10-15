<?php
require_once('config.php');
$connectionString = "mysql:host=". _MYSQL_HOST;
if(defined('_MYSQL_PORT'))
    $connectionString .= ";port=". _MYSQL_PORT;
$connectionString .= ";dbname=" . _MYSQL_DBNAME;
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );

try {
    $pdo = new PDO($connectionString, _MYSQL_USER, _MYSQL_PASSWORD, $options);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $request = $pdo->prepare("select * from utilisateurs");
    $request->execute();
    $users = $request->fetchAll(PDO::FETCH_OBJ);

    echo '<table>';
    echo '<tr><th>ID</th><th>Nom</th><th>Email</th></tr>';
    foreach ($users as $user) {
        echo '<tr>';
        echo '<td>' . $user->id . '</td>';
        echo '<td>' . $user->name . '</td>';
        echo '<td>' . $user->email . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    echo '<form action="ajouter_utilisateur.php" method="post">';
        echo '<label for="nom">Nom :</label>';
        echo '<input type="text" id="name" name="name"><br>';
        echo '<label for="email">Email :</label>';
        echo '<input type="email" id="email" name="email"><br>';
        echo '<input type="submit" value="Ajouter Utilisateur">';
    echo '</form>';

    echo '<form method="post" action="delete_utilisateur.php">';
        echo '<label for="name">Nom de lutilisateur :</label>';
        echo '<input type="text" id="name" name="name" required>';
        echo '<input type="submit" value="Supprimer Utilisateur">';
    echo '</form>';

    echo '<form action="modify_utilisateur.php" method="post">';
        echo '<label for="id">ID :</label>';
        echo '<input type="text" id="id" name="id"><br>';
        echo '<label for="nom">Nom :</label>';
        echo '<input type="text" id="name" name="name"><br>';
        echo '<label for="email">Email :</label>';
        echo '<input type="email" id="email" name="email"><br>';
        echo '<input type="submit" value="Modifier Utilisateur">';
    echo '</form>';

    echo '<form method="post" action="read_utilisateur.php">';
        echo '<label for="name">Nom de lutilisateur :</label>';
        echo '<input type="text" id="name" name="name" required>';
        echo '<input type="submit" value="Afficher Utilisateur">';
    echo '</form>';

}
catch (PDOException $erreur) {
    echo 'Erreur : ' . $erreur->getMessage();
}
$pdo = null;
?>
