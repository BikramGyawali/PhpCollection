<?php
include("connection.php");
$id= $_GET['id'] ; // getting the id from the record.php
$query="DELETE FROM pdetail where id='$id'";
$delete=mysqli_query($conn,$query);
if($delete){
    echo"Record delet of id $id";
}

else{
    echo"No Record found";
}
?>