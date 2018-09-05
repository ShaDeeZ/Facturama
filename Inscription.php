<head>
    <meta charset="utf-8"/>
</head>
<body>
    <form method="post" action="INSERT_new_admin.php">
        <input type="text" name="loggin" placeholder="loggin"/>
        <input type="password" name="mdp" placeholder="mdp"/>
        <select name="type">
            <option value="1"> Super Admin </option>
            <option value="2"> Visiteur </option>
        </select>
        <button type="submit">GO</button>
    </form>
    
</body>