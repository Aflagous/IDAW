<?php
    $user_id = $_POST['user_id'];
    echo '<form action="modify_utilisateur.php" method="post">';
        echo '<label for="nom">Nom :</label>';
        echo '<input type="text" id="nouveau_nom" name="nouveau_nom"><br>';
        echo '<label for="email">Email :</label>';
        echo '<input type="hidden" name="user_id" value="' . $user_id . '">';
        echo '<input type="email" id="nouveau_email" name="nouveau_email"><br>';
        echo '<input type="submit" value="Modifier Utilisateur">';
    echo '</form>';