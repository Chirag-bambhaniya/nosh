<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Note</title>
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

        .main-div{
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 5px;
            padding: 10px 20px;
            color: white;
            font-size: 1.2rem;
            height: 675px;
            width: 1520px;
            margin:10px;
            text-decoration: none;
        }

        .main-div h3{
            margin-top:20px;
            margin-left:20px;
        }

        .container{
            width: 1400px;
            padding: 0 15px;
            margin-top: 50px;
            margin-left: 50px;
        }

        .container label{
            font-size: 22px;
            font-weight: 600;
            color: white;
            margin-left: 0px;
        }

        .title-container input{
            height: 50px;
            border-radius: 8px;
            font-size: 36px;
            font-weight: bold;
            padding: 0 20px;
            border: 3px solid #f8f8f8;
            background: transparent;
            outline: none;
            color: white;
            margin-bottom: 50px;
            width: 700px;
        }

        .title-container input:focus{
            border: none;
        }

        .content-container textarea{
            font-size: 22px;
            font-weight: 600;
            padding: 0 19px;
            border: 3px solid #f8f8f8;
            background: transparent;
            outline: none;
            color: white;
            margin-top: 40px;
            margin-bottom: 30px;
            width: 700px;
            height:300px;
        }

        .content-container textarea:focus{
            border: none;   
        }

        button {
            height: 50px;
            border-radius: 10px;
            border: none;
            background-color: #D62229;
            color: white;
            font-weight: 800;
            font-size: 18px;
            text-transform: uppercase;
            text-align: center;
            box-shadow: 0em -0.2rem 0em #D62229 inset;
            transition: background-color .3s ;
            width: 300px;
        }
  
        button:hover {
            color: #ff5678;
            border: 3px solid #D62229;
            cursor: pointer;
            background-color: transparent;
        }
    </style>
</head>
<body>
    <div class="main-div">
        <h3>New Note</h3>
        <div class="container">
            <form method="get" action="insert.php">
            <div class="title-container">
                <input type="text" name="title" placeholder="Title....">
            </div>
            <label><?php echo "Last Edited : ". date('Y-m-d H:i:s', time()); ?></label>
            <div class="content-container">
                <textarea class="content" name="content" placeholder="I am the note body......"></textarea>
            </div>
            <button type="submit" name="done">Done</button>
            </form>
        </div>
    </div>
</body>
</html>