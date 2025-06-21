<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NOSE</title>
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

            .top-bar{
                background-color: rgba(255, 255, 255, 0.3);
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
            }

            .top-bar h3{
                margin-top:3px;
                margin-left:10px;
            }

            .top-bar a{
                color:white;
                text-decoration: none;
                margin-top: 4px;
            }

            .login-txt{
                margin-left:740px;
                transition: color 0.3s;
            }

            .login-txt:hover{
                color:#502AAA;
            }

            .reg-txt{
                margin-left:20px;
                transition: color 0.3s;
            }

            .reg-txt:hover{
                color:#CE1EAD;
            }

            .main-div{
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
                color: white;
                font-size: 1.2rem;
                height: 600px;
                width: 570px;
                margin-left: 17%;
                margin-top:15px;
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

            .bn632-hover {
                width: 230px;
                font-size: 16px;
                font-weight: 600;
                color: #fff;
                cursor: pointer;
                margin-top:40px;
                height: 55px;
                text-align:center;
                border: none;
                background-size: 300% 100%;
                border-radius: 10px;
                moz-transition: all .4s ease-in-out;
                -o-transition: all .4s ease-in-out;
                -webkit-transition: all .4s ease-in-out;
                transition: all .4s ease-in-out;
            }

            .bn632-hover:hover {
                background-position: 100% 0;
                moz-transition: all .4s ease-in-out;
                -o-transition: all .4s ease-in-out;
                -webkit-transition: all .4s ease-in-out;
                transition: all .4s ease-in-out;
            }

            .bn632-hover:focus {
                outline: none;
            }

            .bn632-hover.bn19 {
                background-image: linear-gradient(
                    to right,
                    #f5ce62,
                    #e43603,
                    #fa7199,
                    #e85a19
                );
                box-shadow: 0 4px 15px 0 rgba(229, 66, 10, 0.75);
            }
    </style>
    </head>
    <body>
        <div class="top-bar">
            <h3>NOSE</h3>
            <a class="login-txt" href="login.php">Login</a>
            <a class="reg-txt" href="register.php">Register</a>
        </div>
        <div class="main-div">
            <h1 class="wel-txt">Welcome to Nose</h1>
            <h1 class="note-txt">(Note Sharing Website..!)</h1>
            <h4 class="des-txt">Nose..! It is an simple open-source web application mainly used to write and share your notes on any device with a browser...</h4>
            <a href="Login.php"><button class="bn632-hover bn19">Get Started..!!</button></a>
        </div>
    </body>
</html>