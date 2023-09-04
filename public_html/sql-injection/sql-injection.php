<?php


$host = 'mysql';
$user = 'root';
$pass = 'root';
$conn = new mysqli($host, $user, $pass);

$con = new PDO('mysql:host=mysql;dbname=dbtest', 'root', 'root');



if(isset($_POST['nom_utilisateur'])){


    $nom_utilisateur = $_POST['nom_utilisateur'];


    $userQuery = $con->query("SELECT * FROM utilisateurs WHERE nom_utilisateur = '$nom_utilisateur' ");

    

   // $userQuery = $con->query("SELECT * FROM utilisateurs WHERE nom_utilisateur = '';Drop table posts ;--' ");


    
// $userQuery = $con->prepare("SELECT * FROM users WHERE nom_utilisateur = :nom_utilisateur ");


    $userQuery->execute([

        'nom_utilisateur'=> $nom_utilisateur


    ]);





    if($userQuery->rowCount()){

        echo "utilisateur trouver ";


    }



}




?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="" method="post" autocomplete="on">

    <label for="name">

        Name
        <input type="text" name="name">

    </label>


    <label for="name">

        nom_utilisateur
        <input type="text" name="nom_utilisateur">

    </label>


    <input type="submit" >



</form>





</body>
</html>

