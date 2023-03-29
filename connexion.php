<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form name="form" action="validationconnextion.php" method="post">
    <div class="container">
        <h2>Connectez vous</h2>
        <input type="text" placeholder="Username..."   name="username"  value="<?php echo @$username?>"required><br><br>
        <input type="password" placeholder="Mot de passe..." name="pass"required><br><br>
        <button type="submit" name="connecter">Se connecter</button><br>
    </div>
    </form>
</body>
</html>