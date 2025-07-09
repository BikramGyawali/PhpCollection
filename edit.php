<?php
include("connection.php");
$id=$_GET['id'];
$query = "SELECT * FROM pdetail WHERE id='$id'";

$data=mysqli_query($conn,$query);
$record=mysqli_fetch_assoc($data);


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];

    $sql="UPDATE pdetail SET name='$name',email='$email',phone='$phone',gender='$gender',country='$country' where id='$id'";
    $update_data=mysqli_query($conn,$sql);

    if($update_data){
        header('Location:records.php');
        exist();
    }

else{
    die(mysqli_error($conn));
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php collection</title>

    <style>

        body{
            
             font-size:20px;

        }
        label{
            
          margin-right: 20px;


        }
        input{
            margin: 10px;
            padding: 2px;
           

        }
        .section{
            display:flex;
            flex-direction:column;
  
        }
        .form-group{
    
          margin-bottom: 20px;  
         
        }
        button{
            height:40px;
            width: 100px;
  padding: 2px;
  margin: 2px;
  align-items:center;
 
        }
        </style>
</head>
<body>
    
    <form action="" method="POST">
   <div class="section">
    <div class="form-group">
        <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo $record['name'];?>" required>
    </div>
   <div class="form-group"> <label for="email">
        Email:
    </label>
    <input type="email" name="email" id="email"  value="<?php echo $record['email'];?>"required></div>
<div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone"  value="<?php echo $record['phone'];?>"required></div>

 <div class="form-group">
       <label for="gender">Gender:</label>
    <input type="text" name="gender" id="gemder"  value="<?php echo $record['gender'];?>"required>
 </div>

   <div class="form-group">
     <label for="country">Country:</label>
    <input type="text" name="country" id="country "value="<?php echo $record['country'];?>" required>
   </div>
   <button type="submit"name="submit">Submit</button>
   </div>
     </form>   
</body>
</html>