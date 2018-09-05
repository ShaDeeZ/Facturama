<?php

$id = $_GET['id_personne'];
$bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root');

 $requete = $bdd->query('SELECT * FROM Personnes WHERE id_personne ="'.$id.'"');

echo '<form method="post" action="UPDATE_personne.php">';
foreach($requete as $personne){
    echo '<input type="text" name="nom" value="'.$personne['nom'].'"/>';
    echo '<input type="text" name="prenom" value="'.$personne['prenom'].'"/>';
    echo '<input type="text" name="mail" value="'.$personne['mail'].'"/>';
    echo '<input type="text" name="telephone" value="'.$personne['telephone'].'"/>';
    echo '<input type="text" name="societe" value="'.$personne['societe'].'"/>';
    echo '<input type="text" name="id_personne" value="'.$personne['id_personne'].'"/>';
  
   
}
echo '<button type="submit">GO </button>';
echo '</form>';
?>