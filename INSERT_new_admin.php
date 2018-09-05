 <?php

    $loggin =  htmlspecialchars($_POST['loggin']);
    $mdp = sha1($_POST['mdp']);
    $type = htmlspecialchars($_POST['type']);   
$bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root'); 
$requete = $bdd->prepare('INSERT INTO Admin (loggin, mdp, type) VALUES (?,?,?)');
$requete->execute(array($loggin, $mdp, $type ));
header('Location:Connexion.php');


?>