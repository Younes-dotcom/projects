<?php 
include 'connexion.php';
if(!$conn){
   die(mysqli_connect_error()) ;
}else{
    // creating db
    $sql = "CREATE DATABASE IF NOT EXISTS " . "$db" ;
    $result = mysqli_query($conn,$sql);
    if($result) echo 'databasde created';
    // creating table
}
?>