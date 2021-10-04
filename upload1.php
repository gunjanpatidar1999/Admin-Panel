<?php

if (isset($_POST['sub'])) {

    


    $tmp = $_FILES['att']['tmp_name'];
    $fname = $_FILES['att']['name'];
    
    $ext = pathinfo($fname, PATHINFO_EXTENSION);
    if($ext == "jpeg" || $ext == "png" || $ext == "pdf" || $ext == "jpg")
    {
        $fn = "Attach-".rand()."-  ".$ext;
    if (!empty($tmp)) {
        $dest = "upload/";
        if (move_uploaded_file($tmp, $dest . $fn)) {
            echo "File uploaded successfully";
        } else {
            echo "uploading error";
        }
    } else {
        echo "please select file";
    }
}
else
{
    echo "Please upload correct format file";
}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploading</title>
</head>

<body>
    <h1>File Uploading</h1>
    <form method="post" enctype="multipart/form-data">

        Attach : <input type="file" name="att[]" multiple><br>
        <input type="submit" name="sub" value="Upload">
    </form>
</body>

</html>