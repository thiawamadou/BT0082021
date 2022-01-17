
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<?php
include('connect/connect.php');
if(isset($_SESSION['username'])){
    session_destroy();
    echo"<div class='alert alert-danger' role='alert'>
    Vous êtes déconnecter avec succés! </div>";
    // redirection vers la page login
    header('Refresh:4;url="logIn.php"');
    }else {
        header('Location: Login.php');
        echo"<div class='alert alert-danger' role='alert'>
    Vous êtes déja déconnecter avec succés! </div>";
    }

?>
<?php require_once('footer.php');?> 
</body>
</html>