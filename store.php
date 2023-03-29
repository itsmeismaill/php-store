<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Store</title>
        <style>
        </style>
        <link rel="stylesheet" href="deco.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
          .container .card  {
            justify-content: center;
            display: grid;
          }

          p, h1, h2, h3, h4, h5, h6 {
            cursor: auto;
            user-select: text !important;
            justify-content: center;
            display: grid;
        }

        body, div, a, p, span {
            user-select: text !important;
            justify-content: center;
            display: grid;
        }


        </style>
      </head>
    <body>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col-md-8">
<?php
session_start();
$id=$_SESSION['id'];
 $username=$_SESSION['username'];
 $cnx = mysqli_connect("localhost","root","","projetphp") or die ("erreur");
 $result=mysqli_query($cnx,"SELECT * FROM produit where id=$id" );
$produits=mysqli_fetch_all($result);
foreach ($produits as $produit)
   {
       echo '<div class="card mb-3 " style="max-width: 540px;">
       <div class="row g-0">
     <div class="col-md-4">
       <img height=200px value='.$produit[4].' name="image" src=./'.$produit[4].' class="img-fluid rounded-start">
       </div>
       <div class="col-md-8">
       <div class="card-body">
         <h5 class="card-title">'.$produit[2].'</h5>
         <p class="card-text"><small class="text-muted">'.$produit[3].' DH</small></p>
         <a href="supression.php?idp='.$produit[1].'">supprimer</a><br>
       </div>
     </div>
   </div>
   </div>';
 echo ' </div>
 <div class="col-md-2"></div>
 </div>';
 
}
 // }
 ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>













