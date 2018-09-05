<?php

$id = $_GET['id_societe'];
$bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root');

 $requete = $bdd->query('SELECT * FROM Societes WHERE id_societe ="'.$id.'"');

echo '<form method="post" action="UPDATE_societe.php">';
foreach($requete as $societe){
    echo '<input type="text" name="nom" value="'.$societe['nom'].'"/>';
    echo '<input type="text" name="telephone" value="'.$societe['telephone'].'"/>';
    echo '<input type="text" name="type" value="'.$societe['type'].'"/>';
    echo '<input type="text" name="id_societe" value="'.$societe['id_societe'].'"/>';
  
   
}
echo '<button type="submit">GO </button>';
echo '</form>';
?>