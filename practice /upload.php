<html>
<title>upload</title>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image:
    <input type="file" name="" id="fname">
    <input type="submit" value="Upload" name="submit">
</form>
<?php
if($_FILES)
{
    $name=$_FILES['fname']['name'];
    move_uploaded_file($_FILES['fname']['tmp_name'], $name);
    echo "file uploaded  '$name' </br> <img src='$name'/>" ;
}

?>
  </body>
          </html>