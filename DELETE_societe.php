<?php

    $id_societe = htmlspecialchars($_GET['id_societe']);
    $bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root');
    
   $req = 'DELETE FROM Societes WHERE id_societe = "'.$id_societe.'"';
   $requete = $bdd->query($req);

    header('Location:Acceuil.php');


?>