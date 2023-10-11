<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login_form.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
</head>
<body>
    <h1>Bienvenue, <?php echo $_SESSION['login']; ?>!</h1>
    <p>Contenu de la page d'accueil protégée.</p>
    <a href="log_out.php">Se déconnecter</a>
</body>
</html>
