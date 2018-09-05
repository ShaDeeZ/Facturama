<head>
    <meta charset="utf-8">
    <title> No Title </title>
</head>
<body>
   INSERT FACTURE
    <form method="post" action="INSERT_facture.php">
        <input type="text" name="societe_facture" placeholder="nom de la société"/>
         <input type="text" name="objet_facture" placeholder="objet de la société"/>
        <input type="number" name="montant_facture" step=".01" min="0"/>
        <input type="date" name="date_facture"/>   
        <button type="submit"> GO </button>
    </form>
    <br> 
    INSERT PERSONNE
      <form method="post" action="INSERT_personne.php">
        <input type="text" name="nom_personne" placeholder="Nom"/>
        <input type="text" name="prenom_personne" placeholder="Prénom"/>
        <input type="mail" name="mail_personne" placeholder="mail"/>
        <input type="text" name="telephone_personne" placeholder="téléphone"/>
        <input type="text" name="societe_personne" placeholder="nom de la société"/>
        <button type="submit"> GO </button>
    </form>
    <br>
    INSERT SOCIETE
      <form method="post" action="INSERT_societe.php">
        <input type="text" name="nom_societe" placeholder="Nom"/>
        <input type="text" name="telephone_societe" placeholder="telephone"/>
        <select name="type_societe">
            <option value="Client"> Client </option>
            <option value="Fournisseur"> Fournisseur </option>
        </select>
         
       
        <button type="submit"> GO </button>
    </form>
    
</body>