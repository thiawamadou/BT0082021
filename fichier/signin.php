<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<?php
include_once('../connect/connect.php');
/*INITIALISATION*/
if($_POST){
$id = null;
$pseudo= $_POST['pseudo'];
$mdp= $_POST['passwords'];
$prenom= $_POST['prenom'];
$nom = $_POST['nom'];
$email= $_POST['email'];
//$ville = $_POST['ville'];

  $verif_caractere = preg_match('/^[A-Za-z][A-Za-z0-9]*(?:_+[A-Za-z0-9]+)*$/', $_POST['pseudo']);
  if(!$verif_caractere && (strlen($_POST['pseudo']) < 1 || strlen($_POST['pseudo']) > 20) ){
    echo "<div class='erreur'>Le pseudo doit contenir entre 1 et 20 caractères. <br>
  Caractère accepté : Lettre de A à Z et chiffre de 0 à 9</div>";
  }
  $stmt = $pdo->prepare("SELECT * FROM users WHERE pseudo=?");
  $stmt->execute([$pseudo]); 
  $user = $stmt->fetch();
  if ($user) {
    echo  " <div class='alert alert-dange' role='alert'>Ce nom d'utilisateur existe déjà 
      <strong> Veuillez s'il vous plait utiliser un autre nom d'utilisateur</strong></div>";
    header('Refresh:2;url="../SignIn.php"');
} else {
  $sql = "INSERT INTO users(id, pseudo, mdp, nom, prenom, email) 
  VALUES(':id','$pseudo', '$mdp', '$nom', '$prenom', '$email')";
  $stmt= $pdo->prepare($sql);
    // si l'utlisateur arvient a s'inscrire -> redirection vers login
  $stmt->execute();
  echo("<div class='alert alert-success' role='alert'>
          <h4 class='alert-heading'>Bien venu!</h4>
          <p>
            Vous avez créé un compte avec succés 
           <strong> Le psej vous souhaite le bienvenu.</strong>
          </p><hr>
          <p class='mb-0'>
            Assurez-vous que vous n'avez pas oublier votre nom d'utilisateur
            et mot de passe. <a href='../Login.php'>Connecter</a> pour acceder à votre compte'
          </p>
      </div>");
  header('Refresh:8;url="../Login.php"');
} 
}
?>
</body>
</html>