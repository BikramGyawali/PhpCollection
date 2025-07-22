<?php
include("newconnection.php");

 function valid ($data){
    $data=trim($data);
    $data=htmlspecialchars($data);
    $data=stripslashes($data);
    return $data;

 }

 if(isset($_POST['submit'])){
    $name=valid($_POST['name']);
    $email=valid($_POST['email']);
    $phone=valid($_POST['phone']);
    $gender=valid($_POST['gender']);
    $country=valid($_POST['country']);

    $errors=[];

    if(empty($name)||empty($email)||empty($phone)||empty($gender)||empty($country)){
        $errors[]="All fields are required";
    }
    if(!preg_match("/^[0-9]{10}$/",$phone)){
        $errors[]="Phone number does not match the pattern";
    }

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors[]="Email does not match the pattern";
    }

   

    if(!empty($errors)){
 foreach($errors as $error){
        echo "<p style='color:red;'>* $error</p>";
    }
    }
    else{
        $query= "INSERT INTO pdetail(name,email,phone,gender,country)VALUES('$name','$email','$phone','$gender','$country')";

        $data=mysqli_query($conn,$query);
        if($data){
            echo "Data inserted successfully";
        }
        else{
            echo "Error in insertion";
        }
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
    <input type="text" name="name" id="name" >
    </div>
   <div class="form-group"> <label for="email">
        Email:
    </label>
    <input type="email" name="email" id="email" ></div>
<div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" ></div>

 <div class="form-group">
       <label for="gender">Gender:</label>
    <input type="text" name="gender" id="gender" >
 </div>

   <div class="form-group">
     <label for="country">Country:</label>
    <input type="text" name="country" id="country" >
   </div>
   <button type="submit"name="submit">Submit</button>
   </div>
     </form>   
</body>
</html>