<?php

    $id = $_POST['id_personne'];
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['mail']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $societe = htmlspecialchars($_POST['societe']);

    $bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root');
    
   $req = 'UPDATE Personnes SET nom = "'.$nom.'", prenom = "'.$prenom.'", mail = "'.$mail.'", telephone = "'.$telephone.'", societe = "'.$societe.'" WHERE id_personne ="'.$id.'"';
   $requete = $bdd->query($req);

    header('Location:Acceuil.php');
   

?>