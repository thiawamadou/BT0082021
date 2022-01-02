<?php 
//require('header.php');
require("./connect/connect.php");
/* echo "<pre>";
print_r($_POST);
echo "</pre>";

//On insert les donné des post dans un tableau pour la fonction ci dessous
$values= [
    'id' => '',
    'pseudo' => $_POST['pseudo'],
    'mdp' => $_POST['passwords'],
    'prenom' => $_POST['prenom'],
    'nom' => $_POST['nom'],
    'email' => $_POST['email'],
    'ville' => $_POST['ville'],

];

//On initialise des erreurs
$errors = [];

/*CONDITIONS*/
//Si le username est vide ou qu'il contient des charactère spéciaux
/*if(empty($_POST['pseudo']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['pseudo'])){
    $errors['pseudo'] = "votre pseudo n'est pas valide (Alphanumérique)";
}
//Si l'adresse mail est vide ou invalide
if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Votre email n'est pas valide";
}
//Si le mot de passe est vide ou différent l'un l'autre
if(empty($_POST['passwords']) || $_POST['passwords'] != $_POST['password_confirm']){
    $errors['passwords'] = "Vous devez rentrer un mot de passe valide";
}

//Si aucune erreur n'et detecté
if(empty($errors)){

    //Liste des champs & value
    $tmp_fields = '';
    $tmp_value = '';

    //on parcourt le tableau contenant ce qui à été posté
    foreach($values as $paramName => $paramValue){
        //Si le champ n'est pas vide
        if(!empty($paramValue)){
            //tmp_field donnera un string: "username email password"
            $tmp_fields .= $paramName;
            //tmp_value donnera un string: ":username :email :password"
            $tmp_value .= ':'.$paramValue;
        }
    }

    //On insert les virgule entre charque mot "username, email, password"
    $tmp_fields = rtrim($tmp_fields,', ');
    $tmp_value = rtrim($tmp_value,', ');

    $tmp_query = "INSERT INTO users (id, pseudo, mdp, nom, prenom, email, civilite , ville ) VALUES ('NULL, $pseudo, $mdp, $nom, $prenom, $email, $ville')";
    //le tmp_query affichera "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)"
    //echo $tmp_query

    //Préparation de la requête
    $tmp_result = $pdo->prepare($tmp_query);
    $tmp_result->execute();
} */

    /* //Personnaliser chaque champ avec les valeurs
    foreach($values as $paramName => $paramValue){
        //Si le champ n'est pas le premier (id), qui est un n° Auto
        if(($paramName == 'id')){
            //Si le champ n'est pas vide
            if(!empty($paramValue)){
                //si le champs est un integer
                if(is_int($paramValue))
                    $param = PDO::PARAM_INT;
                //si le champs est un boolean
                elseif(is_bool($paramValue))
                    $param = PDO::PARAM_BOOL;
                //si le champs est un NULL
                elseif(is_null($paramValue))
                    $param = PDO::PARAM_NULL;
                //si le champs est un string
                elseif(is_string($paramValue))
                    $param = PDO::PARAM_STR;
                //sinon
                else
                    $param = FALSE;

                //Associe une VALEUR à ce CHAMP
                //ex: username donnera: $tmp_result->bindValue(':username', "Joe", PDO::PARAM_STR);
                $tmp_result->bindValue(':'.$paramName, $paramValue, $param);
            }
        }
    }
     if($tmp_result->execute()){
        echo "Succes";
    }else{
        echo "une erreur est survenue l'ors de l'insertion";
    }
}
//Si au moins une erreurs est detecté ont affiche les erreurs
else{
    echo "<pre>";
    print_r($errors);
    echo "</pre>";
} */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
        


    
        <div class="container">
            
                <form action="fichier/signin.php" method="post">
                    <h1>Creation de compte</h1>
                    <label for="pseudo">Pseudo</label><br>
                     <input type="text" id="pseudo" name="pseudo" maxlength="20" placeholder="votre pseudo"required="required">
                    <label for=""> Nom :</label>
                    <input type="text" name="nom" id="nom"> <br><br>
                    <label for=""> prenom :</label>
                    <input type="text" name="prenom" id="prenom"> <br><br>
                    <label for="">Email :</label>
                    <input type="text" name="email" id="email"> <br><br>
                    <label for="">Mot de Passe :</label>
                 <input type="password" name="passwords" id="password"> <br><br>
                 <label for="repeatpassword">repeatpassword :</label>
                    <input type="password" name="password_confirm"><br/>
            
                     <label for="ville">Ville</label><br>
                    <input type="text" id="ville" name="ville" placeholder="votre ville" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_."><br><br> 
                    <input type="submit" value="S'inscrire">
                </form>
            
        </div>
    </section>
   <!--  <footer>
        <p>footer</p>
        <p><a href="#">deconnection</a></p>
    </footer> -->
</body>
</html>