

<!doctype html>
<html>
<head>
    <title>Random site</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Desteney Bader">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="home.js"></script>
</head>
<body>
    <label for="verbergMenu" id="labelMenutoggle">Menu    <i class="fa fa-bars"></i></label>
    <input type="checkbox" id="verbergMenu">
   <h1>The Wall</h1>
    
    
<?php
    include ("nav.php");
 ?>
    <br>
  
    <div id="slider">
                <figure>
                    <img src="image/banner/IMG_0004.JPG" alt="">
                    <img src="image/banner/IMG_0005.JPG" alt="">
                    <img src="image/banner/IMG_0007.JPG" alt="">
                    <img src="image/banner/IMG_0008.JPG" alt="">
                    <img src="image/banner/IMG_1318.JPG" alt="">
                </figure>
            </div>
    
<h1>Log in</h1>
    <form action="process_login.php" method="post" id="LogIn">
        Username: <input type="text" name="user"></input><br>
        Password: <input type="password" name="pwd"></input><br>
    <input type="submit"></input>
    </form>
    
    <a href="register.php" id="LogIn">Nog geen account?</a>
</body>
</html>