<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sommaire</title>
    <link rel="stylesheet" href="P2css.css">
</head>
<body>
    <h1>Bienvenu chez la cooperative agricole loronad</h1>
    <a href="connexion.php" class="bouton">Se connecter</a>

    <nav class="barre-navigation">
    <ul class="menu">
        <li><a href="#">Windows</a></li>
        <li><a href="#">Surface</a></li>
        <li><a href="#">Xbox</a></li>
        <li class="menu-deroulant">
            <a href="#" class="bouton-deroulant">Offres spéciales</a>
            <ul class="sous-menu">
                <li><a href="#">Promo Étudiants</a></li>
                <li><a href="#">Black Friday</a></li>
            </ul>
        </li>
        <li class="menu-deroulant">
            <a href="#" class="bouton-deroulant">TPE & PME</a>
            <ul class="sous-menu">
                <li><a href="#">Solutions Cloud</a></li>
                <li><a href="#">Support Entreprises</a></li>
            </ul>
        </li>
        <li><a href="#">Support technique</a></li>
    </ul>
    </nav>
    <script src="menu.js"></script>

</body>