<?php
session_start();
$valid_name="Bikram";
$pass="12345";
if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(isset($_POST['save'])){
     $name=$_POST['name'];
     $password=$_POST['password'];

   }
   if($name==$valid_name&& $password==$pass){
    $_SESSION['name']=$name;
    header("Location:home.php");
   }
   else{
    $error="Password Doesnot match";
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <form action="" method="POST">
        <h2>Login Page</h2>
        <?php if(isset($error)) 
        echo"<p style='color:red'> $error</p>";
        ?>
        USername:<input type="text" name="name" required>
        Password:<input  type="password" name="password" required>
        <input type="submit" name="save" value="Login">
    </form>
</body>
</html>