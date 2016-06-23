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
    
<h1>Je bent ingelogd</h1>


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
    echo var_dump ($_SESSION['name']);
    }else{
echo "0 results";
}
$conn->close();
    ?>

</body>

</html>



