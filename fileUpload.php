<?php

var_dump($_FILES);

echo $_FILES['myUpload']['name'];

$destinationFolder = "./images/";

$filepath = $destinationFolder.$_FILES['myUpload']['name'];

move_uploaded_file($_FILES['myUpload']['tmp_name'], $filepath);

?>

<form action="fileUpload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myUpload">
    <input type="submit">
</form>