<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['submit'])){
        $_SESSION['name']=$_POST['name'];
        $_SESSION['email']=$_POST['email'];
        header("Location:newsessiondisplay.php");
        exit();
    }
}
?>

<?php 
 if(isset($_POST['clear'])){
 unset($_SESSION['name']);
//  session_destroy();
 echo"Session cleared 'name' successfully.";
 echo "<br> Remaining session data: <br>";
 print_r($_SESSION);
 exit();
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" name= "name" id="name"  /> <br><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"  /> <br><br><br>
        <button name="submit" type="submit">SUbmit</button>
        <br><br>
        <Button name='clear'>Clear</Button>
    </form>
</body>
</html>