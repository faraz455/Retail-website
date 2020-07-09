<?php

if(isset($_POST['Upload'])){
    $file_name =  $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_temp_loc = $_FILES['file']['tmp_name'];
    $file_store = "upload/".$file_name;
    $location = "../html pages/upload/".$file_name;

    if(move_uploaded_file($file_temp_loc,$file_store))
        {
            echo $file_name;
            echo $file_store;
            echo "<img src=".$file_store.">";
            echo $location;
        }
}


if(isset($_POST['display'])){
    echo "<img src=".$location.">";}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Retail Property</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php
require_once('navbar.php');
?>


<div style = "background-color: white; ">
<form action="upload.php" method="post" enctype="multipart/form-data">

<label>uploading</label>
<p>
    <input type="file"  name="file">
</p>
<p> 
    <input type="submit" name="Upload" value="Upload image">
</p>
<p> 
    <input type="submit" name="diplay" value="Display">
</p>

</form>

</div>




<!--main div ends-->
</div>
</body>
</html>