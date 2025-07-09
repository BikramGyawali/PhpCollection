<?php

session_start();
if(!isset($_SESSION['name'])||!isset($_SESSION['email'])){
    echo "No session found <a href='sessionstart.php'>Go Back</a>";
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
    <h2>Session Stored Data</h2>
    <p><strong>Name:</strong> <?php echo $_SESSION['name'];?></p>
    <p>Email : <?php echo $_SESSION['email'];?></p>
</body>
</html>