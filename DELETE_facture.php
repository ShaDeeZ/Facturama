<?php


    $id_facture = htmlspecialchars($_GET['id_facture']);
    $bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root');
    
   $req = 'DELETE FROM Factures WHERE id_facture = "'.$id_facture.'"';
   $requete = $bdd->query($req);

     header('Location:Acceuil.php');

?>