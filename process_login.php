<!doctype html>
<html>
<head>
    <title>The Wall</title>
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
    <br>
<center>
    <form method="get" action="upload.php">
        <button class="btn" link="upload.php" >Uploaden? Klik hier</button>
    </form>
    </center>
<style>
.btn {
  background: #00e1ff;
  background-image: -webkit-linear-gradient(top, #00e1ff, #000000);
  background-image: -moz-linear-gradient(top, #00e1ff, #000000);
  background-image: -ms-linear-gradient(top, #00e1ff, #000000);
  background-image: -o-linear-gradient(top, #00e1ff, #000000);
  background-image: linear-gradient(to bottom, #00e1ff, #000000);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  text-shadow: 1px 1px 3px #061629;
  font-family: Arial;
  color: #c7e5ff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;

}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;

}

</style>
    <br>
<center>
    <form method="get" action="users.php">
        <button class="button" link="users.php" >Andere mensen hun uploads zien? Klik hier</button>
    </form>
    </center>
<style>
.button {
  background: #00e1ff;
  background-image: -webkit-linear-gradient(top, #00e1ff, #000000);
  background-image: -moz-linear-gradient(top, #00e1ff, #000000);
  background-image: -ms-linear-gradient(top, #00e1ff, #000000);
  background-image: -o-linear-gradient(top, #00e1ff, #000000);
  background-image: linear-gradient(to bottom, #00e1ff, #000000);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  text-shadow: 1px 1px 3px #061629;
  font-family: Arial;
  color: #c7e5ff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;

}

.button:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;

}
</style>
    
</body>
</html>

<?php
include ("koekjes.php");
session_start();
include ("connect.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Login
    </title>
</head>

<body>

<?php

if ( !  isset($_POST["user"]) || ! isset($_POST["pwd"]) )
{
   print_r($_POST);
   die("He, da's gek!");
}
//l$string=file_get_contents("test_gebruiker.txt");
/*
$delen=explode(PHP_EOL,$string);
$name_from_database=$delen[0];
$hashed_pwd_from_database=$delen[1];
*/
$naam=preg_replace("/[^A-Za-z0-9]/","",$_POST["user"]);
$password=$_POST["pwd"];
$salt="Bananie";
$pepper=substr($naam,-5).substr($naam,5);
$hashed_password=hash ("SHA512", $salt.$password.$pepper);
/*
if ($hashed_password==$hashed_pwd_from_database)
{
echo "Je bent ingelogd";
}  else
{
echo "Er klopt iets niet!";
}
*/


if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

$sql = "SELECT * FROM `accounts` WHERE `Password`='$hashed_password' AND name ='$naam'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
 echo "Yeah ingelogd";
    $_SESSION['login']=true;
    $_SESSION['name'] = $naam;
    }else{
echo "Je account bestaat niet";
}
$conn->close();
    ?>

</body>

</html>



