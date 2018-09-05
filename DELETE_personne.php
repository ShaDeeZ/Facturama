<?php


    $id_personne = htmlspecialchars($_GET['id_personne']);
    $bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root');
    
   $req = 'DELETE FROM Personnes WHERE id_personne = "'.$id_personne.'"';
   $requete = $bdd->query($req);

     header('Location:Acceuil.php');

?>