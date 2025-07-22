<?php

$cookie_name='user';

if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(isset($_POST['submit'])){
     $name= $_POST['name'];
    $email=$_POST['email'];
    setcookie($cookie_name,$name,time()+300);
    setcookie('email',$email,time()+300);
    header("Location:newcookies.php");
    exit();

    // echo "Cookies have been set. Reload the page to see the changes.";
   }

   if(isset($_POST['clear'])){
    setcookie($cookie_name,"",time()-300);
    setcookie('email',"",time()-300);
    // header("Refrsh:0");
      header("Location:newcookies.php");
    exit();
    echo "Cookies have been cleared successfully.";
   }
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
        NAME: <input type="text" name="name" placeholder="Enter your name" >
        <br>
        EMAIL: <input type="email" name="email" placeholder="Enter your email" >
        <br>
        <Button type="submit" name="submit">Submit</Button>
        <br> <br>
        <Button name="clear" type="submit"> Clear Cookies</Button>
    </form>
<?php
if(!isset($_COOKIE[$cookie_name])|| !isset($_COOKIE['email'])){
    echo "Cookie for '".$cookie_name."' is not set. <br>";
    echo "Cookie for email is not set.";
    echo "Add cookie <a href='newcookies.php'>here</a>";
    exit();
}

else{
    echo"Cookie for '".$cookie_name."' is set. <br>";
    echo"Cookie value: '".$_COOKIE[$cookie_name]."' <br>";
    echo"Cookie for email is set. <br>";        
    echo"Cookie value: '".$_COOKIE['email']."' <br>";
    echo "Remove cookie <a href='newcookies.php'>here</a>";
}

?>
    
</body>
</html>