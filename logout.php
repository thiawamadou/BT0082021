<?php
include('connect/connect.php');
if(isset($_SESSION['username'])){
    session_destroy();
    echo"Log out Successul";
    // redirection vers la page login
    header('Refresh:2;url="logIn.php"');
    }else {
        header('Location:../profile.php');
    }

?>