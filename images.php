<?php
$sql = "SELECT ID, link, title, description, tag, userup FROM uploads";
$results = $conn->query($sql);
foreach($results as $result){
    $id = $result['ID'];
   $link =  $result['link'];          
   $title = $result['title'];
   $description = $result['description'];
   $tag = $result['tag']; 
   $userup = $result['userup'];
        echo '<ul class="grid cs-style-3">
	        <li>
		        <figure>
			        <img class="images" src="' . $link . '" alt="Random image" align="middle"/>
                    <figcaption>
				        <h3>' . $title . '</h3>
				        <span>' . $userup . '</span>
				        <button id="myBtn' . $id . '">View image</button>
			        </figcaption>
		        </figure>
	        </li>
            </ul>
            
                        <!-- The Modal -->
                        <div id="myModal' . $id . '" class="modal">

                        <!-- Modal content -->
                            <div class="modal-content">
                                <h1 class="modaalh1">' . $title . '</h1>
                                <span id="span' . $id . '" class="close">x</span>
                                <img src="' . $link . '" alt="' . $title . '"/>
                                <p>' . $description . '</p>
                            </div>

                        </div>
            <script src="js/toucheffects.js"></script>
            <script>
            // Get the modal
            var modal' . $id . ' = document.getElementById("myModal' . $id . '");

            // Get the button that opens the modal
            var btn' . $id . ' = document.getElementById("myBtn' . $id . '");

            // Get the <span> element that closes the modal
            var span' . $id . ' = document.getElementById("span' . $id . '");

            // When the user clicks on the button, open the modal 
            btn' . $id . '.onclick = function() {
             modal' . $id . '.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span' . $id . '.onclick = function() {
               modal' . $id . '.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal' . $id . ') {
                    modal' . $id . '.style.display = "none";
    }
}</script>';
}




?>