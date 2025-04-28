<?PHP
session_start();
$prenoms = array('aziz', 'niang', 'khadija', 'amdi');
// 1-Sauvegarder dans $_SESSION avec leur ID
foreach($prenoms as $id => $prenom) { {
        $_SESSION['prenoms'][$id + 1] = $prenom; // Sauvegarder dans $_SESSION
    }

}

// 2-Afficher un tableau HTML avec les valeurs stockées !
echo"<table border='1' cellpadding='5' cellspacing='0'>";
echo"<tr><th>N° </th><th>Prénom</th></tr>";
foreach($_SESSION as $key =>$value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
    
}
session_destroy();

?>