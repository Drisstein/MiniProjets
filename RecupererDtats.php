<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="formulaire.php" method="post">
        Choisissez les pays de votre choix :<br />
        France: <input type="checkbox" name="pays[]" value="France"><br>
        Sénégal: <input type="checkbox" name="pays[]" value="Sénégal"><br>
        Allemagne: <input type="checkbox" name="pays[]" value="Allemagne"><br>
        Usa: <input type="checkbox" name="pays[]" value=« Usa"><br>
        <input type="submit" name="valider" value="valider">


    </form>
</body>
<?php
if (isset($_REQUEST["valider"])) {
    $pays = $_POST["pays"];
    foreach ($pays as $pa => $p) {
        echo $pays[$pa] . "<br/>";
    }
}
?>

</html>