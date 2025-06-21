<?php

$host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "nosedb";  

    $con = mysqli_connect($host, $user, $password, $db_name);   
    $title=htmlspecialchars($_GET['title']);
    $content=htmlspecialchars($_GET['content']);
    $sql="UPDATE note set CTITLE='$title',CCONTENT='$content' WHERE CID=".$_GET['id'];

    if($conn->query($sql) === TRUE){
        header('Location: Home.php');
        $con->close();
        exit();
    }
?>