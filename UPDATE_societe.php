<?php

    $id = $_POST['id_societe'];
    $nom = htmlspecialchars($_POST['nom']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $type = htmlspecialchars($_POST['type']);

    $bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root');
    
   $req = 'UPDATE Societes SET nom = "'.$nom.'", telephone = "'.$telephone.'", type = "'.$type.'" WHERE id_societe ="'.$id.'"';
   $requete = $bdd->query($req);

    header('Location:Acceuil.php');
   

?>