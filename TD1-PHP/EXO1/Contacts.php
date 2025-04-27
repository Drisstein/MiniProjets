<?PHP
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $Email = $_POST["Email"];
    echo "Votre nom est :  $prenom $nom <br> Votre mail est : $Email";
}
?>