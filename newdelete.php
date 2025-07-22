<?php
include 'connection.php';
$id= $_GET['id'];
$query= "DELETE FROM pdetail WHERE id='$id'";
$delete = mysqli_query($conn,$query);

if($delete){
    echo "Record with ID $id has been deleted successfully.";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

?>