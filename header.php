<?php include('connect/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
  .header {
  overflow: hidden;
  background-color: #C3C5C8;
  padding: 20px 10px;
}

/* Style the header links */
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

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}


.header-right {
  float: right;
}
 /** Responsive screen */
@media screen and (max-width: 500px) {
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
<a href="<?= RACINE_SITE;?>index.php"  class="logo">Home</a>
  <div class="header-right">
  <a href="<?= RACINE_SITE;?>SignIn.php">Inscription</a>
  <a href="<?= RACINE_SITE;?>profil.php">Mon profile</a>
  <a href="<?= RACINE_SITE;?>logout.php">Deconnecxion</a></li>
  </div>
</div>
   
        
    
