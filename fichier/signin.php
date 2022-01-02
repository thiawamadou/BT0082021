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


$sql = "INSERT INTO users(id, pseudo, mdp, nom, prenom, email, ville ) VALUES(':id','$pseudo','$mdp', '$nom', '$prenom', '$email','$ville')";
$stmt= $pdo->prepare($sql);

 try {

    // si l'utlisateur arvient a s'inscrire -> redirection vers login
    $stmt->execute();
    echo("ajout avec success");
  header('location:../LogIn.php');
} catch (\Throwable $th) {
    //throw $th;
    echo 'erreur ' . $th;
}

?>