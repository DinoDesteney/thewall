<?php
include("check.php");
include ("connect.php");
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$title = mysqli_real_escape_string($conn,$_POST['title']);
$desc = mysqli_real_escape_string($conn,$_POST['description']);
$tag = mysqli_real_escape_string($conn,$_POST['tag']);


$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
       $sql = "INSERT INTO uploads (link, title, description, tag, userup) VALUES ('$target_file', '$title', '$desc', '$tag', '$login_user')";
        if ($conn->query($sql) === TRUE) {
        echo "info updated";
        header("Refresh: 3; users.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>



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
</head>
<body>

   <h1>The Wall</h1>
      <label for="verbergMenu" id="labelMenutoggle">Menu    <i class="fa fa-bars"></i></label>
    <input type="checkbox" id="verbergMenu">  
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
    
<h1>Upload</h1>

</body>
</html>