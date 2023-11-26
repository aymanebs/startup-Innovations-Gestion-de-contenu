<?php

require '../connection.php';
$id=$_GET['id'];
$requete="DELETE FROM services WHERE id=$id";
$query=mysqli_query($connection,$requete);
if(isset($requete)){
    echo"supprime avec succes";
    header("location:./provided.php");

}


?>