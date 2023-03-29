<?php
if(isset($_POST["connecter"])){
 $username=$_POST["username"];
$password=$_POST["pass"];
session_start();
$con = mysqli_connect('localhost', 'root', '', 'projetphp');
$_SESSION['username'] =$username;
 $result=mysqli_query($con,"SELECT id from users WHERE username='$username'");
//  echo "SELECT id from users WHERE username='$username'";
// print_r($result);
$_SESSION['id']=mysqli_fetch_array($result)[0];

$query="SELECT * FROM users WHERE username='$username' && password='$password'";   
if(mysqli_num_rows(mysqli_query($con,$query))>0){
   header(" Location: page.php");
}
else echo"username ou mot de passe incorrect";
}


?>
         