<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="nosedb";

$con= mysqli_connect($servername,$username,$password,$dbname);  
$title=htmlspecialchars($_GET['title']);
$content=htmlspecialchars($_GET['content']);
$sql="INSERT INTO note (CTITLE, CCONTENT) VALUES ('$title' , '$content');";

if(mysqli_query($con,$sql)){
    header('Location: Home.php');
    $con->close();
    exit();
}


?>