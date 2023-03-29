<?php

if(isset($_POST['valider'])){
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $username=$_POST["username"];
    $password=$_POST["pass"];
    $repassword=$_POST["repass"];
    session_start();
   
   
    mkdir($username);
    if ($password!=$repassword) {
        echo    "mots de passe non identiques";
        return;
    }
    else{
      // $_SESSION['nom'] =$nom;
      // $_SESSION['prenom'] =$prenom;
      // $_SESSION['username'] =$username;
       $cnx = mysqli_connect("localhost","root","","projetphp") or die ("erreur");
      //  $result=mysqli_query($cnx,"SELECT id from users WHERE username='$username'");
      //  $_SESSION['id']=mysqli_fetch_array($cox,$result)[0];

        // mysqli_select_db("projetphp") or die ("la bd est introuvbable");
        mysqli_query($cnx,'INSERT INTO users(nom,prenom,username,password) VALUES ("'.$nom.'","'.$prenom.'","'.$username.'","'.$password.'")') or die ('erreur :' .mysql_error());

        echo "OK!";
       header("Location: connexion.php");
    }
   
}

?>