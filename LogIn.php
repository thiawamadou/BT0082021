<?php 
//require('header.php');
require_once('header.php');


// verificfication si le formulaire remplie par l'utilisateur n'est pas vide
if(!empty($_POST['pseudo']) && !empty($_POST['password'])) {
  // on recupere le formulaire emplie
    $username = $_POST['pseudo'];
    $password = $_POST['password'];
 // execution de la requete sql pour recuperer le username
    $select = $pdo->prepare("SELECT * FROM users WHERE pseudo = :username");
    $select->execute(array(
        ':username' => $username
    ));
    $row = $select->fetch();
    // recuperatioon du username et password de la bdd
    $true_password = $row['mdp'];
    $true_pseudo = $row['pseudo'];
 // teste de correspondance 
    if ($username == $true_pseudo && $password == $true_password) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['prenom'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['pseudo'] = $row['pseudo'];
        $_SESSION['nom'] = $row['nom'];
        $_SESSION['ville'] = $row['ville'];
        $_SESSION['admin'] = $row['admin'];



        
        // Si user et password correspond 
        if (isset($_SESSION['id'])) {
            header('Location: profil.php');
        } else {
            echo"erreur ";
        }
 
    } else {
        echo '<span class="alert alert-danger" role="alert">Identifiants incorrects</span>';
    }
 
 
} elseif(isset($_POST['submit'])) {
    echo '<span class="alert alert-danger" role="alert">Veuillez remplir les champs vides</span>';
    
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="contain">
    
<form action="#" class="login" method="post" >
<h1>Se Connecter</h1>
<input type="text" name="pseudo" id="log_email" placeholder="Votre nom d'utilisateur">
<input type="password" name="password" placeholder="Votre mot de passe">
<input type="submit"  name="submit" value="LogIn" >
<p class="box-register">Vous êtes nouveau ici? <a href="SignIn.php">S'inscrire</a></p>
</form>
</div>
</script>
</body>
</html>