<!-- Exercice 3 : Enregistrement des données dans une session
Objectif : Utiliser les variables de session pour stocker et afficher les
données d'un utilisateur connecté.
Enoncé :
Créez un formulaire d'inscription qui permet à un utilisateur de
s'enregistrer avec son nom et son email. Après l'inscription, utilisez les
variables de session pour afficher un message de bienvenue à
l'utilisateur avec ses informations. -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <form action="" method="post">
        <h2>Inscription</h2>
        Prenom : <input type="text" name="prenom" id="prenom" required><br><br>
        Nom : <input type="text" name="name" id="name" required><br><br>
        Telephone : <input type="tel" name="telephone" id="telephone" required><br><br>
        Email : <input type="email" name="email" id="email" required><br><br>
        <input type="submit" name="submit" id="submit" value="S'inscrire">

    </form>

</body>

</html>
<?php
session_start(); // Démarrer la session

if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['nom'] = $_POST['name'];
    $_SESSION['telephone'] = $_POST['telephone'];
    $_SESSION['email'] = $_POST['email'];

    // Afficher un message de bienvenue
    echo "<h3>Bienvenue, " . $_SESSION['prenom'] . " " . $_SESSION['nom'] . "!</h3>";
    echo "<p>Vos informations :</p>";
    echo "<ul>";
    echo "<li>Téléphone : " . $_SESSION['telephone'] . "</li>";
    echo "<li>Email : " . $_SESSION['email'] . "</li>";
    echo "</ul>";
}
?>