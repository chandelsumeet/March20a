<?php

session_start();
include("function.php");




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

if($_SESSION["status"]!="Active")
{
	header("location:page2.php");
}
 else
    {
        echo "sum is"." ".$_SESSION["sum"]."<br>";
        $_SESSION["status"]="inactive";
    }

?>


<html>
    <body>
    
    <a href="page4.php">page4</a>

    </body>
</html>