<?php
// include the session file 
require_once('./inc/session.php');
?>
<!-- end of session and cookie tag -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Project Management Dashboard</title>
    <link rel="icon" type="image/png" href="img/skymapLogo.png">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/animated.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet"> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


    <!-- page navbar section -->
    <div class="row navbar_section">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SKYMAP GLOBAL</a>
                  </div>
              
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#"><p class="user_name"><?php echo"$session_id" ?></p></a></li>
                      <li><a href="logout.php"><button class="btn btn-warning">Logout</button></a></li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
    </div>
    <!-- end of page navbar section -->

    <!-- page taskbody-section -->
    <div class="container task_body">
        <div class="row first_row">
            <div class="col-md-6 col-sm-6 col-lg-6">
                <div class="form-group">
                    <label for="projectName" class="text_header">Project Name :</label>
                    <select name="projectName" id="projectName" class="sel_project">
                        <option value="">Select Project</option>
                        <option value="project1">Project1</option>
                        <option value="project1">Project1</option>
                    </select>
                    <button class="btn_new_task" onclick="addnewProject();"><i class="fa fa-plus"></i></button>
                </div>
                <div class="newProject" id="newProject" style="display: none">
                    <input type="text"class="txt_model" placeholder="New Project Name..">
                    <button class="btnAddProject"><i class="fa  fa-check"></i></button>
                    <button class ="btnAddPclose" onclick="newProjectHide();" ><i class="fa fa-close"></i></button>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6">
                <div class="form-group">
                    <label for="projectModule" class="text_header">Module Name :</label>
                    <select name="moduleName" id="moduleName" class="sel_project">
                        <option value="">Select Module</option>
                        <option value="module1">Module1</option>
                        <option value="module2">Module2</option>
                    </select>
                    <button class="btn_new_task" onclick="addnewModule();"><i class="fa fa-plus"></i></button>
                </div>
                <div class="newModule" id="newModule"style="display:none" >
                    <input type="text"class="txt_model" placeholder="New Module Name..">
                    <button class="btnAddProject"><i class="fa fa-check"></i></button>
                    <button class="btnAddPclose" onclick="newModuleHide();"><i class="fa fa-close"></i></button>
                </div>
            </div> 

        </div> <!-- end of first-row-->
        <div class="row second_row">
            <div class="col-sm-6 col-md-6 col-lg-6 cald_pick">
                <div class="form-group">
                    <label for="calender" class="hidden-xs">Date :</label>
                    <input type="date" name="user_cal" id="user_cal" class="sel_cal" placeholder="Select Date">
                    <input type="submit" name="btn_date_submit" value="Select" class="btn btn-warning btn_task">

                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2" style="text-align: center">
                    <!-- <i class="fa fa-eye fa-2x"></i> -->
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 projectStatus">
                <div class="dropdown">
                    <label for="project-status" class="hidden-sm">TASK STATUS</label>
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      Download
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Export into Excel</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Export into Pdf</a></li>
                    </ul>
                  </div>
            </div>
        </div> <!-- end of second row-->
        <hr class="body_row">


        <div class="row third_row">
           <div class="planned_task">
               <div class="form-group">
                   <i class="fa fa-calendar fa-2x"></i>&nbsp;
                   <input type="date" name="palanned_date" id="planned_date">&nbsp;
                   <label for="plannedTask">Planned Task </label>

               </div>
           </div>
           <div class="col-sm-12 col-md-12 col-lg-12 nec_scroll">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th>Task List :</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">The printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</label>
                                </div>
                            </td>
                            <td><a href="#" ><i class="fa fa-pencil-square" id="btni_edit"></i></a></td>
                            <td><a href="#" ><i class="fa fa-check-circle" id="btni_success"></i></a></td>
                            <td><a href="#" ><i class="fa fa-close" id="btni_delete"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">The printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</label>
                                </div>
                            </td>
                            <td><a href="#" ><i class="fa fa-pencil-square" id="btni_edit"></i></a></td>
                            <td><a href="#" ><i class="fa fa-check-circle" id="btni_success"></i></a></td>
                            <td><a href="#" ><i class="fa fa-close" id="btni_delete"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">The printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</label>
                                </div>
                            </td>
                            <td><a href="#" ><i class="fa fa-pencil-square" id="btni_edit"></i></a></td>
                            <td><a href="#" ><i class="fa fa-check-circle" id="btni_success"></i></a></td>
                            <td><a href="#" ><i class="fa fa-close" id="btni_delete"></i></a></td>
                        </tr>       
                    </tbody>
                </table>
    
    
           </div>
        </div> <!-- end of third row-->

        <div class="row fourth_row">
            <div class="actual_task">
                <div class="form-group">
                    <i class="fa fa-calendar fa-2x"></i>&nbsp;
                    <input type="date" name="actual_date" id="actual_date">&nbsp;
                    <label for="actualTask">Actual Task</label>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 nec_scroll">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th>Task List :</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <label><input type="checkbox" value="" class="checkbox-primary">The printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</label>
                            </div>
                        </td>
                        <td><a href="#" ><i class="fa fa-pencil-square" id="btni_edit"></i></a></td>
                        <td><a href="#" ><i class="fa fa-check-circle" id="btni_success"></i></a></td>
                        <td><a href="#" data-toggle="modal" data-target="#myCommentModel" ><i class="fa  fa-commenting" id="btni_comment"></i></a></td>
                        <td><a href="#" ><i class="fa fa-close" id="btni_delete"></i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">The printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</label>
                            </div>
                        </td>
                        <td><a href="#" ><i class="fa fa-pencil-square" id="btni_edit"></i></a></td>
                        <td><a href="#" ><i class="fa fa-check-circle" id="btni_success"></i></a></td>
                        <td><a href="#" data-toggle="modal" data-target="#myCommentModel" ><i class="fa  fa-commenting" id="btni_comment"></i></a></td>
                        <td><a href="#" ><i class="fa fa-close" id="btni_delete"></i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">The printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</label>
                            </div>
                        </td>
                        <td><a href="#" ><i class="fa fa-pencil-square" id="btni_edit"></i></a></td>
                        <td><a href="#" ><i class="fa fa-check-circle" id="btni_success"></i></a></td>
                        <td><a href="#" data-toggle="modal" data-target="#myCommentModel" ><i class="fa  fa-commenting" id="btni_comment"></i></a></td>
                        <td><a href="#" ><i class="fa fa-close" id="btni_delete"></i></a></td>
                    </tr>       
                </tbody>
            </table>
            <div class="add_actual_task">
                <a onclick="addTaskSection();"><h5 class="addactTaskLabel">Add an Item...</h5></a>
            </div>
            <div class="testcontainer col-md-6 col-sm-8 col-lg-6 col-xs-12" id="testcontainer" style="display:none">
                <form action="">
                    <textarea name="userActualTask" id="userActualTask" cols="10" rows="0" class="form-control"placeholder="Add an Item.."></textarea><br>
                    <button class="btn btn-success btnaddact ">Add</button>
                    <button class="btnaddactclose" onclick="btn_div_hide();"><i class="fa fa-close"></i></button>
                    
                </form>
            </div>
            </div>
        </div> <!-- end of fourth row-->

        <div class="row fifth_row">
            <div class="next_week_task">
                <div class="form-group">
                    <i class="fa fa-calendar fa-2x"></i>&nbsp;
                    <input type="date" name="next_week_date" id="next_week_date">&nbsp;
                    <label for="nextWeekTask">Next Week Plan</label>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 nec_scroll">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th>Added Task :</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">The printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</label>
                                </div>
                            </td>
                            <td><a href="#" ><i class="fa fa-pencil-square" id="btni_edit"></i></a></td>
                            <td><a href="#" ><i class="fa fa-close" id="btni_delete"></i></a></td>
                        </tr>
                    </tbody>
                </table>
                <!-- add new task section -->
                <div class="add_new_task">
                  <a onclick="addNewTask();"><h5 class="nextWeekPlane">Add an Item...</h5></a>
                    
                </div>
                <div class="newTask col-md-6 col-sm-8 col-lg-6 col-xs-12" id="newTask" style="display:none">
                    <form name="newTask" id="newTask" action="newtask.php" method="post">
                        <textarea name="userNewTask" id="userNewTask" cols="10" rows="3" class="form-control" placeholder="Add new Item"></textarea><br>
                        <button class="btnNewTask" name="btn_new_task" id="btn_new_task">Add</button>
                        <button class="btnaddactclose" onclick="hideNewTask();" ><i class="fa fa-close"></i></button>
                        
                    </form>
                </div>
                <!-- end of add new task section  -->
            </div>
        </div> <!-- end of fifth row-->

    </div> <!-- end of container-->
    <!-- end of taskbody-section -->


    
    <!-- model window for the comment section -->
    <div id="myCommentModel" class="modal fade" role="dialog">
        <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
            
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <form action="">
                    <div class="form-group">
                        <label for="commentSection">Comment Below :</label>
                        <textarea name="commentSection" id="commentSection" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-warning btn_com">Submit</button>
                    </div>
                </form>
            </div>
            
            </div>
        
        </div>
    </div>
    <!-- end of model window of the comment section -->




    <script>
    function addTaskSection(){
        var test = document.getElementById("testcontainer");
        test.style.display = "block";
    }
    function btn_div_hide(){
        var test = document.getElementById("testcontainer");
        test.style.display = "none";
    }
    function addNewTask(){
        var newtask = document.getElementById("newTask");
        newtask.style.display = "block"
    }
    function hideNewTask(){
        var newtask = document.getElementById("newTask");
        newtask.style.display = "none"
    }
    function addnewProject(){
        var newproject = document.getElementById("newProject");
        newproject.style.display = "block"
    }
    function newProjectHide(){
        var newproject = document.getElementById("newProject");
        newproject.style.display = "none"
    }
    function addnewModule(){
        var newmodule = document.getElementById("newModule");
        newmodule.style.display = "block"
    }
    function newModuleHide(){
        var newmodule = document.getElementById("newModule");
        newmodule.style.display = "none"
    }

    </script>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

