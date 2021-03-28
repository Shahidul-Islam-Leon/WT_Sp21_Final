<?php
    if(!isset($_COOKIE["username"])){
        header("Location: Login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<h1>WELCOME <?php echo $_COOKIE["username"];?> </h1>
</html>