

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer votre compte</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form name="form" action="validationregistration.php" method="post">
    <div class="container">
        <h2>Créer votre compte</h2>
        <input type="text" placeholder="Nom..." name="nom"  pattern="[a-zA-Z]{3,12}" value="<?php echo @$nom?>"required><br><br>
        <input type="text" placeholder="Prenom..." name="prenom" pattern="[a-zA-Z]{3,12}" value="<?php echo @$prenom?>"required><br><br>
        <input type="text" placeholder="Username..." name="username" pattern="[a-zA-Z0-9]{3,12}+_-*@!#$%^&" value="<?php echo @$username?>"required><br><br>
        <input type="password" placeholder="Mot de passe..." name="pass" pattern="{8,15}" required><br><br>
        <input type="password" placeholder="Confirmer le mot de passe..." pattern="{8,15}" name="repass" required><br><br>
        <button type="submit"  name="valider">Créer mon compte</button><br>
        </form>
        <form name="for" action="connexion.php">
        <button type="submit" >se connecter</button><br>
        </form>
    </div> 
    
</body>
</html>
<!--// div=respensive-->