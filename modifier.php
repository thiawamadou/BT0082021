<?php
require('connect/connect.php');
require 'header.php';
$id = $_GET['id'];

if (isset($_POST['pseudo']) && isset($_POST['nom'])  && isset($_POST['prenom']) && isset($_POST['email'])) {
    $username=$_POST['pseudo'];
    //$mdp = $_POST['mdp'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $sql = 'UPDATE users SET pseudo=:pseudo, nom=:nom, prenom=:prenom, email=:email WHERE id=:id';

    $preparation = $pdo->prepare($sql);

    if ($preparation->execute([':barcode' => $id,':pseudo'=>$username, ':nom' => $nom, ':prenom' => $prenom, ':email' => $email])) {
        header("location: index.php");
        }
    }
?>
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
    

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Mettre à jour client</h2>

        </div>
        <div class="card-body">
            <?php  if (!empty($message)): ?>

                <div class="alert alert-success">
                    <?= $message; ?>
                </div>
            <?php endif; ?>

            <form action="" method="post">
            <div class="form-group">
                    <label for="id">Pseudo</label>
                    <input type="text" name="barcode" id="pseudo" class="form-control">
                </div>
        
                <div class="form-group">
                    <label for="prenom">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="patente">Prénom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image">Adresse Email</label>
                    <input type="email" name="email" id="email" class="form-control"><br>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Metre à jour</button><br>
                    <p> Je conserve mes infos <a href="index.php"> voir la liste des utilisateurs</a></p>
                </div>
            </form>
            

        </div>
    </div>

</div>

</body>
</html>