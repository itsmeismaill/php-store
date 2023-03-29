<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
    <link rel="stylesheet" href="main.css">
    
</head>
<body>
    <form name="forma" action="validation_ajout.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <h2>Ajouter un produit</h2>
        <input type="text" placeholder="Nom du produit..." name="nproduit" required><br><br>
        <input type="number" placeholder="Prix en MAD" step="0.1" name="prix"  required><br><br>
        <input type="file" placeholder="Ajouter la Photo..." name="photo" id="photo" required><br><br>
        <button type="submit"  name="Ajouter">Ajouter</button><br>
        </form>
        <form name="for" action="page.php">
        <button type="submit" >Retour</button><br>
        </form>
    </div> 
    
</body>
</html>