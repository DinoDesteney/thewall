
<!DOCTYPE html>
<html>

<head>
    <title>
        Register
    </title>
</head>

<body>
    
</body>

</html>
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
    include ("connect.php");
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
    
<h1>Je heb een account</h1>
        <br>
<center>
    <form method="get" action="LogIn.php">
        <button class="button2" link="users.php" >Inloggen? Klik hier</button>
    </form>
    </center>
<style>
.button2 {
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

.button2:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;

}
</style>
  
<?php
    if ( !isset($_POST["user"]) || !isset($_POST["pwd"]) )
{
   die("He, da's gek!");
} 
$naam=preg_replace("/[^A-Za-z0-9]/","",$_POST["user"]);
$password=$_POST["pwd"];
$salt="Bananie";
$pepper=substr($naam,-5).substr($naam,5);
$hashed_password=hash ("SHA512", $salt.$password.$pepper);
//echo $naam."Je gehashte password is: " .$hashed_password;
//file_put_contents("test_gebruiker.txt", $naam . PHP_EOL . $hashed_password);
//echo "Je bent toegevoegd aan de database";



if($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO accounts(name, Password)
VALUES ('$naam', '$hashed_password')";

if($conn->query($sql) === TRUE){
echo "Je heb een account!";
}else{
echo"Error: " . $sql . "<br>" . $conn->error;    
}

$conn->close();
    ?>
    
    
</body>
</html>