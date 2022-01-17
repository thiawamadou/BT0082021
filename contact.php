<!--
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <title>Formulaire de création de compte</title>
    <meta charset="UTF-8">   
    <link rel="stylesheet" type="text/css" href="Sanstitre-2.css">
    <link rel="stylesheet" type="text/css" href="css/inscription.css">
    <link rel="icon" href="img/logoISENS1.PNG">
    <style>
 body {
    /* On met en place le fond d'écran */
    background-image:url(img/img.jpg);
    background-repeat: no-repeat;
    background-size: 100% 100%;
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
        fieldset{
    margin-right: 90px;
    margin-left: 90px;
    margin-top: auto;
    background-color: aquamarine;
}
legend{
    padding: 0px 3px;
    font-weight: bold;
    font-variant: small-caps;
}
li{
    list-style: none;
}
em{
    color: red;
}
label{
    width: 110px;
    display: inline-block;
    vertical-align: top;
    margin: 6px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
input:focus {
    background: #eaeaea;
}
input,select, textarea{
    width: 260px;
}
input,select{
    height:25px;
}
input#click{
    font-weight: 800;
    width: 100px;
}
input#click:hover{
    background-color: blue;
    color: red;
}
    </style>

</head>
<body>
    <h1> Formulaire de contact</h1>
   <p> Les champs marqué par <em>*</em> sont <em>obligatoire</em></p>
  <fieldset>
      <legend>Furmulaire de contact de l'équipe</legend>
    <form>
        <ul>
        <li>            
        <label for="name">Nom <em>*</em>:</label>
        <input type="text" id="name" name="name" required 
           minlength="0" maxlength="100" size="10">
        </li><br>
        <li>           
        <label for="fulname">Prénom <em>*</em>:</label>
        <input type="text" id="fulname" name="fulname" required 
           minlength="0" maxlength="100" size="10">
        </li><br>
        <li>
        <label for="sexe">Sexe:</label>
        <select name="m_sexe" id="sex">
        <option value="fem">Femme</option>
        <option value="mas">Masculin</option>
        </select>
        </li><br>
        <li>
        <label for="email">Email <em>*</em>:</label>
        <input type="email" name="m_email" autocomplete="off">
        </li><br>
        <li>
        <label for="m_portable">Niveau:</label>
        <input type="text" name="m_portab" autocomplete="off">
        </li><br>
        <li>
        <label for="meeting-time">Date:</label>
        <input type="date" id="meeting" name="meeting"
                min="01/01/2010" max="31/01/2021" value="20/10/2021">
        </li><br>
        
        <li>
        <label for="Comment">Commentaire:</label>
        <textarea id="Comment" name="Comment" rows="5" cols="33"> Faite un comentaire ...</textarea>
        </li><br>
        <li>
        <input id="click" type="submit" value="Envoyer"></input>
        <button id="click"> <a href="index.php">Retour </a></button>
        </li>
        </ul>  
    </form>
    </fieldset>
</body>
</html>
-->
<?php include('header.php');?>
<!DOCTYPE html>
<html>
<title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<form action="/action_page.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<h2 class="w3-center">Contactez-nous </h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="first" type="text" placeholder="Nom">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="last" type="text" placeholder="Prenom">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" type="text" placeholder="N° Téléphone">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="message" type="text" placeholder="Message">
    </div>
</div>

<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple"> Envoyer</button>
</p>
</form>

</body>
<?php include('footer.php');?>
</html> 