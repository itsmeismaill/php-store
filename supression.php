<?php
// Check if product id is set
if (isset($_GET['idp'])) {
    $id=$_GET['idp'];
    $cnx = mysqli_connect("localhost","root","","projetphp") or die ("erreur");
    $query="DELETE FROM produit WHERE idp=$id";
    mysqli_query($cnx,$query) or die ('erreur :' .mysql_error());
    // $image_path=$_GET['image'];
    // unlink($image_path);
header('Location:store.php');
 exit;
}

?>