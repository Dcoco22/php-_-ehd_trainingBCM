<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
            <b><label>Upload an image</label></b><br>   
            <input type="file" id="myFile" name="filename"><br>
            <input type="submit" name='sub'><br>
    </form>

<?php
$target = "choose";
$uploadOk = 1;
$filepath = $target . ($_FILES["filename"]["name"]);
$imageFileType = strtolower(pathinfo($filepath,PATHINFO_EXTENSION));
if (isset($_POST['sub'])) {
    if (isset($_FILES['filename'])){
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0 ) {
        echo "Sorry, your file was not uploaded.";
        } 
        else {
            if (move_uploaded_file($_FILES["filename"]["tmp_name"], $filepath)) {
                echo "<div style='text-align: center; '>";
                echo "<img src=" . $filepath . " />";
                echo "</div>";         
                echo "Upload successfully";
            }
            else{
                echo"upload failed";
            }
            
        }
    }
}
?>
</body>
</html>
