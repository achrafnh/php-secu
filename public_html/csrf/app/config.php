<?php
session_start();

$_SESSION['name'] = 'achraf nhaila';


$host = 'mysql';
$user = 'root';
$pass = 'root';
$conn = new mysqli($host, $user, $pass);

$con = new PDO('mysql:host=mysql;dbname=dbtest', 'root', 'root');




    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(!isset($_POST['_token']) || ($_POST['_token'] !== $_SESSION['_token'])){

            die("INVALID TOKEN");



        }


    }


$_SESSION['_token'] = bin2hex(openssl_random_pseudo_bytes(16));






?>