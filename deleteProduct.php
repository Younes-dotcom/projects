<?php
include 'connexion.php';?>

<?php 

$ref = $_GET['ref'];
$sql = "DELETE FROM produit WHERE reference = '$ref'";
$result = mysqli_query($conn,$sql);
if($result){
    header("LOCATION:acceuil.php");

}else{
    mysqli_error($conn);
}

?>