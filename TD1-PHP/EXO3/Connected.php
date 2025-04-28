<?php
session_start(); // Démarrer la session
// Afficher un message de bienvenue
    echo "<h3>Bienvenue, " . $_SESSION['prenom'] . " " . $_SESSION['nom'] . "!</h3>";
    echo "<p>Vos informations :</p>";
    echo "<ul>";
    echo "<li>Téléphone : " . $_SESSION['telephone'] . "</li>";
    echo "<li>Email : " . $_SESSION['email'] . "</li>";
    echo "</ul>";
    session_destroy(); // Détruire la session après l'affichage
?>