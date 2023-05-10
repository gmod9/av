<?php
if (isset($_GET['av'])) 
    echo '<body style="margin:0"><img src="./avatars/' . $_GET["av"] . '.jpg"></body>';
elseif (isset($_GET['isvalid']))
    if (intval($_GET["isvalid"]) AND file_exists("./avatars/". $_GET["isvalid"] . ".jpg"))
        //file_exists(string $filename): bool
        echo $_GET["isvalid"];
    else
        echo 'false';
else
    echo 
    '<!DOCTYPE html>
    <html>
    <body>
    
    <form action="imgup.php" method="post" enctype="multipart/form-data">
      <p>Select image to upload:</p>
      <input type="file" name="fileToUpload" id="fileToUpload">
      <p>Last part of the SteamID (eg: 186527010 from STEAM_0:1:186527010):</p> 
      <input type="text" id="fname" name="fname">
      <input type="submit" value="Upload Image" name="submit">
    </form>
    
    </body>
    </html>'
    
?>
