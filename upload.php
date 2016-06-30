<?php
include("check.php");
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
    <h1>Upload your images</h1>

<div class="upload" id="upload">
     
     <form action="upload2.php" method="post" enctype="multipart/form-data">
         Select image to upload:
         <h3>Title</h3>
      <input type="text" name="title" required />
         <h3>Description</h3>
               <input type="text" name="description" required />
         <h3>Tags</h3>
      <input type="text" name="tag" required />
         <br>
         <input type="file" name="fileToUpload" id="fileToUpload">
         <br>
         <input type="submit" value="Upload Image" name="submit">
     </form>
</div>
</body>
</html>
