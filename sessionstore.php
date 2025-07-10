<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_POST['submit'])){
     $_SESSION['name']=$_POST['name'];
 $_SESSION['email']=$_POST['email'];
 header("Location:sessiondisplay.php");
exit();
}}
// if(isset($_POST['Clear'])){
//      unset($_SESSION['name']);  // removing the name only
//         // session_destroy();
//         echo "✅ Session 'name' has been removed.<br>";
//         echo "👉 Remaining Session Data:<br>";
//         print_r($_SESSION);

//     }
// }

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
 <Button name="Clear" type="submit "> 
    Clear session
</Button>
</form>

</body>
</html>