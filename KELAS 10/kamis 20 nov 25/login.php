<?php
session_start();
echo $_SESSION["email"];

if (isset($_SESSION['email'])) {
    echo $_SESSION['email'];
    echo "<br>";
    echo "a href='logout.php>logout'</a>";
 }  else {
    echo "register";
    echo "<br>";
    echo "login";

    
}

?>