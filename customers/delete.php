<?php

require '../connection.php';
$id=$_GET['id'];
$requete="DELETE FROM utilisateurs WHERE id=$id";
$query=mysqli_query($connection,$requete);
if(isset($requete)){
    echo"utilisateur supprime";
    header("location:./index.php");

}


?>