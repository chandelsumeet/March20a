<?php

include("function.php");
session_start();

 $_SESSION["status"]="inactive";

    

    if(isset($_COOKIE["cookie1"]))
    {

        if(!isset($_SESSION['name']))
        {
            $_SESSION['name']=$_COOKIE['cookie1'];

        }

        
       
    }
    else
    {
        header("location:index.php");
    }

    

    



if(isset($_POST['sum']))
{
    sum();
}




?>

<html>
<body>

    <h3>Welcome to Page2  </h3>
    
    <form action="page2.php" method="post">
    <input type="text" name="num1" placeholder="enter first number">
    <input type="text" name="num2" placeholder="enter second number">
    <input type="submit" name="sum" value="sum">
    
    
    
    </form>

</body>
</html>