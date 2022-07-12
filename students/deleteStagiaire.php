<?php include 'connexion.php'?>


<?php
if(mysqli_select_db($conn,$db)){
    $id = $_GET['id'];
    $sql = "DELETE FROM dev101 WHERE stagiaire_id = $id";
    $result = mysqli_query($conn,$sql);
}

?>