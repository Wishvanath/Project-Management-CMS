<?php
//include the connection file
require_once('./inc/dbcon.php');
//include the session file to get the particular user
require_once('./inc/session.php');
if(isset($_POST['btn_new_task'])){
    // check btn new task is pressed or not
    // echo"You have pressed the add button";

    // grab the form data
    $new_task = mysqli_real_escape_string($con,trim($_POST['userNewTask']));
    // take a flag varible for new task and set it n
    $flag ="p";

    //grab the user data from the database
    $userdata = "SELECT * FROM `pgm_user` WHERE `email_address` = '$session_id'";
    $userrun = mysqli_query($con, $userdata);
    if(mysqli_num_rows($userrun) > 0){
        $data = mysqli_fetch_assoc($userrun);
    }else{
        echo"Database doesnot exits with this username";
    }
    $emp_id = $data['emp_id'];
    
    // write query to save new task in the database
    $query ="INSERT INTO `pgm_task` (`task_id`, `emp_id`, `task_details`, `date`, `flag`) VALUES (NULL, '$emp_id', '$new_task', '12/12/1212', '$flag')";
    $run = mysqli_query($con, $query) or die("Database Error".mysqli_error($con));
    if($run){
        header("Location: userdash.php");
    }
    
}
?>