<?php
    include('connect/connect.php');
    try {
        $requete = $db->prepare("UPDATE user SET nom = ?, prenom = ?, 
        pattente=?, telephone = ? WHERE id = ?");
         // $requete->execute(array("","Khayati","Alya","Paris","377777"));
        $requete->execute(array($_POST['id'],$_POST['nom'],$_POST['prenom'],
        $_POST['pattente'],$_POST['telephone']));
       
    } catch (\Throwable $th) {
        echo "Erreur de modification" .$th->getMessage() .$th->getLine();
    }
    
?>