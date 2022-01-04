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

$id = null;
$pseudo= $_POST['pseudo'];
$mdp= $_POST['passwords'];
$prenom= $_POST['prenom'];
$nom = $_POST['nom'];
$email= $_POST['email'];
$ville = $_POST['ville'];


$sql = "INSERT INTO users(id, pseudo, mdp, nom, prenom, email, ville ) 
        VALUES(':id','$pseudo', '".hash('sha256', $mdp)."', '$nom', '$prenom', '$email','$ville')";
$stmt= $pdo->prepare($sql);

 try {
    // si l'utlisateur arvient a s'inscrire -> redirection vers login
  $stmt->execute();
  echo("<div class='alert alert-success' role='alert'>
          <h4 class='alert-heading'>Bien venu!</h4>
          <p>
            Vous avez créé un compte avec succés 
            Merci d'etre compter parmi les membre du psej.
          </p><hr>
          <p class='mb-0'>
            Assurez-vous que vou n'avez pas oublier votre nom d'utilisateur
            et mot de passe. <a href='../Login.php'>Connecter</a> pour acceder à votre compte'
          </p>
      </div>");
  header('Refresh:20;url="../profil.php"');

} catch (\Throwable $th) {
    //throw $th;
    echo 'erreur ' . $th;
}

?>
</body>
</html>