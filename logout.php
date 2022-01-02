<?php
include('connect/connect.php');
if(isset($_SESSION['username'])){
    session_destroy();
    echo"<div class='alert alert-danger' role='alert'>
    Log out Successul! </div>";
    // redirection vers la page login
    header('Refresh:4;url="logIn.php"');
    }else {
        header('Location:../profile.php');
    }

?>