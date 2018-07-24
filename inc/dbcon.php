<?php
// declare the connection variable
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pgm";

// create connection
$con = mysqli_connect($servername,$username,$password,$dbname);
if($con){
    // echo"Database connected successfully";
}else{
    die("connection failed :" .mysqli_connect_error());
}
?>