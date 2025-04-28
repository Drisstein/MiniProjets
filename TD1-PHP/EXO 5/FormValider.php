<!-- Exercice 5 : Validation des entrées utilisateur 
Objectif : Créer un formulaire de saisie et valider que l'email soumis 
est dans un format correct avant de l'afficher. 
Enoncé : 
Créez un formulaire où l'utilisateur saisit son email. Avant d'afficher 
l'email, vérifiez qu'il est dans un format valide. Si l'email n'est pas 
valide, affichez un message d'erreur. -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire à valider </title>
</head>
<body>
    <form action="">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="ex@domaine.com" required>
        <label for="password">Mot de passe : </label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Valider" name="Valider">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD']== 'POST'){
        // Vérification si le formulaire est soumis
        if (isset($_POST['Valider'])) {   
            $email = $_POST['email'];
            // Validation de l'email
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email valide : $email";
            } else {
                echo " L'email n'est pas valide.";
            }
        } else {
            echo "Veuillez soumettre le formulaire.";
        }
    }
    session_destroy();
    ?>
</body>
</html>