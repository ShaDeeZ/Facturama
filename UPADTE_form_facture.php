<?php

$id = $_GET['id_facture'];
$bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root');

 $requete = $bdd->query('SELECT * FROM Factures WHERE id_facture ="'.$id.'" ');

echo '<form method="post" action="UPDATE_facture.php">';
foreach($requete as $facture){
    echo '<input type="text" name="societe" value="'.$facture['societe'].'"/>';
     echo '<input type="number" name="date" value="'.$facture['date'].'"/>';
    echo '<input type="number" min="0" step="0.01" name="montant" value="'.$facture['montant'].'"/>';
     echo '<input type="text" name="objet" value="'.$facture['objet'].'"/>';
     echo '<input type="text" name="id_facture" value="'.$facture['id_facture'].'"/>';
}
echo '<button type="submit">GO </button>';
echo '</form>';
?>