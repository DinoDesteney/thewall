

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
    
<h1>Home</h1>

 <div id="imagesHome"> 
<img id="myImg" src="image/Home/IMG_9952.JPG" alt="Harry" width="300" height="200">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img01" alt="" src="image/Home/IMG_9952.JPG">
  <div id="caption"></div>
</div>
    <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>


<img id="Home2" src="image/Home/IMG_1415.JPG" alt="Wintersport2" width="300" height="200">

        
        
<img src="image/Home/IMG_1062.JPG" id="Home3" alt="Bickel">
<img src="image/Home/IMG_2235.JPG" id="Home4" alt="Zon">
    <br>
<img src="image/Home/IMG_1105.JPG" id="Home5" alt="London">
<img src="image/Home/IMG_2236.JPG" id="Home6" alt="Sil">
<img src="image/Home/IMG_0008.JPG" id="Home7" alt="Harry en Cosman">
<img src="image/Home/IMG_1092.JPG" id="Home8" alt="Bickel2">
    </div>
</body>
</html>