<?php
    $bdd = new PDO('mysql:host=localhost;dbname=Facturama;charset=utf8', 'root', 'root');

    $requete = $bdd->query('SELECT * FROM Factures ORDER BY date DESC');
?>
  <table>
      <tr>
          <td> Société </td>
            <td> Téléphone</td>
             <td> Action </td>
      </tr>
   <?php
    foreach($requete as $facture){
        echo '<tr>';
            echo '<td>'.$facture['date'].'</td>';
            echo '<td>'.$facture['societe'].'</td>';
            echo '<td>'.$facture['montant'].'</td>';
            echo '<td>'.$facture['objet'].'</td>';
            echo '<td>'.' '.'</td>';
        echo '</tr>';
       
    }
?>

    </table>