<?php
session_start();
/*define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'bootcamp');*/
// connection a la base de donnee
$contenu= "";
$user = "root";
$password = "";
try {
    $pdo = new pdo("mysql:host=localhost; dbname=bootcamp", $user, $password);
    //echo 'connexion etablie';
} catch (\Throwable $th) {
    echo"Erreur de connexion à la base de donnéé" .$th->getMessage()
        ."Verifier la ligne " .$th->getLine();
}
/*
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}*/
// racine du site 
define("RACINE_SITE","/bootcamp/Projet_Intermediaire_BootCamp2021/");


// --- super variables 
$contenu='';

//require_once('/fichier/function.php');
?>