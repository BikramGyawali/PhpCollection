<?php 
$server="localhost";
$user="root";
$pass="";
$dbname="phpcollection";
$conn =mysqli_connect($server,$user,$pass,$dbname);
if($conn){
    echo"Connection Sucessfull";
}
else{
    echo"Error in connection";
}
?>