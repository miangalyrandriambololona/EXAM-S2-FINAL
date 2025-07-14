<?php
include("../inc/connexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>

    </header>
    <main>
         <h1>Login</h1>
            <form action="../traitements/traitement_login.php" method="post">
                <p>Nom:<input type="text" name="name" required></p>
                <p>Email: <input type="text" name="mail" required></p>
                <p>Mot de passe: <input type="password" name="mdp" required></p>
                <input type="submit" value="Valider">
            </form>
    <p>Pas encore membre ? <a href="inscription.php">Inscrivez-vous ici</a></p>
    </main>
</body>
</html>