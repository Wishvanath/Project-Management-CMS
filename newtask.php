<?php
//include the connection file
require_once('./inc/dbcon.php');
//include the session file to get the particular user
require_once('./inc/session.php');

// save the new project and module in the database
    if(isset($_POST['btn-add-project'])){
        // grab form data
        $projectName = $_POST['txt_project_name'];
        
        //if projectname is empty
        if(!empty($projectName)){
            // write query to save the data
            $proquery = "INSERT INTO `pgm_project` (`project_id`, `project_name`, `st_date`) VALUES (NULL, '$projectName', CURRENT_TIMESTAMP)";
            $prorun = mysqli_query($con, $proquery) or die("Database Error".mysqli_error($con));
            if($prorun){
                echo '<script language="javascript">';
                echo 'alert("New Project added");';
                echo 'window.location.href = "userdash.php";';
                echo '</script>';
                
            }

        }else{
            echo '<script language="javascript">';
            echo 'alert("Project Name shouldnot be empty");';
            echo 'window.location.href = "userdash.php";';
            echo '</script>';
        }
    }
    if(isset($_POST['btn_add_module'])){
        // grab the form data
        $moduleName = $_POST['txt_module_name'];
        // check module name is empty
        if(!empty($moduleName)){
            // save module name into the databse
            $modquery = "INSERT INTO `pgm_module` (`module_id`, `module_name`, `st_date`) VALUES (NULL, '$moduleName', CURRENT_TIMESTAMP)";
            $modrun = mysqli_query($con, $modquery) or die("DatabaseError".mysqlierror($con));
            if($modrun){
                echo '<script language="javascript">';
                echo 'alert("New Module added");';
                echo 'window.location.href = "userdash.php";';
                echo '</script>';
            }

        }else{
            // show alert message 
            echo '<script language="javascript">';
            echo 'alert("Module Name shouldnot be empty");';
            echo 'window.location.href = "userdash.php";';
            echo '</script>';
        }
    }
// end of to save new project and module logic



// add new task in the database
    if(isset($_POST['btn_new_task'])){
        // grab the form data
        $projectName = $_POST['projectName'];
        $moduleName = $_POST['moduleName'];
        $task_date = date('Y-m-d');
        $task_descp = $_POST['userNewTask'];
        $email_id = $session_id;
        $flag = "p";
        // check if task field is empty
        if(!empty($task_descp)){
            // do stuff to save in the database
            $taskquery = "INSERT INTO `pgm_task` (`task_id`, `emp_id`, `emp_email`, `project_name`, `module_name`, `task_details`, `comment`, `date`, `flag`) VALUES (NULL, '', '$email_id', '$projectName', '$moduleName', '$task_descp', '', '$task_date', '$flag')";
            $taskrun = mysqli_query($con, $taskquery) or die("Database Error".mysqli_error($con));
            if($taskrun){
                echo '<script language="javascript">';
                echo 'alert("Added New task");';
                echo 'window.location.href = "userdash.php";';
                echo '</script>';
            }

        }else{
            echo '<script language="javascript">';
            echo 'alert("Task details shouldnot be empty");';
            echo 'window.location.href = "userdash.php";';
            echo '</script>';
        }
        
    }
// end of new task query



























if(isset($_POST[''])){
    // check btn new task is pressed or not
    echo"You have pressed the add button";
    // // grab the form data
    // $new_task = mysqli_real_escape_string($con,trim($_POST['userNewTask']));
    // // take a flag varible for new task and set it n
    // $flag ="p";

    // //grab the user data from the database
    // $userdata = "SELECT * FROM `pgm_user` WHERE `email_address` = '$session_id'";
    // $userrun = mysqli_query($con, $userdata);
    // if(mysqli_num_rows($userrun) > 0){
    //     $data = mysqli_fetch_assoc($userrun);
    // }else{
    //     echo"Database doesnot exits with this username";
    // }
    // $emp_id = $data['emp_id'];
    
    // // write query to save new task in the database
    // $query ="INSERT INTO `pgm_task` (`task_id`, `emp_id`, `task_details`, `date`, `flag`) VALUES (NULL, '$emp_id', '$new_task', '12/12/1212', '$flag')";
    // $run = mysqli_query($con, $query) or die("Database Error".mysqli_error($con));
    // if($run){
    //     header("Location: userdash.php");
    // }
    
}//end of if 

if(isset($_POST['btnAddPro'])){
    //grab the form data
    $project_name = $_POST['txt_project_name'];
    echo"$project_name";
}
if(isset($_POST['btn_test'])){
    echo"You have pressed the test button";
}
?>