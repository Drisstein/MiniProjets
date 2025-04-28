<?php
session_start();
// 1- Tableau de base
$prenoms = array('aziz', 'niang', 'khadija', 'amdi');


// 2- Sauvegarder dans $_SESSION avec leur ID
foreach($prenoms as $id => $prenom) {
    $_SESSION[$id + 1] = $prenom;
}
// 3- Afficher tableau HTML avec les valeurs de $_SESSION
echo "<h2>Tableau \$SESSION</h2><hr>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr style='background-color:lightblue'><th>N°</th><th>Prénom</th></tr>";
foreach($_SESSION as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";

echo "<br><br>";

// 4- Afficher maintenant le tableau de base $prenoms
echo "<h2>Tableau \$prenoms</h2><hr>";
foreach($prenoms as $key => $prenom) {
    echo "N°".($key + 1).":" .$prenom . "<br>";
}

// 5- Détruire la session seulement à la toute fin
session_destroy();
?>