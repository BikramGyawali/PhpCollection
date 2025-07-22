<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM pdetail";
$data=mysqli_query($conn,$query);
$num = mysqli_num_rows($data);
echo("<h2> Data available is $num </h2>");
if($num!=0){

?>

<table border="1" cellspacing="0" cellpadding="10">
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Gender</th>
    <th>Country</th>
    <th>Operation</th>

    <?php
    while($result=mysqli_fetch_assoc($data)){
        echo"
        <tr>
        <td> ".$result['id']."</td>
        <td> ".$result['name']."</td>
        <td> ".$result['email']."</td>
        <td> ".$result['phone']."</td>
        <td>".$result['gender']."</td>
    <td>".$result['country']."</td>

    <td> <a href='newedit.php?id=$result[id]'> 
    <input type='submit' value='Edit'></a>
        </td>
        <td> <a href='newdelete.php?id=$result[id]'> 
        <input type='submit' value='Delete'> </a>
        </td>
        </tr>";
    }
 
}

else{
    echo "No Record Found";
}
?>
</table>