<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location:Login.php");
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
<h2>Welcome to home page</h2>
<p>
    Welocme <?php echo $_SESSION['name'];?> !
</p>
<form action="logout.php" method="POST">
   <button type="submit" name="save">Log out</button>
</form>
</body>
</html>