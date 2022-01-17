<?php
include("connect/connect.php");
//$id= $_SESSION['id'];
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id =$id";
//Préparez notre déclaration DELETE
$query = $pdo->prepare($sql);
$response = $query->execute();
if($response){
    // fermeture de la connexion
    header('location:index.php');
}else{
    echo 'erreur';
}
die();
?>