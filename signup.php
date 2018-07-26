<?php
require_once('./inc/dbcon.php');
if(isset($_POST['btn_signup'])){
    // check btn is pressed or not 
    
    // grab the form data
    $fullName = mysqli_real_escape_string($con, trim($_POST['fullName']));
    $empId = mysqli_real_escape_string($con, strtoupper(trim($_POST['empId'])));
    $designation = mysqli_real_escape_string($con, trim($_POST['designation']));
    $contactNo = mysqli_real_escape_string($con, trim($_POST['contactNo']));
    $emailId = mysqli_real_escape_string($con, trim($_POST['emailId']));
    $password = mysqli_real_escape_string($con, md5(trim($_POST['password'])));
    $confirmPassword = mysqli_real_escape_string($con, md5(trim($_POST['confirmPassword'])));
    
    // check field is valid or not
    if ($password !== $confirmPassword) {
        echo '<script language="javascript">';
        echo 'alert("Password didnot matched");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
        exit();
       
    }else{
        // find the existing employee id
        // $findempid = "SELECT `emp_id` FROM `pgm_user` WHERE `emp_id` = '$empId'";
        // $empidrun = mysqli_query($con, $findempid) or die("Database Error");
        // if(mysqli_num_rows($empidrun) > 0){
        //     echo '<script language="javascript">';
        //     echo 'alert("Employee Id is already exist");';
        //     echo 'window.location.href = "index.php";';
        //     echo '</script>';
        //     exit();
        // }

        // find the existing email id
        $findemail = "SELECT `email_address` FROM `pgm_user` WHERE `email_address` = '$emailId'";
        $emailrun = mysqli_query($con, $findemail) or die("Databse Error".mysqli_error($con));
        if(mysqli_num_rows($emailrun) > 0){
            echo '<script language="javascript">';
            echo 'alert("Email Address is already exist");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
            exit();
        }
        // write query to insert into the databse
        $query = "INSERT INTO `pgm_user` (`user_id`, `full_name`, `emp_id`, `designation`, `contact_no`, `email_address`, `password`) VALUES (NULL, '$fullName', '$empId', '$designation', '$contactNo', '$emailId', '$password')";
        $run = mysqli_query($con,$query) or die("cannot insert data into the databse".mysqli_error($con));
        if($run){
            echo '<script language="javascript">';
            echo 'alert("You have signup Successfully");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
            exit();
        }
    }

}

?>