
<div>
<?php 
include("connection.php");
error_reporting(0);
$query="SELECT * FROM pdetail";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

// echo("<h2> Data available is '.$total.' </h2>");

if($total!=0){

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
    echo "
    <tr>
    <td>".$result['id']."</td>
    <td>".$result['name']."</td>
    <td>".$result['email']."</td>
    <td>".$result['phone']."</td>
    <td>".$result['gender']."</td>
    <td>".$result['country']."</td>
    <td><a href='edit.php?id=$result[id]&name=$result[name]&email=$result[email]&phone=$result[phone]&gender=$result[gender]&country=$result[country]'>
    <input type='submit' value='Edit'> </a>

    <td> <a href='delete.php?id=$result[id]'>
    <input type='submit' value='Delete'> </a>

    </tr> ";
}
}
else{

    echo 'No Record Found';
}

?>
</table>
</div>
