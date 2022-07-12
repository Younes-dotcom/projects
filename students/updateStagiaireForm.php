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
    <?php 
        $id = $_GET['id'];
        $name = $_GET['name'];
        $filiere = $_GET['filiere'];
        $birthdate = $_GET['birthdate'];
    ?>
    <form action="updateStudentDB.php?id=<?="$id"?>" method ="POST">
        Stagiaire Nom:<input type="text" name="stagiaire_nom" value=<?="$name"?>>
        Stagiaire Filiere:<input type="text" name="stagiaire_filiere" value=<?="$filiere"?>>
        Stagiaire Date De Naissance:<input type="text" name="stagiaire_birthdate" value=<?="$birthdate"?>>
        <input type="submit" value="modifier">
    </form>

</body>
</html>