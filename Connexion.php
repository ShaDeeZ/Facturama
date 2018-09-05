<?php 
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root');


if(isset($_POST['pseudoconnect'])){
    $pseudoconnect = htmlspecialchars($_POST['pseudoconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if(!empty($pseudoconnect) AND !empty($mdpconnect)) {
        
   $requser = $bdd->prepare('SELECT * FROM Admin WHERE loggin = ? AND mdp = ?');
       $requser -> execute(array($pseudoconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if($userexist == 1){
            
       $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['type'] = $userinfo['type'];
      
           
         
            
            header("Location:Acceuil.php");
        }
      
        
        else {    $erreur =  "mauvais login ou mot de passe ";
                    echo $erreur;}
        
            
        
    } }?>

<!DOCTYPE html>
<head>
      <meta charset="utf-8" />
      <title>Kush Interface</title>
        <link rel="stylesheet" type="text/css" href="Kush-interface.css" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>

<body>
<div align="center">
    
  <h2> Connexion </h2>
    
 
    
    <form method="post" action="">
        
           <table>
    <tr>
        <td align="right">
            <label for="pseudoconnect"> Votre loggin : </label></td>
  
        <td> 
            <input type="text" name="pseudoconnect" placeholder="loggin"/>
        </td>
  </tr>
               
               
        <tr>
        <td align="right">
            <label for="mdpconnect"> Votre mot de passe : </label></td>
  
        <td> 
            <input type="password" name="mdpconnect" id="mdp"/>
        </td>
  </tr>
               
    
        </table>
          <button type="submit"> Envoyer </button>
    </form>
    <?php
   if(isset($erreur)){
       
       echo $erreur;
   } 
    
    ?>
    
    </div>



</body>
   