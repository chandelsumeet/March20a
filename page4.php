
<?php

include("function.php");
session_start();



    if(isset($_COOKIE["cookie1"]))
    {

        if(!isset($_SESSION['name']))
        {
            $_SESSION['name']=$_COOKIE['cookie1'];
        }

        
        echo "welcome to Page 4 Session Name is"."  ".$_SESSION["name"];
    }
    else
    {
        header("location:index.php");
    }
    



if(isset($_POST['logout']))
{
    logout();
}




?>

<html>
<body>
    
    <form action="page4.php" method="post">
        <br>
    <input type="submit" name="logout" value=" click to  logout" >
    
    
    
    </form>

</body>
</html>