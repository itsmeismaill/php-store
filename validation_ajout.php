<?php

if(isset($_POST['Ajouter'])){
   session_start();
// print_r($_SESSION);
   $id=$_SESSION['id']; 
   $username=$_SESSION['username'];
    $target_dir = $username."/images";
    $target_file = $target_dir . str_replace(" ","_",basename($_FILES["photo"]["name"]));
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //maj
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
  
    $nproduit=$_POST["nproduit"];
    $prix=$_POST["prix"];
    $photo= $target_file;
    
    echo $id;
    echo $prix;
    echo $nproduit;
    echo $photo;
    $cnx = mysqli_connect("localhost","root","","projetphp") or die ("erreur");
    // mysqli_select_db("projetphp") or die ("la bd est introuvbable");
    $query="INSERT INTO produit (id,nomproduit,prix,image) VALUES ('$id','$nproduit','$prix','$photo')";
    // echo $query;
    // $query='INSERT INTO produit (id,nomproduit,prix,image) VALUES ("'.$id.'","'.$nproduit.'","'.$prix.'","'.$photo.'")';
    mysqli_query($cnx,$query) or die ('erreur :' .mysql_error());
    
     echo "OK!";
     header("Location:store.php");


}

?>