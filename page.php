
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form>
        <div class="container">

            <button type="submit"  name="ajouter" formaction="ajouter.php">Ajouter un produit</button><br>
            <button type="submit"  name="produits" formaction="store.php">Voir la liste des produits</button><br>
            <button type="submit"  name="deconnecter" formaction="connexion.php">Se deconnecter</button><br>
            </form>
        </div> 
</body>
</html>
<?php
session_start();
$username= $_SESSION['username'];
echo "Bonjour $username, vous êtes toujours connecté.";
?>
<body>

</body>
</html>