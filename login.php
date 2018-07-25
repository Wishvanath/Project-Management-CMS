<?php
// include the connection file 
require_once('./inc/dbcon.php');
if(isset($_POST['btn_login'])){
    // check login btn is pressed or not 
    //echo"You have pressed the login button";

    // grab the form data
    $user_id = mysqli_real_escape_string($con,strtoupper(trim($_POST['empId'])));
    $user_password = mysqli_real_escape_string($con, md5(trim($_POST['empPassword'])));
    // echo"$user_id";
    // echo"<br/>";
    // echo"$user_password";

    // to check rember options
    if(isset($_POST['re'])){
        $re = "checked";
    }
    else{
        $re = "unchecked";
    }
    // check username and password 
    $query ="SELECT * FROM `pgm_user` WHERE `emp_id` = '$user_id' and `password` = '$user_password'";
    $run = mysqli_query($con, $query) or die("Database Error".mysqli_error($con));
    if(mysqli_num_rows($run) > 0){
        //grab the useremail to store the session
        $user_email = mysqli_fetch_assoc($run);
        // check remember me option in checked or not
        if($re == 'checked'){
            //set the cookie variable with emailid
            setcookie("email_address", $user_email['email_address'], time() + (86400*10));
            header("Location: userdash.php");
        }else{
            // start session
            session_start();
            $_SESSION['email_address'] = $user_email['email_address'];
            header("Location: userdash.php");
        }
    }else{
        echo '<script language="javascript">';
        echo 'alert("Invalid User Name and Password please try again ..!");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }


}
?>