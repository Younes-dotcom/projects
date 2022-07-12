<?php include 'connexion.php'?>

<?php
if(mysqli_select_db($conn,$db)){ // selecting db
    if(isset($_POST['stagiaire_nom'])){
        if(isset($_POST['stagiaire_filiere'])){
            if(isset($_POST['stagiaire_birthdate'])){
                $name = $_POST['stagiaire_nom'];
                $filiere = $_POST['stagiaire_filiere'];
                $birthdate = $_POST['stagiaire_birthdate'];
                $sql = "INSERT INTO dev101(stagiaire_name,stagiaire_filiere,stagiaire_birthdate)VALUES('$name','$filiere','$birthdate')";
                $result = mysqli_query($conn,$sql);
                if(!$result){
                    echo ' error ';
                }
                
            }
        }
    }
}
?>