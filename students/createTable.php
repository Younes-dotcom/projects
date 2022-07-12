<?php include 'connexion.php'?>
<?php
if(mysqli_select_db($conn,$db)){
    $sql  = "CREATE TABLE dev101(
        stagiaire_id INT AUTO_INCREMENT,
        stagiaire_name VARCHAR(40),
        stagiaire_filiere VARCHAR(40),
        stagiaire_birthdate DATE,
        PRIMARY KEY (stagiaire_id)
    )";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo 'table created';
    }else{
      echo 'impossible de creer un table' . mysqli_error($conn);
    }
}


?>