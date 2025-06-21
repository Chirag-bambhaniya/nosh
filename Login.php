<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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

        .container{
            display:flex;
        }

        .side-txt{
            color:white;
            width:500px;
            margin-left:150px;
        }


        .wel-txt{
            margin-top:210px;
        }

        .note-txt{
            margin-top:5px;
            font-size:30px;
        }

        .des-txt{
            margin-top:15px;
            font-size:18px;
        }

        .login-box{
            background-color: rgba(255, 255, 255, 0.3);
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            font-size: 1.2rem;
            height: 600px;
            width: 500px;
            margin-left: 17%;
            margin-top:27px;
            display:flex;
            flex-direction:column;  
        }

        .login-box h3{
            margin-top:50px;
            font-size:40px;
            margin-left:165px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #333;
            outline: none;
        }

        .username-txt{
            font-size:20px;
            margin-top:50px;
        }

        .password-txt{
            font-size:20px;
            margin-top:20px;
        }
        input[type="submit"] {
            background-color: #502AAA;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 50px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #CE1EAD;
        }

        .not-reg{
            color:white;
            display:flex;
            margin-top:50px;
        }

        .not-reg h5{
            margin-left:130px;
        }

       .reg-link{
        color:#CE1EAD;
        font-size:15px;
        margin-left:5px;
       } 
    </style>
</head>
<body>
    
    <div class="container">
        <div class="side-txt">
            <h1 class="wel-txt">Welcome to Nose</h1>
            <h1 class="note-txt">(Note Sharing Website..!)</h1>
            <h4 class="des-txt">Nose..! It is an simple open-source web application mainly used to write and share your notes on any device with a browser...So, sign in Now....</h4>
        </div>
        <div class="login-box">
            <h3>Sign in</h3>
            <form action="" method="post">
                <h4 class="username-txt">Username</h4>
                <input type="text" name="username" required>
                <h4 class="password-txt">Password</h4>
                <input type="password" name="password" required>
                <input type="submit" value="Login">
            </form>
            <?php if (isset($error)): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
            <div class="not-reg">
                <h5>Don't have account?</h5>
                <a class="reg-link" href="Register.php">Sign up</a>
            </div>
        </div>
    </div>
    <?php
        session_start();
        include 'connection.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $con->real_escape_string($_POST['username']);
            $password = $con->real_escape_string($_POST['password']);
            
            $sql = "SELECT * FROM user WHERE USERNAME='$username' AND PASSWORD='$password'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                $_SESSION['username'] = $username;
                header("Location: Home.php");
                exit();
            } else {
                $error = "Invalid username or password.";
            }
        }
    ?>
</body>
</html>