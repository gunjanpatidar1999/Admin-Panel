
<?php 

$s = $_SESSION['sid'];

if(is_dir("user/$s"))
{

    $a = fopen("user/$s/dts.txt","r");
    fgets($a);
    fgets($a);
    fgets($a);
    fgets($a);
    $img = fgets($a);
    $img = trim($img);
    
    echo "<img src='user/$s/$img' alt='image' height=200px width=200px >";
    

}



?>