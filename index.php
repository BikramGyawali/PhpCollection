<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php collection</title>

    <style>

        body{
            /* margin: 20px;
            padding: 20px; */
             font-size:20px;

        }
        label{
            
          margin-right: 20px;


        }
        input{
            margin: 10px;
            padding: 2px;
           

        }
        .section{
            display:flex;
            flex-direction:column;
  
        }
        .form-group{
    
          margin-bottom: 20px;  
         
        }
        button{
            height:40px;
            width: 100px;
  padding: 2px;
  margin: 2px;
  align-items:center;
 
        }
        </style>
</head>
<body>
    
    <form action="" method="POST">
   <div class="section">
    <div class="form-group">
        <label for="name">Name:</label>
    <input type="text" name="name" id="name" require>
    </div>
   <div class="form-group"> <label for="email">
        Email:
    </label>
    <input type="email" name="email" id="email" require></div>
<div class="form-group">
    <label for="phone">Phone:</label>
    <input type="phone" name="phone" id="phone" require></div>

 <div class="form-group">
       <label for="age">Age:</label>
    <input type="text" name="age" id="age" require>
 </div>

   <div class="form-group">
     <label for="country">Country:</label>
    <input type="text" name="country" id="country" require>
   </div>
   <button type="submit">Submit</button>
   </div>
     </form>   
</body>
</html>