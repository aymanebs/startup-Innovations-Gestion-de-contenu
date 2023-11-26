<?php

require '../connection.php';
$id=$_GET['id'];
$requete="DELETE FROM developers WHERE id=$id";
$query=mysqli_query($connection,$requete);
if(isset($requete)){
    echo"supprime avec succes";

}


?>