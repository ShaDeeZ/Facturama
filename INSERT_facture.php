 <?php

    $date = strtotime($_POST['date_facture']);
    $societe  = htmlspecialchars($_POST['societe_facture']);
    $montant  = htmlspecialchars($_POST['montant_facture']);
    $objet  = htmlspecialchars($_POST['objet_facture']);
    
$bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root');
   
$requete = $bdd->prepare('INSERT INTO Factures (date, societe, montant, objet) VALUES (?,?,?,?)');

$requete->execute(array($date, $societe, $montant, $objet));


?>