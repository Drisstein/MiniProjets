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
        echo "Connexion réussie ! ";
    } else
        echo "Informations Incorrectes ! ";
}




?>