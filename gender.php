
<?php 

$s = $_SESSION['sid'];

if(is_dir("user/$s"))
{

    $a = fopen("user/$s/dts.txt","r");
    fgets($a);
    fgets($a);
    $gender1 = fgets($a);
    echo "<h1>$gender1</h1>";
    

}



?>