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
if (isset($_POST['sub'])) {
    if (isset($_FILES['filename'])) {
        $filepath = "" . $_FILES["filename"]["name"];
        if (move_uploaded_file($_FILES["filename"]["tmp_name"], $filepath)) {
             echo "<div style='text-align: center; '>";
            echo "<img src=" . $filepath . " />";
            echo "</div>";        } else {
            echo "Upload unsuccessfully";
        }
    }
}
?>
</body>
</html>
