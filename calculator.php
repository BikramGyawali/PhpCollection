<?php
$x="";
if(isset($_POST["add"])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$a+$b;
    $x="$a + $b =$c";
}
?>
<html>
    <head>
        <title>
            Calculator
        </title>
    </head>
    <body>
        <h1>Calculator to find the value of x</h1>
        <form action="" method="POST">
            A: <input type="number" name="a" placeholder="Enter  the first Number">
            <br><br><br>
            B:<input type="number" name="b" placeholder="Enter second number">
            <br> <br><br><br>
         
            <Button name="add">Add</Button> <br><br><br>
            <h3>
                <?php
                echo"Result :x=$x";
                ?>
            </h3>
        </form>
    </body>
</html>