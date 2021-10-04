<?php

session_start();
error_reporting(0);
$sid = $_SESSION['sid'];
$opass = $_SESSION['pass'];
if (empty($sid) && empty($opass)) {
    header("location:first.php");
}

// if (isset($_POST['sub'])) {
//     $old = $_POST['old'];
//     $new = $_POST['new'];
//     $cnew = $_POST['cnew'];

//     if ($opass == $old) {
//         if ($new == $cnew) {

//             if (is_dir("user/$sid")) 
//             {



//                 // fgets($a);

//                 // $oldpass = fgets($a);
//                 // $oldpass = $cnew;


//             }
//         } else {
//             $errormsg = "Enter Correct Confirm Password!";
//         }
//     } else {
//         $errormsg = "Enter Correct Old Password!";
//     }
// }

//

if (isset($_POST['sub'])) {
    $fread2 = [];

    $old = $_POST['old'];
    $new = $_POST['new'];
    $cnew = $_POST['cnew'];

    if ($opass == $old) {

        if ($new == $cnew) {

            $file = fopen("user/$sid/dts.txt", "r", FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
            //  $file=fopen("data.txt","w") or die("Cannot open"); 
            if (filesize("user/$sid/dts.txt") > 0) {
                $read = fread($file, filesize("user/$sid/dts.txt"));
                $fread2 = explode(" ", $read);
                fclose($file);
            }


            for ($i = 0; $i < count($fread2); $i++) {

                if ($fread2[$i] == $old) {
                    $fread2[$i] = $new;
                }
            }

            $fread2 = implode(" ", $fread2);
            print_r($fread2);
        

            $file1 = fopen("user/$sid/dts.txt", "w");
            fwrite($file1, $fread2);
            fclose($file1);
            header("location:login.php");
        } else {
            $errormsg = "enter correct new password";
        }
    }
    else {
        $errormsg = "Enter Correct old password!";
    }
} 



?>
















<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Change Password</title>
</head>

<body>
    <br>
    <div class="container">
        <h1>Change Password</h1>
        <br>
        <?php
        if (!empty($errormsg)) {
        ?>
            <div class="alert alert-danger"> <?php echo $errormsg; ?></div>
        <?php
        }
        ?>

        <form method="POST">
            <div class="form-group">
                <label><b>Old Password</b></label>
                <input type="password" class="form-control" placeholder="Enter old password" name="old">
            </div>
            <div class="form-group">
                <label><b>New Password</b></label>
                <input type="password" class="form-control" placeholder="Enter new password" name="new">
            </div>
            <div class="form-group">
                <label><b>Confirm New Password</b></label>
                <input type="password" class="form-control" placeholder="Enter confirm password" name="cnew">
            </div>

            <button type="submit" class="btn btn-info" name="sub" >Submit</button>
        </form>

    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>