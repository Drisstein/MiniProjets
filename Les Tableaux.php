<?php
echo "<b>Les tableaux Associatifs => </b> <br>";
$information = array(
    'prenom' => 'Demba',
    'nom' => 'Thiam',
    'adresse' =>
        'Linguere',
    'ville' => 'Louga'
);
foreach ($information as $info) {
    echo $info . '<br />';
}

echo "<br>";
echo '<b> Boucle for</b>: <br> ';
$prenoms = array('Demba', 'Alioune', 'Issa', 'Fatou');
for ($i = 0; $i < 4; $i++) {
    echo $prenoms[$i] . '<br />';
}
?>