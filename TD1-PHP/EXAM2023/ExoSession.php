
<?PHP 
session_start();  // Start the session
// 1) Donnons le code PHP permetttant de sauvegzrder les prenoms avec leur ID compris entre 1 et 10 dans un tableau associatif $_SESSION['prenoms']. 
 $prenoms = array('Aziz','Niang','kHadija','Anta');
$_SESSION['prenoms'] = $prenoms;
echo "<table border='1'>";
// 2) Affichons le contenu de la variable de session $_SESSION['prenoms'] sous forme d'un tableau HTML.
echo "<tr><th>ID</th><th>Prénom</th></tr>";
foreach ($prenoms as $id => $prenom) {  //verifcation des indices ! 
    if ($id + 1 >= 1 && $id + 1 <= 10) {
        $_SESSION['prenoms'][$id+1] = $prenom;
        $idC = $id + 1;
        // echo "ID: " . ($id + 1) . ", Prénom: " . $prenom . "<br>"; //Affichage sans HTML
        echo "<tr><td>$idC</td><td>$prenom</td></tr>";
    }
}

//3) Donnons le code PHP permettant de sauvegarder dans le tableau $_POST toutes les valeurs de $_SESSION
foreach ($prenoms as $id => $prenom) {
    $_POST['prenom'][$id+1]=$_SESSION['prenoms'][$id+1];
}

//4) Code permettant d'ajouter une nouvelle valeur deS Sessions
$_POST['nombre']=$_SESSION['number'];

//5)Code permettant dafficher les valeurs de $prenoms.
foreach ($prenoms as $id => $prenom) {
    echo "Votre nom est :" . $prenom. "<br>";
}
session_destroy();
?>

