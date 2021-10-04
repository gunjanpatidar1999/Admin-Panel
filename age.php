
<?php 

$s = $_SESSION['sid'];

if(is_dir("user/$s"))
{

    $a = fopen("user/$s/dts.txt","r");
    fgets($a);
    fgets($a);
    fgets($a);
    $age1 = fgets($a);
    echo "<h1>$age1</h1>";
    

}



?>