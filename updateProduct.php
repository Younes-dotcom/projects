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
    <?php include 'connexion.php';
?>
    
    <h1 class="text-center">Modifier Produit</h1>
    <form action="updateProduct.php?ref=<?=$_GET['ref']?>" method="POST" class="container">
        <div class="form-group">
            <label for="Libelle">Libelle</label>
            <input type="text" name="libelle" class="form-control" value='<?=$_GET['libelle'] ?>'>
        </div>
        <div class="form-group">
            <label for="prixUnitaire">Prix Unitaire</label>
            <input type="text" name="prix" class="form-control" value='<?=$_GET['prix'] ?>'>
        </div>
        <div class="form-group">
            <label for="date">Date Achat</label>
            <input type="text" name="date" class="form-control" value='<?=$_GET['date'] ?>'>
        </div> <br>
        <div class="form-group">
            <label for="categorie">Categorie</label>
            <select name="categorie">
                <option value="">Choose categorie</option>
                <option value="1">ordinateur portable</option>
                <option value="2">ordinateur bureau</option>
            </select> 
        </div><br>
        <div class="form-group">
            <label for="photo">Photo Produit</label>
            <input type="text" name="photo" class="form-control">
        </div>
        <br>
        <input type="submit" name="submit" class="btn btn-primary" value="Ajouter">
    </form>


    <?php
    if(isset($_POST['submit'])){
        $libelle = $_POST['libelle'];
        $prix = $_POST['prix'];
        $date = $_POST['date'];
        $categorie = $_POST['categorie'];
        $ref = $_GET['ref'];
        echo $ref;
        $sql = "UPDATE produit SET libelle = '$libelle', prixUnitaire = '$prix', dateAchat = '$date', idCategorie = '$categorie' WHERE reference =  '$ref'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("LOCATION:acceuil.php");
        }
    }
    ?>


</body>
</html>