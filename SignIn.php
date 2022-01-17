<?php 
require('header.php');
//require("./connect/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="icon" href="img/img1.jpeg">
   <!-- <link rel="stylesheet" href="style.css">-->
    <style>
body{
  background-image:url(img/bibliotec.jpg);
  /*background-image:url(img/img5.png);*/
    background-repeat: no-repeat;
    background-size: 100% 100%;
    min-height: 100%;
    min-width: 1024px;
}
.box {
 
    border: 1px solid #c4c4c4;
    padding: 30px 25px 10px 25px;
    background: #7e8085 ;
    
    margin: 30px auto;
    width: 400px;
    box-shadow: 0 0 40px 0 ; 
  }
  h1.box-logo a {
    text-decoration:none;
  }
  h1.box-title  {
    color: #AEAEAE;
    background: #f8f8f8;
    font-weight: 300;
    padding: 15px 25px;
    line-height: 30px;
    font-size: 25px;
    text-align:center;
    margin: -27px -26px 26px;
  }
  .box-title a{
    text-decoration: none;
  }
  .box-button {
    
    border-radius: 5px;
    background: #6088f8;
    text-align: center;
    cursor: pointer;
    font-size: 19px;
    width: 100%;
    height: 51px;
    padding: 0;
    color: #fff;
    border: 0;
    outline:0;
  }
  .box-register
  {
    text-align:center;
    margin-bottom:0px;
  }
  .box-register a
  {
    text-decoration:none;
    font-size:18px;
    color:#666;
  }
  .box-input {
    font-size: 14px;
    background: #fff;
    border: 1px solid #ddd;
    margin-bottom: 25px;
    padding-left:10px;
    border-radius: 5px;
    width: 95%;
    height: 50px;
  }
  .box-input:focus {
      outline: none;
      border-color:#5c7186;
  }
  .sucess{
    text-align: center;
    color: white;
  }
  .sucess a {
    text-decoration: none;
    color: #58aef7;
  }
  p.errorMessage {
      background-color: #e66262;
      border: #AA4502 1px solid;
      padding: 5px 10px;
      color: #FFFFFF;
      border-radius: 3px;
  }
  /* Boutton formulaire : submit */
input[type=submit] {
    background-color: #6088f8;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: #6088f8;
    border: 1px solid #6088f8;
}
input[type=submit].passwordoublier{
    background-color: chocolate;
}
    </style>

</head>
<body>
<section>
<div class="container">
<form class="box" action="fichier/signin.php" method="post">
<h1 class="box-logo box-title"><a href="#"> Creation de compte </a></h1>
<h1 class="box-title">S'inscrire / <a href="Login.php">Se connecter</a></h1>
<input type="text" class="box-input" name="pseudo" maxlength="20" placeholder="Nom d'utilisateur" pattern="[a-zA-Z0-9-_.]{3,20}" title="caractères acceptés: a-zA-Z0-9-_. compris entre 3-20 caratère ">
<input type="text" name="nom" class="box-input" placeholder="Nom" required> <br>
<input type="text" name="prenom" class="box-input" placeholder="Prénom" required> <br>
<input type="email" name="email" class="box-input" placeholder="Adresse mail" required> <br>
<input type="password" name="passwords" class="box-input" placeholder="Mot de passe" required> <br>
<!--<input type="password" name="password_confirm" class="box-input" placeholder="Confirmer votre mot de passe" required>-->
<!--<input type="text" class="box-input" name="ville" placeholder="Ville" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_.">-->
<input type="submit" class="box-button" value="S'inscrire">
<p class="box-register">Déjà inscrit? <a href="LogIn.php">Connectez-vous ici</a></p>

</form>
</div>
</section>

<?php require('footer.php');?> 
</body>
</html>