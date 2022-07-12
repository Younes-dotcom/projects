<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'connexion.php'?>
    <h1 style="text-align:center;">Les Stagiaires</h1>
    <?php
        if(mysqli_select_db($conn,$db)){
            $sql = "SELECT * FROM dev101";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo "<table style='border-collapse:collapse; width:75%; text-align:center;margin:0 auto;' border=1> <tr><th>id</th><th>name</th><th>filiere</th><th>birthdate</th><th>Action</th></tr>";
                while($row = mysqli_fetch_assoc($result)){
                    $stg_id = $row['stagiaire_id'];
                    $stg_name = $row['stagiaire_name'];
                    $stg_filiere= $row['stagiaire_filiere'];
                    $stg_birthdate= $row['stagiaire_birthdate'];
                    echo"<tr>";
                    echo '<td>'. $stg_id . '</td>';
                    echo '<td>'. $stg_name . '</td>';
                    echo '<td>'. $stg_filiere . '</td>';
                    echo '<td>'. $stg_birthdate . '</td>';
                    echo "<td><a href='deleteStagiaire.php?id=".$stg_id ."'>".  "supprimer</a> / ";
                    
                    echo "<a href='updateStagiaireForm.php?id=". $stg_id . '&name='.$stg_name. '&filiere='.$stg_filiere .'&birthdate='.$stg_birthdate."'>".  "modifier</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
            
            echo "<a  href='insertStudentForm.php'>Ajouer Stagiaire</a>";
        ?>

</body>
</html>