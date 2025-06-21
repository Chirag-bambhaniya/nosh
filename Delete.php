<?php

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "nosedb"; 

$con = mysqli_connect($host, $user, $password, $db_name);  
$sql="DELETE from note where CID=".$_GET['id'];

if(mysqli_query($con,$sql)){
    header('Location: Home.php');
    $con->close();
    exit();
}
?>