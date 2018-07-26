<?php
    // include the connection file
    require_once('./inc/dbcon.php');
    // check reset button is pressed or not 
    if(isset($_POST['btn_reset'])){
        //grab the reset form data
        $newEmail = mysqli_real_escape_string($con, trim($_POST['newEmail']));
        $newPassword = mysqli_real_escape_string($con, md5(trim($_POST['newPassword'])));
        $retypePass = mysqli_real_escape_string($con, md5(trim($_POST['retypePass'])));
        if($newPassword !== $retypePass){
            echo '<script language="javascript">';
            echo 'alert("Password didnot matched");';
            echo 'window.location.href = "forgetpass.php";';
            echo '</script>';
            exit();
        }
        // check this email is exists in database or not
        $emailquery = "SELECT * from `pgm_user` WHERE `pgm_user`.`email_address` = '$newEmail'";
        $emailrun = mysqli_query($con, $emailquery) or die("Databse Internal Error".mysqli_error($con));
        if(mysqli_num_rows($emailrun) > 0){
            // write query to update in the databse
            $query = "UPDATE `pgm_user` SET `password` = '$newPassword' WHERE `pgm_user`.`email_address` = '$newEmail'";
            $run = mysqli_query($con, $query);
            if($run){
                echo '<script language="javascript">';
                echo 'alert("You have successfully reset your Password");';
                echo 'window.location.href = "index.php";';
                echo '</script>';
            exit();
            }else{
                echo"Cannot reset your password";
            }
        }else{
            echo '<script language="javascript">';
            echo 'alert("Your email address doesnot exists.");';
            echo 'window.location.href = "forgetpass.php";';
            echo '</script>';
            exit();
        }

    }
?>