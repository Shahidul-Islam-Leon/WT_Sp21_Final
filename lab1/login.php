<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "leon" && $password == "1234") {
        setcookie("username", $username, time() + 120);
        header("Location: dashboard.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">



<head>
    <title>Document</title>
</head>

<body>



    <form action="" method="post">
        <table>
            <tr>
                <td><span>Username</span> </td>
                <td><input type="text" value="" placeholder="Username" name="username"> </td>
            </tr>
            
            <tr>
                <td><span>Password </span></td>
                <td><input type="password" placeholder="Password" name="password"></td>


            </tr>
           
            <tr>
                <td colspan="2" align="right"><input type="submit" value="   Login   " name="login">
            </tr>

        </table>


    </form>

</body>

</html>