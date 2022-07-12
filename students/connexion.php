<?php
$servename = 'localhost';
$username = 'root';
$password = '';
$db = 'students';
$conn = mysqli_connect($servename,$username,$password);
if(!$conn){
    die(mysqli_connect_error());
}
?>