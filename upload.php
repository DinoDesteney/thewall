<?php
include("check.php");
?>

<div class="upload">
     <h1>Upload your images</h1>
     <form action="upload2.php" method="post" enctype="multipart/form-data">
         Select image to upload:
      <input type="text" name="title" required="required "/>
               <input type="text" name="description" required="required "/>
      <input type="text" name="tag" required="required "/>
         <input type="file" name="fileToUpload" id="fileToUpload">
         <input type="submit" value="Upload Image" name="submit">
     </form>
</div>