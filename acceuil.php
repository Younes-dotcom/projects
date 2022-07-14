<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'connexion.php'?>
    <?php session_start()?> 
    <?php 
    if(isset($_GET['login'])){
        $_SESSION ["login"] = $_GET['login'];
        
        if(date("H")>18){
            echo "<h3 class='text-center'>Bonsoir " .$_GET ['nom'] .' '.$_GET ['prenom']. "</h3>";
        }else{
            echo "<h3 class='text-center'>Bonjour " .$_GET ['nom'] .' '.$_GET ['prenom']. "</h3>";
        }
    }
    ?>
    
    
    


<?php
$sql = "SELECT * FROM produit
JOIN categorie
ON produit.idCategorie = categorie.idCategorie
ORDER BY libelle ";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<table class='table'><th>Reference</th><th>Libelle</th><th>Prix Unitaire</th><th>Date Achat</th><th>Photo Produit</th><th>Categorie</th><th>Action</th>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" .$row['reference']. "</td>";
        echo "<td>" .$row['libelle']. "</td>";
        echo "<td>" .$row['prixUnitaire']. "</td>";
        echo "<td>" .$row['dateAchat']. "</td>";
        echo "<td>" .$row['photoProduit']. "</td>";
        echo "<td>" .$row['denomination']. "</td>";
        echo "<td> <a href=''>Edit</a> <a href=''>Delete</a></td>";
        echo "</tr>";
    }
}
?>
<a href="ajouterProduit.php">Ajouter Produit</a>
<i class="bi bi-pencil"></i>
</body>
</html>