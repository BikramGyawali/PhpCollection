<?php
include("connection.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];

    $query="INSERT  INTO pdetail(name,email,phone,gender,country) VALUES('$name','$email','$phone','$gender','$country')";

    if(mysqli_query($conn,$query)){
        echo"Data inserted sucessfully";
    }
    else{
        echo"Error in insertion";
    }
    mysqli_close($conn);
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
    <input type="text" name="name" id="name" required>
    </div>
   <div class="form-group"> <label for="email">
        Email:
    </label>
    <input type="email" name="email" id="email" required></div>
<div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" required></div>

 <div class="form-group">
       <label for="gender">Gender:</label>
    <input type="text" name="gender" id="gemder" required>
 </div>

   <div class="form-group">
     <label for="country">Country:</label>
    <input type="text" name="country" id="country" required>
   </div>
   <button type="submit"name="submit">Submit</button>
   </div>
     </form>   
</body>
</html>