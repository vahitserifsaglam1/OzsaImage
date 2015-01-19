<?php
  
   include "../src/image.php";
 
   if(isset($_POST) || $_FILES)
   {
        $image = new image($_FILES['file']);

        if($image->uploadFile())
        {
        	 echo $image->returnPath();
        }
   }
 
 

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Standart Upload</title>
 </head>
 <body>
  <form action="" method="post" enctype="multipart/form-data">
 	<input type="file" name="file">
    <input type="submit" value="yükle">
 </form>
 </body>
 </html>