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
    <title>Acceuil</title>
    <link rel="icon" href="img/img1.jpeg">
    <link rel="stylesheet" href="stylee.css" >
     <style>
body {
    /* On met en place le fond d'écran */
    background-image:url(img/img9.png); background-repeat: no-repeat; background-size: cover;min-height: 100%; min-width: 1024px;
    /* On indique un redimensionnement proportionnel */
    width: 100%; height: auto;
    /* L'image est positionnée en haut à gauche */
    position: relative; top: 0; left: 0;
   }
   @media screen and (max-width: 1024px) { /* Le traitement est ici spécifique à l'image */
    body {left: 50%; margin-left: -512px; /* 50% */ }
}
/*
.container {  display: grid; grid-template-columns: 0.1fr 3fr; grid-template-rows: 3.4fr 0.5fr ;
  gap: 0px 0px; grid-auto-flow: row; grid-template-areas:". gloable" ". .";
}
*/
.gloable {  display: grid; grid-template-columns: 1fr 1fr ;grid-template-rows: 1fr 1.5fr;
  gap: 0px 0px;grid-auto-flow: row; grid-template-areas: "title title title" "content content content";
  grid-area: gloable; overflow: hidden;
}

.title { grid-area: title; }
.content { grid-area: content; }

/** Tableau */
table{ background: #cbd0d1; border: 5px solid black; margin :25px auto; padding: 5px; width: 950px; }
th{ border: 1px solid black; padding-top: 0px; background: #827f7c; }
td{ border: 1px solid black; }
td.tdNonBorber{border: 0px}

</style> 
</head>
<body>
<form class="header-center" action = "verif-form.php" method = "get">
  <div >
    <input type="search" id="maRecherche" name="q"
    placeholder="Rechercher sur le site…" size="30">
    <button type = "submit" name = "s">Rechercher</button>
  </div>
</form>
<div class="container">
  <div class="gloable">
      <div class="content">
      <div class="title"><h3>Liste des utlisateur</h3></div>
      <table id="tableau">
      <tr>
      <th>ID</th>
      <th>Pseudo</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Email</th>
      <th colspan="3">Action</th>
      <th></th>
      </th>
      <?php foreach($row as $i){ ?>
      <tbody>
      <td><?= $i['id'];?></td>
      <td><?= $i['pseudo'];?></td>
      <td><?= $i['nom'];?></td>
      <td><?= $i['prenom'];?></td>
      <td><?= $i['email'];?></td>
      <td class="tdNonBorber" >
      <a class="btn btn-info btn-lg" href="modifier.php?id=<?= $i['id']?>">
          <i class="fa fa-pencil"></i></a>
      </td>
      <td class="tdNonBorber">
          <a class="btn btn-danger btn-lg" href="drop.php?id=<?= $i['id']?>">
          <i class="fa fa-trash"></i></a></td>
    <!--  <td>
      <a class="btn btn-secondary btn-lg" href="detail.php?id=<?= $i['id']?>" >
          <i class="fa fa-eye"></i></a></td>
      </td>-->
    </tr>
      </tbody>
      <?php } ?>
      </tr>
      </table>
      </div>
    </div>
  </div>
</div>
  </body>

  <?php require_once('footer.php');?>    

  </html>
   