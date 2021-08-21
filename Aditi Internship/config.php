<?php 

$server="localhost";
$username="root";
$password="";
$db="sparks_bank";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //Connection successfully established
}

else
    die("Could not Connect to the Database " .mysqli_connect_error()); 
    
?>
