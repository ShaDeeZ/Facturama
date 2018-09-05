 <?php

    $nom =  htmlspecialchars($_POST['nom_personne']);
    $prenom = htmlspecialchars($_POST['prenom_personne']);
    $mail  = htmlspecialchars($_POST['mail_personne']);
    $telephone  = htmlspecialchars($_POST['telephone_personne']);
    $societe  = htmlspecialchars($_POST['societe_personne']);

    
$bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root');
   
$requete = $bdd->prepare('INSERT INTO Personnes (nom, prenom, mail, telephone, societe) VALUES (?,?,?,?,?)');

$requete->execute(array($nom, $prenom, $mail, $telephone, $societe));


?>