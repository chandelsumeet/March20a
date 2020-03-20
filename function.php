<?php

function login()
{
    if (isset($_POST["username"]) && isset($_POST["password"])) {


        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == "sumeet" && $password == 123) {

           

            session_start();

            $_SESSION['name'] = "helloworld";

            $name = "cookie1";
            $value = $_SESSION["name"];
            $expire = time() + (60 * 60);

            setcookie($name, $value, $expire);

            header("location:page2.php");
        }   
        else
        {
            echo "invalid login";
        }
    
    }
}


function logout()
{
setcookie("cookie1",000,time()-3600);
unset($_SESSION["name"]);
header("location:index.php");
  
}

function sum()
{
    $_SESSION["sum"]=$_POST["num1"] +$_POST["num2"];

    $_SESSION["status"]="Active";
    
    header("location:page3.php");
    
}






?>