<?php include 'connexion.php'?>

<?php
if(mysqli_select_db($conn,$db)){ // selecting db
    if(isset($_POST['stagiaire_nom'])){
        if(isset($_POST['stagiaire_filiere'])){
            if(isset($_POST['stagiaire_birthdate'])){
                $id = $_GET['id'];
                $name = $_POST['stagiaire_nom'];
                $filiere = $_POST['stagiaire_filiere'];
                $birthdate = $_POST['stagiaire_birthdate'];
                $sql = "UPDATE dev101
                -- SET stagiaire_name = $name,  stagiaire_filiere = $filiere, stagiaire_brithdate = $birthdate
                SET stagiaire_name = '$name',  stagiaire_filiere = '$filiere', stagiaire_birthdate = '$birthdate'
                WHERE stagiaire_id = $id ";
                $result = mysqli_query($conn,$sql);
                if(!$result){
                    echo ' error ';
                }
                
            }
        }
    }
}
?>
