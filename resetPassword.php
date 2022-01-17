<?php
require_once('header.php');
// connecxion a la base de donne
require_once "connect/connect.php";
// Define et initialise les variables avec des valeurs vide
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// verificatication du formulaire rempli
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // verification du nouveau password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Entrer le nouveau mot de passe.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Le mot de passe ne peut pas contenir moin de 6 caractères.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // confirmation password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "<div class='alert alert-danger' role='alert'> 
                <strong>Veuillez confirmer votre mot de passe</strong>
                </div>";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "<div class='alert alert-danger' role='alert'> 
            <strong color='red'>Votre mot de passe ne correspond pas!!!</strong>
            </div>";
        }
    }
        
    // Verification si les variables contenant les erreurs sont vide avant de proceder a la mise a jour vers la base de donnee
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET mdp = :password WHERE id = :id";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
            
            // Set parameters
            $param_password =$new_password;
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                echo("<div class='alert alert-success' role='alert'>
                    <p>Vous avez modifié votre mot de passe avec succés  </p><hr>
                    <p class='mb-0'>
                        <a href='../Login.php'>Connecter</a> pour acceder à votre compte'
                    </p>
                </div>");
                header('Refresh:6;url="logIn.php"');
                //header("location: logIn.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; 
    /* On met en place le fond d'écran */
    /*background-color: #67be4b;*/
    background-image:url(img/img9.png);
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 100%;
    min-width: 1024px;
    /* On indique un redimensionnement proportionnel */
    width: 100%;
    height: auto;
        /* L'image est positionnée en haut à gauche */
        position: relative;
        top: 0;
        left: 0;
   }
   @media screen and (max-width: 1024px) { /* Le traitement est ici spécifique à l'image */
    body {
    left: 50%;
    margin-left: -512px; /* 50% */
    }
   }

        .wrapper{ width: 35%; padding: 4%; border-radius: 6px; border: 2px solid blue; float: center; background:white;
            box-shadow: 0 0 20px #51555c width: 400px; margin: 0 auto;  text-align: center; margin-top: 4%; margin-bottom: 4%
        }

/****************************** */
#left-input{
    float: left;
}
 
form p { position: relative; }

input {
  width: 250px;
  
  margin-bottom: 5px;
  border: 1px solid #cccccc;
  border-bottom-color: #fff;
  border-right-color: #fff;
  border-radius: 4px;
  background: #e3e3e3;
  color: #888;
}

     
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Modifcation de mot de passe</h2>
        <p>S'il vous plait utiliser ce formulaire pour modifier votre mot de passe.</p>
        <form action="#" method="post"> 
      <!--
        <div class="form-group">
                <label>Votre adresse email</label>
                <input type="email" name="adress_mail" class="form-control border border-primary <?php echo (!empty($adress_mail)) ? 'is-invalid' : ''; ?>" value="<?php echo $adress_mail; ?>">
                <span class="invalid-feedback"><?php //echo $adress_mail; ?></span>
            </div>
-->
            <div class="form-group">
                <label>Nouveau mot de passe</label>
                <input type="password" name="new_password"  id="motdepasse" class="form-control border border-primary <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <input  id="left-input" type="checkbox" onclick="Afficher()"> Afficher le mot de passe
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirmer votre mot de passe</label>
                <input type="password" name="confirm_password" id="motdepasse_conf" class="form-control border border-primary <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <input id="left-input"  type="checkbox" onclick="Afficher()"> Afficher le mot de passe
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Modifier">
                <a class="btn btn-danger ml-2" href="index.php">Cancel</a>
            </div>
        </form>
    </div>  
<script>
function Afficher()
{ 
var input = document.getElementById("motdepasse"); 
if (input.type === "password" )
{ 
input.type = "text"; 
} 
else
{ 
input.type = "password".
} 
} 
</script>
</body>
</html>
<?php require_once('footer.php');?> 