<?php 
    $cookie_name="user";
    
if($_SERVER["REQUEST_METHOD"]=="POST"){

    // code to store cookie
   if(isset($_POST['save'])){
     $name=$_POST['name'];
    $email=$_POST['email'];


    setcookie($cookie_name,$name,time() + 300);
    //for email
    setcookie('mail',$email,time()+ 300);
    echo"Cookies has been set reload the page";
  
   }
   // code to remove the cookie
   if(isset($_POST['remove'])){
    setcookie($cookie_name,"",time()-300);
    setcookie('mail',"",time()-300);
      header("Refresh:0");
    echo"Cookie is remove";

   }

}

?>

<html>
    <body>
 <form method="POST">
            Name: <input type="text" name="name" ><br>
            Email: <input type="email" name="email" ><br>
            <input type="submit" name="save" value="Save Cookie">
            <input type="submit" name="remove" value="Remove Cookie">
        </form>
<hr>
        <?php
 if(!isset($_COOKIE[$cookie_name])||!isset($_COOKIE['mail'])){
    echo "Cookie for '".$cookie_name."' is not set. <br>";

    echo "Cookie for mail is not set";

 }
 else{
    echo "cookie of name '".$cookie_name."' is set.<br>";
    echo"Cookie value".$_COOKIE[$cookie_name]. "<br>"; 
    echo"Cookie of mail is set. <br>";
    echo("Cookie value ".$_COOKIE['mail']."<br>") ;
 }

        ?>
    </body>
</html>