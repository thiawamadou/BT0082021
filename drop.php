<?php
require_once("connect/connect.php");
$id= $_SESSION['id'];

$sql = "DELETE FROM `users` WHERE id =$id";

//Préparez notre déclaration DELETE
$stmt = $pdo->prepare($sql);
//Le nom que nous souhaitons supprimer de notre table 'users'
//Liez la variable $name au paramètre :name
//Exécuter notre instruction DELETE

$res = $stmt->execute();
if($res){
    // fermeture de la connexion
   
    header('location:LogIn.php');
}else{
    echo 'erreur';
}

die();
?>