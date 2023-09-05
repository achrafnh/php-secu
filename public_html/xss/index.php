<?php
$date = new DateTime('+1 day');

setcookie('password', 'admin1010', $date->getTimestamp());




/**
 *
 */

 $host = 'mysql';
$user = 'root';
$pass = 'root';
$conn = new mysqli($host, $user, $pass);

$con = new PDO('mysql:host=mysql;dbname=dbtest', 'root', 'root');




        $commentObject = $con->query("SELECT * FROM comments");



         $commentObject->setFetchMode(PDO::FETCH_OBJ);




        if(isset($_POST['submit'])){



            $name = $_POST['name'];

           

            $body = $_POST['body'];

           // $body =  htmlspecialchars($_POST['body'], ENT_QUOTES);

            $commentQuery = $con->prepare("INSERT INTO comments(name, body) VALUES(:name, :body)");


            $commentQuery->execute([

                'name'=> $name,
                'body'=>$body


            ]);


        }



?>









<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>


<div class="col-sm-6 col-sm-offset-3">

    <h3 class="text-center">Nouveau commentaire</h3>

    <form action="" method="post" autocomplete="off">


        <div class="form-group">


            <label for="Name">Name</label>
            <input type="text" name="name" class="form-control">


        </div>



        <div class="form-group">

            <label for="comment">Comment</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>


        </div>



        <input type="submit" name="submit">



    </form>




    <table class="table">
       <thead>
         <tr>
            <th>Name</th>
            <th>Body</th>
          </tr>
        </thead>
        <tbody>

        <?php



            while($comment = $commentObject->fetch()){

                echo  "<tr>";

                echo "<td>$comment->name</td>";

                echo "<td>$comment->body</td>";

                echo"</tr>";



            }




            ?>
       </tbody>
     </table>


















</div>






</body>
</html>
