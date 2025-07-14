<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../inc/connexion.php");
include("../inc/functions.php");

//session_start();
//var_dump($_SESSION);
session_start();

$listeObjets = getObjetsMembreConnecte($conn);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes objets</title>
</head>
<body>

<h2>Mes objets</h2>

<table border="1">
    <tr>
        <th>Nom de l'objet</th>
        <th>Date de retour (si emprunté)</th>
        <th>État</th>
    </tr>

    <?php if (empty($listeObjets)) : ?>
        <tr><td colspan="3">Aucun objet trouvé.</td></tr>
    <?php else : ?>
        <?php foreach ($listeObjets as $objet) : ?>
            <tr>
                <td><?= htmlspecialchars($objet['nom_objet']) ?></td>
                <td><?= $objet['date_retour'] ? htmlspecialchars($objet['date_retour']) : '-' ?></td>
                <td><?= $objet['date_retour'] ? 'Emprunté' : 'Disponible' ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>

</body>
</html>