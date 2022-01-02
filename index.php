<?php
include('header.php');
if(!isset($_SESSION['username'])){
       
            header('location:LogIn.php');
        }
    $sql =$pdo->prepare("SELECT * FROM users");
    $sql->execute();
    $row = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
  <!-- Affichage de la liste des utilisateur-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">
     <style>
        body{
    background-color: #7f8182;
}
.container {  display: grid;
  grid-template-columns: 0.1fr 3fr;
  grid-template-rows: 3.4fr 0.5fr ;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    ". gloable"
    ". .";
}

.gloable {  display: grid;
  grid-template-columns: 1fr 1fr ;
  grid-template-rows: 1fr 1.5fr;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    "title title title"
    "content content content";
  grid-area: gloable;
  overflow: hidden;
}

.title { grid-area: title; }

.content { grid-area: content; }

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
    <div class="title"><h1>Liste des utlisateur</h1></div>
    <div class="content">
    <table id="tableau">
           <tr>
               <th>ID</th>
               <th>Nom</th>
               <th>Prenom</th>
               <th>Email</th>
               <th>Ville</th>
           </th>
           <?php foreach($row as $i){ ?>
           <tbody>
               <td><?= $i['id'];?></td>
               <td><?= $i['nom'];?></td>
               <td><?= $i['prenom'];?></td>
               <td><?= $i['email'];?></td>
               <td><?= $i['ville'];?></td>

           </tbody>
           <?php } ?>
           </tr>
    </table>
           </div>
  </div>
  </div></div>
 
    <?php
    require_once('footer.php');
   ?>
    
   