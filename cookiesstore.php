<?php 
    $cookie_name="user";
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $email=$_POST['email'];


    setcookie($cookie_name,$name,time() + 30);
    
}

?>

<html>
    <body>
<!-- <form action="" method="POST">

</form> -->

        <?php
 if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie for .$cookie_name. is not set.";

 }
 else{
    echo "cookie of name $cookie_name is set";
    echo"Cookie value".$_COOKIE[$cookie_name];
 }

        ?>
    </body>
</html>