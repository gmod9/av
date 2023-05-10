<?php
// Check if image file is a actual image or fake image
if(isset($_POST["submit"]) AND isset($_POST["fname"]))  {
  $check = getimagesize($_FILES["fileToUpload"]['tmp_name']);
  if($check !== false AND $check[0] == 64 AND $check[1] == 32 AND $check["mime"] == 'image/jpeg' AND intval($_POST["fname"])) {
    echo "Upload OK";
    move_uploaded_file($_FILES["fileToUpload"]['tmp_name'], "./avatars/" . $_POST["fname"] . ".jpg");
  } else {
    echo "File is not an image or has wrong dimentions or isn't a jpeg or your steamid is invalid.";
  }
}
?>
