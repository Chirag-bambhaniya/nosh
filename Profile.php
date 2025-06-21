<?php
    session_start();
    include 'connection.php'; 

    $username = isset($_SESSION['username']) ? $_SESSION['username'] : 'error';

    if($username !== 'error'){
        $stmt = $con->prepare("SELECT PASSWORD FROM user WHERE USERNAME = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($password);
        $stmt->fetch();
        $stmt->close();
    } else {
        $password = 'error';
    }

    if(isset($_POST['save'])){
        $newUsername = $_POST['username'];
        $newPassword = $_POST['password'];

        $stmt = $con->prepare("UPDATE user SET USERNAME = ?, PASSWORD = ? WHERE USERNAME = ?");
        $stmt->bind_param("sss", $newUsername, $newPassword, $username);
        if($stmt->execute()){
            $_SESSION['username'] = $newUsername;

            header("Location: Home.php");
            exit();
        }
        $stmt->close();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <style>
        * {
            padding: 0;
            box-sizing: border-box;
            margin: 0;
        }
        body {
            background: url('image/index_bg.svg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        .top-bar{
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            font-size: 1.2rem;
            height: 50px;
            width: 1000px;
            margin-left: 17%;
            margin-top:15px;
            display:flex;
            background-color: rgba(255, 255, 255, 0.3);
        }

        .top-bar h3{
            margin-top:3px;
            margin-left:10px;
        }

        .top-bar a{
            margin-left:810px;
            margin-top:3px;
            color:white;
        }

        .container {
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            font-size: 1.2rem;
            height: 600px;
            width: 1000px;
            margin-left: 17%;
            margin-top:15px;
            display:flex;
            flex-direction:column;
            background-color: rgba(255, 255, 255, 0.3);
        }

        .container h3{
            margin-left:20px;
            margin-top:30px;
            font-size:30px;
        }

        .input-field input{
            width: 500px;
            height: 60px;
            border-radius: 8px;
            font-size: 18px;
            padding: 0 15px;
            border: 3px solid #000;
            background: transparent;
            outline: none;
            color: white;
            margin-top:15px;
            margin-left:230px;
        }

        .password-field input{
            width: 500px;
            height: 60px;
            border-radius: 8px;
            font-size: 18px;
            padding: 0 15px;
            border: 3px solid #000;
            background: transparent;
            outline: none;
            color: white;
            margin-top:15px;
            margin-left:230px;
        }

        input:focus{
            border: 3px solid #ff5678;
        }

        .username{
            margin-top:80px;
            margin-left:230px;
        }

        .password{
            margin-top:20px;
            margin-left:230px;
        }

        button {
            width: 300px;
            height: 50px;
            border-radius: 25px;
            border: none;
            background-color: #ff5678;
            color: white;
            font-weight: 800;
            font-size: 18px;
            text-transform: uppercase;
            text-align: center;
            box-shadow: 0em -0.2rem 0em #ff5678 inset;
            transition: background-color .3s ;
            margin-top:30px;
            margin-left:230px;
        }
        
        button:hover {
            background-color: transparent;
            color: #ff5678;
            border: 3px solid #ff5678;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div class="top-bar">
        <h3>NOSE</h3>
        <a href="index.php">Log Out</a>
    </div>
    <main>
    <div class="container">
        <h3>Profile</h3>
        <form id="signupForm" method="post">
            <h4 class="username">Username</h4>
            <div class="input-field">
                <input type="text" name="username" spellcheck="false" value="<?php echo htmlspecialchars($username);?>">
            </div>
            <h4 class="password">Password</h4>
            <div class="password-field">
                <input type="password" name="password" spellcheck="false" value="<?php echo htmlspecialchars($password);?>">
            </div>
            <button type="submit" name="save">Save Changes</button>
        </form>

    </div>
  </main>

</body>
</html>