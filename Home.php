<?php
    session_start();
    include 'connection.php';

    if (!isset($_SESSION['username'])) {
        header("Location: Login.php");
        exit();
    }

    $username = $_SESSION['username'];

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "nosedb";  

    $con = mysqli_connect($host, $user, $password, $db_name);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM note ORDER BY CDATE DESC";

    if (isset($_GET['search-btn'])) {
        $search = $_GET['search'];
        $sql = "SELECT * FROM note WHERE CTITLE LIKE '%$search%' OR CCONTENT LIKE '%$search%' ORDER BY CDATE DESC";
    }

    $res = $con->query($sql);

    if (!$res) {
        die("Query failed: " . mysqli_error($con));
    }

    $total = $res->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: url('image/index_bg.svg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        .top-div {
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            font-size: 1.2rem;
            height: 50px;
            width: 1510px;
            margin-left: 1%;
            margin-top: 15px;
            display: flex;
        }

        .top-div h3 {
            font-size: 25px;
            margin-top: 3px;
            margin-left: 10px;
        }

        .search-container {
            position: relative;
            margin-left: 430px;
        }

        .search-container input {
            width: 400px;
            height: 35px;
            border-radius: 8px;
            font-size: 18px;
            padding: 0 15px;
            border: 3px solid #D62229;
            background: transparent;
            outline: none;
            color: white;
        }

        button {
            width: 35px;
            height: 35px;
            border-radius: 10px;
            border: none;
            padding-top: 2px;
            background-color: #ff5678;
            color: #000000;
            font-weight: 800;
            font-size: 18px;
            text-transform: uppercase;
            text-align: center;
            box-shadow: 0em -0.2rem 0em #ff5678 inset;
            transition: background-color .3s;
        }

        button:hover {
            background-color: transparent;
            color: #ff5678;
            border: 3px solid #ff5678;
            cursor: pointer;
        }

        .top-div a {
            text-decoration: none;
            color: white;
            margin-top: 8px;
        }

        .add-txt {
            margin-left: 340px;
        }

        .profile-txt {
            margin-left: 30px;
        }

        .profile-txt:hover, .add-txt:hover {
            text-decoration: underline;
        }

        .main-div {
            width: 1536px;
            height: 630px;
        }

        .container {
            max-width: 1250px;
            padding: 0 15px;
            display: flex;
            margin-top: 100px;
            margin-left:350px;
        }

        .section-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }

        .section-card {
            background: #eeeeee;
            padding: 120px 30px 30px;
            position: relative;
            border-radius: 20px;
            z-index: 1;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            width:240px;
        }


        .section-card span {
            position: absolute;
            left: 0;
            top: 0;
            margin-top:30px;
            margin-left:30px;
            font-size: 50px;
            font-weight: bold;
            color: #000;
        }

        .section-card h2 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .section-card p {
            line-height: 1.5;
        }

        .section-card a {
            display: inline-block;
            color: #000;
            margin-top: 20px;
            font-weight: 500;
        }
    </style>
    
</head>

<body>
    
    <div class="top-div">
        <h3>NOSE</h3>
        <div class="search-container">
            <form method="get" action="home.php">
                <input type="text" id="searchInput" name="search" placeholder="My Notes....." />
                <button type="submit" name="search-btn"><span class="material-symbols-outlined">search</span></button>
            </form>
        </div>
        <a class="add-txt" href="Add.php">Add Note</a>
        <a class="profile-txt" href="Profile.php">Profile</a>
    </div>

    <div class="main-div">
    <div class="container">
            <div class="section-cards">
                <?php while($row = $res->fetch_assoc()): ?>
                <div class="section-card" name="note">
                    <span><?php echo $row['CID']; ?></span>
                    <h2><?php echo $row['CTITLE']; ?></h2>
                    <p><?php echo $row['CCONTENT']; ?></p>
                    <a href="Delete.php?id=<?php echo $row['CID']?>">Delete</a>
                    <a href="Edit.php?id=<?php echo $row['CID']?>">Edit</a>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php $con->close(); ?>
    </div>
</body>
</html>
