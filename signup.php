<?php
require_once('./inc/dbcon.php');
if(isset($_POST['btn_signup'])){
    // check btn is pressed or not 
    // echo"You have pressed the register button";

    // grab the form data
    $fullName = mysqli_real_escape_string($con, trim($_POST['fullName']));
    $empId = mysqli_real_escape_string($con, trim($_POST['empId']));
    $designation = mysqli_real_escape_string($con, trim($_POST['designation']));
    $contactNo = mysqli_real_escape_string($con, trim($_POST['contactNo']));
    $emailId = mysqli_real_escape_string($con, trim($_POST['emailId']));
    $password = mysqli_real_escape_string($con, trim($_POST['password']));
    $confirmPassword = mysqli_real_escape_string($con, trim($_POST['confirmPassword']));
    
    // check field is valid or not
    if(empty($fullName)){
        echo"please fill the fullname";
    }
    if ($password !== $confirmPassword) {
        echo '<script language="javascript">';
          echo 'alert("Password is not matched.");';
          echo 'window.location.href = "index.php";';
          echo '</script>';
    }else{

        // find the existing user
        $findUser = "SELECT `emp_id` FROM `pgm_user` WHERE `email_address` = "$emailId";"
        $emailquery = mysqli_query($con, $findUser) or die("Database Error");
        if(mysqli_num_rows($emailquery) > 0){
            echo"employee id is already exists";
        }

        // write query to insert into the databse
        $query = "INSERT INTO `pgm_user` (`user_id`, `full_name`, `emp_id`, `designation`, `contact_no`, `email_address`, `password`) VALUES (NULL, '$fullName', '$empId', '$designation', '$contactNo', '$emailId', '$password')";
        $run = mysqli_query($con,$query) or die("cannot insert data into the databse".mysqli_error($con));
        if($run){
            echo '<script language="javascript">';
            echo 'alert("You have signup sucessfully please login");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
        }
    }

}


?>