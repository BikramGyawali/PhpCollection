<?php
session_start();
if(!isset($_SESSION['name'])||!isset($_SESSION['email'])){
    echo "No session found <a href='newsessionstore.php'>Go BACK </a>";
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
    NAME: <?php echo $_SESSION['name'];?>
    Email: <?php echo $_SESSION['email'];?>

<br>
    <a href="newsessionstore.php">Go back to store session</a>
    <br>
    <a href="newsessoindelete.php">Delete session</a>
    <br>
    <a href="calculator.php">Go to calculator</a>
</body>
</html>