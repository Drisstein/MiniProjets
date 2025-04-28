<!-- Exercice 2 : Vérification des données d'un formulaire de connexion 
Objectif : Créer un formulaire de connexion et vérifier les données 
soumises. 
Enoncé : 
Créez un formulaire de connexion avec les champs "Nom d'utilisateur" 
et "Mot de passe". Lorsque l'utilisateur soumet le formulaire, vérifiez si 
les données soumises correspondent aux valeurs pré-définies. Si les 
données sont correctes, affichez un message de bienvenue. Sinon, 
affichez un message d'erreur. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verication des donnees saisies</title>
</head>

<body>
    <form action="" method="post">
        <h2>Connexion</h2>
        Nom d'utilisateur <input type="texte" name="username" id="mail">
        Mot de Passe <input type="password" name="password" id="">
        <input type="submit" name="submit" id="">

    </form>
</body>

</html>
<?PHP
$admin = "drisstein";
$pass = "root";
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (($username == $admin) && ($pass == $password)) {
        echo "Bienvenue $admin ,Connexion réussie ! ";
    } else
        echo "Informations Incorrectes ! ";
}
?>