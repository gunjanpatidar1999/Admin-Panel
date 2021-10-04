
<?php 

$s = $_SESSION['sid'];

if(is_dir("user/$s"))
{

    $a = fopen("user/$s/dts.txt","r");
    $name1 = fgets($a);
    echo "<h1>$name1</h1>";
    

}



?>