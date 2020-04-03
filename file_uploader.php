<html>
  <head>
    <meta charset="utf-8">
    <title>Upload file in server</title>
  </head>
  <body>

    <form method="post" enctype="multipart/form-data">
      <input type="file" name="file">
      <input type="submit" value="Upload file!">
    </form>





<?php

if (isset($_FILES['file']))  
{ 
  
  if($_FILES['file']['name'] == '') 
    echo ('file isn't chosen!');
  
  elseif($_FILES['file']['size'] > 1048576) 
    echo ('File size exceeds 1 Mb!');
  else{
  
    copy($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    echo 'Successfully uploaded';
  }

}

if (isset($_FILES['file']))  
{ 
header("location: file_uploader.php");
exit;
}


?>

  </body>
</html>
