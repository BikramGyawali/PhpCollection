<?php
$server="Localhost";
$pass="";
$user="root";
$dbname="phpcollection";
$conn=mysqli_connect($server,$user,$pass,$dbname);
if($conn){
    echo" Connection Successful";
}
else{
    echo" Error in connection";
}

?>