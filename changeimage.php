<?php 

error_reporting(0);
$sid = $_SESSION['sid'];
// if(isset($_POST['sub']))
// {
//     $tmp = $_FILES['image']['tmp_name'];
//     $fname = $_FILES['image']['name'];



// if(is_dir("user/$s"))
// {

//     $a = fopen("user/$s/dts.txt","a+");
//     fgets($a);
//     fgets($a);
//     fgets($a);
//     fgets($a);
//     $img = fgets($a);
//     echo $img."<br> 1";

//     $img = $fname;

// echo $img;
//     // echo "<img src='user/$s/$img' alt='image' height=200px width=200px >";
    

// }
// }




if (isset($_POST['sub'])) {
    $fread2 = [];

    $tmp = $_FILES['image']['tmp_name'];
    $fname = $_FILES['image']['name'];



           
            //  $file=fopen("data.txt","w") or die("Cannot open"); 
           

            if (move_uploaded_file($tmp, "user/$sid/$fname")) {
              $file = fopen("user/$sid/dts.txt", "r", );

              if (filesize("user/$sid/dts.txt") > 0) {
                $read = fread($file, filesize("user/$sid/dts.txt"));
                $fread2 = explode(" ", $read);
                fclose($file);
              }
           
            for ($i = 0; $i < count($fread2); $i++) {

               
                   if($i == 7)
                   {
                 $fread2[$i+1] = $fname; 

                }
               
            }
            $fread2 = implode(" ", $fread2);

            print_r($fread2);

            

            $file1 = fopen("user/$sid/dts.txt", "w");
            fwrite($file1, $fread2);
            fclose($file1);
            //header("location:login.php");
        } else {
            $errormsg = "enter correct new password";
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

    <title>Change Image</title>
  </head>
  <body>
      <br>
      <br>
    <div class="container">

    <h1>Change Image</h1>

    <form method="POST" enctype="multipart/form-data">

      <div class="form-group">
        <label>Select New Image</label>
        <input type="file" class="form-control" name="image">
        
      </div>

      
      <button type="submit" class="btn btn-info " name="sub">Submit</button> 
    </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>