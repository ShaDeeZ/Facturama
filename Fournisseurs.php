<?php
    $bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root');

    $requete = $bdd->query('SELECT * FROM Societes WHERE type = "Fournisseur"');
?>
  <table>
      <tr>
          <td> Société </td>
            <td> Téléphone</td>
             <td> Action </td>
      </tr>
   <?php
    foreach($requete as $societe){
        echo '<tr>';
        echo '<td>'.$societe['nom'].'</td>';
        echo '<td>'.$societe['telephone'].'</td>';
        echo '<td>'.' '.'</td>';
        echo '</tr>';
       
    }
?>

    </table>