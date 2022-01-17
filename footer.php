<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/styleFooter.css">
</head>

<body>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>A propos de nous</h3>
                        <ul>
                            <li><a href="contact.php">nous-contactez</a></li>
                            <li><a href="#">Nos partenaire</a></li>
                            <li><a href="#">Nos agents</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Navigation</h3>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="SignIn.php">Inscription</a></li>
                            <li><a href="Login.php">Connexion</a></li>
                            <li><a href="profil.php">Mon profil</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Quelques auteurs</h3>
                        <ul>
                        <li><a href="#">Africain</a></li>
                        <li><a href="#">Français</a></li>
                        <li><a href="#">Americain</a></li>
                        </ul> 
                    </div>
                    
                    <div class="col item social">
                        <a href="https://mobile.facebook.com/?locale2=fr_FR&_rdc=1&_rdr&refsrc=deprecated" target="_blank"><i class="icon ion-social-facebook"></i></a>
                        <a href="https://twitter.com/i/flow/login" target="_blank"><i class="icon ion-social-twitter" ></i></a>
                        <a href="#" target="_blank"><i class="icon ion-social-snapchat" ></i></a>
                        <a href="https://www.instagram.com/accounts/login/" target="_blank" > <i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright"> Copyrith © 2018 direct created by Amadou &amp; Moctar</p>
            </div>
        </footer>
        <div>
            <a href="<?= RACINE_SITE;?>resetPassword.php"><input type="button" class='passwordoublier' value="Mot de passe oublier?"></a>
            <a href="<?= RACINE_SITE;?>logout.php"><input type="button" class='input-drop' value="Deconnexion" ></a>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>