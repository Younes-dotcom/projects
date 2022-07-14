<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'gestionproduit';

$conn = mysqli_connect($servername,$username,$password,$db);

if($conn){
   echo "connected!";
}else{
    die(mysqli_connect_error());
}