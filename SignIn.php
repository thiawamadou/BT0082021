<?php 
//require('header.php');
require("./connect/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- <link rel="stylesheet" href="style.css">-->
    <style>
.box {
    border: 1px solid #c4c4c4;
    padding: 30px 25px 10px 25px;
    background: white;
    margin: 30px auto;
    width: 400px;
    box-shadow: 0 0 20px 0 ; 
  }
  h1.box-logo a {
    text-decoration:none;
  }
  h1.box-title {
    color: #AEAEAE;
    background: #f8f8f8;
    font-weight: 300;
    padding: 15px 25px;
    line-height: 30px;
    font-size: 25px;
    text-align:center;
    margin: -27px -26px 26px;
  }
  .box-button {
    border-radius: 5px;
    background: #1449db;
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
    width: 390px;
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
    </style>

</head>
<body>
<section>
<div class="container">
<h1 class="box-logo box-title"><a href="#"> Creation de compte Bootcamp PSEJ</a></h1>
<h1 class="box-title">S'inscrire</h1>
<form class="box" action="fichier/signin.php" method="post">
<input type="text" class="box-input" name="pseudo" maxlength="20" placeholder="votre pseudo"required="required">
<input type="text" name="nom" class="box-input" placeholder="votre Nom" required> <br><br>
<input type="text" name="prenom" class="box-input" placeholder="votre prénom" required> <br><br>
<input type="text" name="email" class="box-input" placeholder="adresse mail" required> <br><br>
<input type="password" name="passwords" class="box-input" placeholder="mot de passe" required> <br><br>
<input type="password" name="password_confirm" class="box-input" placeholder="Confirmer votre mot de passe" required><br/>
<input type="text" class="box-input" name="ville" placeholder="votre ville" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_."><br><br> 
<input type="submit" class="box-button" value="S'inscrire">
<p class="box-register">Déjà inscrit? <a href="LogIn.php">Connectez-vous ici</a></p>

</form>
</div>
</section>
   <!--  <footer>
        <p>footer</p>
        <p><a href="#">deconnection</a></p>
    </footer> -->
</body>
</html>