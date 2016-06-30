
<!DOCTYPE html>
<html>
<head>
    <title>The Wall Register</title>
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

    <form method="get" action="LogIn.php">
        <button class="button2" formaction="LogIn.php" >Inloggen? Klik hier</button>
    </form>

  
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