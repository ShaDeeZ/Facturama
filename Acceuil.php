<?php
session_start();
if(!isset($_SESSION['type'])){
    header('Location:Connexion.php');
}
?>
   <head> 
       <meta charset="utf-8"/>
       <link rel="stylesheet" href="Acceuil.css"/>
   </head>
   <body>
   <div class="countainer">

    
    <?php

    $bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root');

    $requete = $bdd->query('SELECT * FROM Factures ORDER BY date DESC LIMIT 5');
?>
  <div class="contain">
  <table>
      <h2>  FACTURES </h2>
      <tr>
          <td> date </td>
            <td> Société</td>
             <td> Montant </td>
             <td> Objet </td>
             <td> Action </td>
      </tr>
   <?php
    foreach($requete as $facture){
        $date = date('m/d/Y',$facture['date']);
        echo '<tr>';
            echo '<td class="td_acceuil">'.$date.'</td>';
            echo '<td class="td_acceuil">'.$facture['societe'].'</td>';
            echo '<td class="td_acceuil">'.$facture['montant'].'</td>';
            echo '<td class="td_acceuil">'.$facture['objet'].'</td>';
            if($_SESSION['type'] == 1){
            echo '<td class="td_acceuil">'.'<a href="DELETE_facture.php?id_facture='.$facture['id_facture'].'"> DELETE </a> <a href="UPADTE_form_facture.php?id_facture='.$facture['id_facture'].'"> UPDATE </a> '.'</td>';}
        echo '</tr>';
       
    }
?>

    </table>
    <br>
    <br>
       </div>
       </div>
       
       <div class="countainer">
    
<!--  PARTIE PERSONNES -->   
    
<?php
     $requete = $bdd->query('SELECT * FROM Personnes ORDER BY id_personne DESC LIMIT 5');
?>
 <div class="contain">
  <table>
      <h2>PERSONNES</h2>
      <tr>
          <td> Nom </td>
            <td> mail </td>
             <td> téléphone </td>
             <td> société </td>
             <td> Action </td>
      </tr>
   <?php
    foreach($requete as $personne){
        echo '<tr>';
            echo '<td class="td_acceuil">'.$personne['nom'].' '.$personne['prenom'].'</td>';
            echo '<td class="td_acceuil">'.$personne['mail'].'</td>';
            echo '<td class="td_acceuil">'.$personne['telephone'].'</td>';
            echo '<td class="td_acceuil">'.$personne['societe'].'</td>';
        
            if($_SESSION['type'] == 1){
            echo '<td class="td_acceuil">'.'<a href="DELETE_personne.php?id_personne='.$personne['id_personne'].'">DELETE </a><a href="UPDATE_form_personne.php?id_personne='.$personne['id_personne'].'"> UPDATE </a>'.'</td>';
            }
        echo '</tr>';
       
    }
?>

    </table>
        <br>
    <br>
           </div>
       </div>
       
       <div class="countainer">
    
<!--  PARTIE SOCIETES -->   
    
<?php
     $requete = $bdd->query('SELECT * FROM Societes ORDER BY id_societe DESC LIMIT 5');
?>
 <div class="contain">
  <table>
      <h2>SOCIETES</h2>
      <tr>
          <td> Nom </td>
          <td> téléphone </td>
          <td> Type </td>
          <td> Action </td>
      </tr>
   <?php
    foreach($requete as $societe){
        echo '<tr>';
            echo '<td class="td_acceuil">'.$societe['nom'].'</td>';
            echo '<td class="td_acceuil">'.$societe['telephone'].'</td>';
            echo '<td class="td_acceuil">'.$societe['type'].'</td>';
        if($_SESSION['type'] == 1){
            echo '<td class="td_acceuil">'.'<a href="DELETE_societe.php?id_societe='.$societe['id_societe'].'"> DELETE </a><a href="UPDATE_form_societe.php?id_societe='.$societe['id_societe'].'"> UPDATE </a> '.'</td>';
        }
        
        echo '</tr>';
       
    }
?>
       </table>
       </div>
       </div>
</body>

    
    