<?php

$host = 'mysql';
$user = 'root';
$pass = 'root';
$conn = new mysqli($host, $user, $pass);

$con = new PDO('mysql:host=mysql;dbname=dbtest', 'root', 'root');



if(isset($_POST['submit'])){


    $name = trim($_POST['name']);
    $password = trim($_POST['password']);


    $userQuery = $con->prepare("SELECT * FROM users WHERE name = :name");



    $userQuery->execute([

        'name'=> $name

    ]);


    $user = $userQuery->fetch(PDO::FETCH_OBJ);

    $db_password = $user->password;

//verifier que le mpassword recu via la methode post = password database
    if(password_verify($password, $db_password)){
        echo "<p class='bg-success'>User verified</p>";
    } else {
        echo "<p class='bg-danger'> User not verified</p>";
    }






//system to hash a password 

   $insertQuery = $con->prepare("INSERT INTO users(name, email, password) VALUES(:name, :email, :password) ");

   $insertQuery->execute([

       'name'=> $name,
       'email'=> 'achraf@formation.com',
       'password'=> password_hash($password, PASSWORD_BCRYPT, [11])


   ]);







   $userQuery = $con->prepare("SELECT * FROM users WHERE name = :name ");

   $userQuery->execute([
       'name'=> $name

   ]);

   if($userQuery->rowCount()){

       echo "WE FOUND A USER";


   }



}




?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<body>


<div class="col-sm-6 col-sm-offset-4">

<form action="" method="post" autocomplete="off">

    <h2>Login</h2>


    <div class="form-group">

        <label for="name">

            Name
            <input type="text" name="name" class="form-control">

        </label>

    </div>



    <div class="form-group">

        <label for="password">

            Password
            <input type="text" name="password" class="form-control">

        </label>

    </div>

    <input type="submit" name="submit" class="btn btn-primary">

</form>

</div>





</body>
</html>

