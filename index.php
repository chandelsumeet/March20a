<?php

include("function.php");
login();



?>

<html>

<body>

    <form action="index.php" method="post">


        Name:<input type="text" name="username">
        password:<input type="password" name="password">
        <input type="submit" name="submit"  value="submit">

    </form>
</body>

</html>