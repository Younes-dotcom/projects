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
session_destroy();    ?>
    <div class='container-fluid'>
        <form class="text-center mt-5" action="login.php" method="GET">
            Login: <br>
            <input type="text" name="login"> <br>
            Mot de Passe: <br>
            <input type="password" name="password"> <br> <br>
            <input type="submit" name="authenticate" value="authenticate">
        </form>
    </div>
 <?php
    if(isset($_GET['authenticate'])){
        if(empty($_GET['login']) || empty($_GET['password'])){
            header("LOCATION:login.php?failed=1"); // redirect to login with variable failed = 1           
        }else{
            if($conn){
                $login = $_GET['login'];
                $password = $_GET['password'];
                $sql = "SELECT * FROM compteproprietaire WHERE loginProp = '$login' and motPasse = $password ";
                $result = mysqli_query($conn,$sql);
                $arrData =  mysqli_fetch_assoc($result);

                if($arrData){
                    $login = $arrData['loginProp'];
                    $nom = $arrData['nom'];
                    $prenom = $arrData['prenom'];
                    header("LOCATION:acceuil.php?"."login=$login"."&"."nom=".$nom."&"."prenom=".$prenom);
                }else{
                    header("LOCATION:login.php?failed=2");
                }
            
              
            }
        }
    }
    
    if ( isset($_GET['failed']) && $_GET['failed'] == 1 ){
         echo "Veuillez saisir un login et un mot de passe";
    }
    if ( isset($_GET['failed']) && $_GET['failed'] == 2 ){
         echo "Erreur de login/mot de passe.";
    }
 ?>
</body>
</html>