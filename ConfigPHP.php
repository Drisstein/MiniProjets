<?PHP
// echo phpinfo(); //Affiche les informations de PHP 
echo "<b>Numero de port actuel :</b> <br>";
echo $_SERVER["SERVER_PORT"]; // pour avoir le port de la machine
echo "<br> <hr>";
echo "<b>information sur le navigateur :</b> <br>";
echo $_SERVER['HTTP_USER_AGENT'];  // information sur le navigateur
?>