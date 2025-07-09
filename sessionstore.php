<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
 $_SESSION['name']=$_POST['name'];
 $_SESSION['email']=$_POST['email'];
 header("Location:sessiondisplay.php");
exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
   
</head>
<body>
    <form method="POST">
    <label for="name">Name:</label>    
    <input type="text" name="name" required id="name">
    <br>
    <label for="email"> Email:</label>
 <input type="email" name="email" required id="email">
<br>
 <Button name="submit" type="submit">
    Submit
 </Button>
</form>

</body>
</html>