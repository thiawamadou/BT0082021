<?php include('connect/connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <title>ProjetBootcamp</title>
    <style>
      .header {
        overflow: hidden;
        background-color: #C3C5C8;
        padding: 5px 3px;
      }

/* Style the header links */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}
.header a {
        float: left;
        color: #F6F8FC;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
      }

.header a:hover {
  background-color: blue;
  color: #ffff00;
  transition: 0.7s;
  text-decoration: none;
}

.header a.active {
  background-color: dodgerblue;
  color: blue;
}

.header-right {
  float: right;
}
 /** Responsive screen */
@media screen and (max-width: 400px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
    </style>
</head>
<body>

<div class="header">
<a class="fa fa-home" href="<?= RACINE_SITE;?>index.php"  class="logo">Home</a>

  <div class="header-right">
  <a href="<?= RACINE_SITE;?>SignIn.php">Inscription</a>
  <a href="<?= RACINE_SITE;?>profil.php">Mon profile</a>
  <a href="<?= RACINE_SITE;?>logout.php">Deconnecxion</a></li>
  </div>
</div>
</body>
</html>

    
