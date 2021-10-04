<?php 

session_start();
$sid = $_SESSION['sid'];
$opass = $_SESSION['pass'];
if(empty($sid) && empty($opass))
{
    header("location:first.php");
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

  <title>Dashboard</title>
</head>

<body>
  <?php include("nav.php") ?>
  <br>
  <div class="container-fluid">
    <h1>Welcome To Dashboard <?php echo @$_GET['uname'];  ?></h1>
    <section class="row ">
      <aside class="col-4"><?php include("sidebar.php")?> </aside>
      <aside class="col-8">
        <?php
        switch(@$_GET['con'])
        {
          case 'image' : include("image.php");
          break;
          case 'name' : include("name.php");
          break;
          case 'age' : include("age.php");
          break;
          case 'gender' : include("gender.php");
          break;
          case 'changeimage' : include("changeimage.php");
          break;
        }
         

        ?>

        
    </aside>
    </section>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>