<?php
include("../inc/connexion.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="../assets/inscription.css">
</head>
<body>
    <h1>Formulaire d'inscription</h1>
    <form action="../traitements/traitement_inscription.php" method="post">
         <p>Nom:<input type="text" name="name" required></p>
                <p>Genre:<input type="text" name="genre" required></p>
                <p>Email: <input type="text" name="mail" required></p>
                <p>Ville: <input type="text" name="ville" required></p>
                <p>Mot de passe: <input type="password" name="mdp" required></p>
        <p>Date de naissance :
            <select name="jour" required><?php for($i=1;$i<=31;$i++) echo "<option value='$i'>$i</option>"; ?></select>
            <select name="mois" required><?php for($i=1;$i<=12;$i++) echo "<option value='$i'>$i</option>"; ?></select>
            <select name="annee" required><?php for($i=1900;$i<=2020;$i++) echo "<option value='$i'>$i</option>"; ?></select>
        </p>
        <input type="submit" value="Valider">
    </form>
</body>
</html>