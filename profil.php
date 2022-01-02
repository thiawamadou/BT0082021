<?php
//include('connect/connect.php');
require_once('header.php');
if(!isset($_SESSION['username'])){
    header('location:LogIn.php');
}
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        
/*****  tableau et contenu */


body{
    background-color: #94979B;
}
.container {  display: grid;
  grid-template-columns: 0.1fr 2fr;
  grid-template-rows: 3.4fr 0.5fr ;
  grid-auto-columns: 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    ". gloable"
    ". ."
    ". .";
}

.gloable {  display: grid;
  grid-template-columns: 1fr 0.1fr ;
  grid-template-rows: 1fr 1.1fr ;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    "title title"
    "content content ";
  grid-area: gloable;
}

.title {  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    "photo inf inf"
    "photo inf inf"
    "photo inf inf";
  grid-area: title;
}

.photo { grid-area: photo; }

.inf { grid-area: inf; }

.content { 
    display: grid;
  grid-template-columns: 1fr  ;
  grid-template-rows: 1fr 1fr ;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    "table table table"
    ;
  grid-area: content;
}

.table { grid-area: table; }

.footer { grid-area: footer; }


/** Tableau */

table{
    border: 5px solid black;
    margin :25px auto;
    padding: 5px;
    width: 950px;
}

th{
    border: 1px solid black;
    padding-top: 0px;

}

td{
    border: 1px solid black;

}
</style>
    </head>
    <body>
    <div class="container">
  <div class="gloable">
        <div class="title">
            <div class="photo">
                     <img src="https://img.icons8.com/ios-glyphs/30/000000/user--v1.png" width="150px" height="200px"/>

             </div>
        <div class="inf">
                <h1 class="alert-success">Bienvenue <?= $_SESSION['pseudo'] ;?> </h1>

                <p> <br> Voici vos information personnel</p>
        </div>
        </div>
    
    <div class="content" >
  <table>
    <tr>
        <th>Id</th>
        <th>Pseudo</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Ville</th>
    </tr>
    <tr>
        <td><?= $_SESSION['id'] ;?></td>
        <td><?= $_SESSION['pseudo'] ;?></td>
        <td><?= $_SESSION['username'] ;?></td>
        <td><?= $_SESSION['nom'] ;?></td>
        <td><?= $_SESSION['email'] ;?></td>
        <td><?= $_SESSION['ville'] ;?></td>
    </tr>
  </table>
</div>
    <div>

   <a href="<?= RACINE_SITE;?>resetPassword.php"><input type="button" value="Mot de passe oublier?">
           
            </a>
    <a href="<?= RACINE_SITE;?>drop.php"><input type="button" value="Log out" ></a>
    </div>
    </div>
  </div>
</div>
  
   
    
<?php 
include_once('footer.php');
?>