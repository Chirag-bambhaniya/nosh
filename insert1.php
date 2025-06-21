<?php
    //echo "example of mysqli_connect" ."<br>" ;    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nosedb";

    $conn = mysqli_connect($servername, $username, $password,$dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            echo "<br>";
        }
        


        //create table stud_info
        // $sql1 =  "CREATE TABLE user (
        //     id INT(50)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     USERNAME TEXT(30) NOT NULL ,
        //     PASSWORD TEXT(20) NOT NULL 
        // )";

        // if($conn->query($sql1) === TRUE){
        //     echo "Table user created successfully";
        //   } else {
        //     echo "Error creating table: " . $conn->error;
        //   }
        // echo "<br>" . "<br>" ;

          //create table course
          $sql2 =  "CREATE TABLE note (
            id INT(50)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            CTITLE TEXT(500) NOT NULL ,
            CCONTENT TEXT(1000) NOT NULL ,
            CID TEXT(30) NOT NULL  , 
            CDATE TEXT(30) NOT NULL 
        )";
        if ($conn->query($sql2) === TRUE) {
            echo "Table note created successfully";
          } else {
            echo "Error creating table: " . $conn->error;
          }
          echo "<br>" . "<br>" ;

     
?>