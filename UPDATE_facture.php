<?php

    $id = $_POST['id_facture'];
    $date = $_POST['date'];
    $societe = $_POST['societe'];
    $montant = $_POST['montant'];
    $objet = $_POST['objet'];

    $bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root');
    
   $req = 'UPDATE  Factures SET date = "'.$date.'", societe = "'.$societe.'", montant = "'.$montant.'", objet = "'.$objet.'" WHERE id_facture ="'.$id.'"';
   $requete = $bdd->query($req);

    header('Location:Acceuil.php');
   


?>