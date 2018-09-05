 <?php

    $nom =  htmlspecialchars($_POST['nom_societe']);
    $telephone = htmlspecialchars($_POST['telephone_societe']);
    $type = htmlspecialchars($_POST['type_societe']);


    
$bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root');
   
$requete = $bdd->prepare('INSERT INTO Societes (nom, telephone, type) VALUES (?,?,?)');

$requete->execute(array($nom, $telephone, $type ));


?>