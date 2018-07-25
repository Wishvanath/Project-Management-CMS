<?php
// session start
session_start();
if(isset($_SESSION['email_address'])){
    // store in any variable
    $session_id = $_SESSION['email_address'];
    // echo"You have logged in with session";
    // echo"$session_id";
}elseif(isset($_COOKIE['email_address'])){
    $session_id = $_COOKIE['email_address'];
    // echo"You have logged in with cookie";
    // echo"$session_id";
}else{
    echo"Some Error";
    header("Location: index.php");
}

?>