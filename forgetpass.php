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
                <a class="navbar-brand" href="index.php">SKYMAP GLOBAL</a>
              </div>
          
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.php"><button class="btn btn-primary" >Home</button></a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <!-- end of page navbar section -->

    <!-- body text section -->
    <div class="container">
        <div class="row imagerow">

            <div class="col-md-2 col-sm-2 col-lg-2"></div>
            <div class="col-md-8 col-sm-8 col-lg-8 forgetbody">
                <p>
                    Have you forgotten your password..? Please Choose New Password.
                </p>
                <div class="body_descp animated bounceInDown">
                   <p>
                       The old password will be reset. The employee ID must be registerd with
                       <span class="company_text">SKYMAP &nbsp; GLOBAL</span>
                   </p>
               </div>
               <div class="row">
                   <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2"></div>
                   <div class="col-md-8 col-sm-8 col-lg-8 col-xs-8 form_body">
                       <form action="actpass.php" name="forgetForm" id="forgetForm" method="post">
                           <table>
                               <tbody>
                                   <tr>
                                       <td><h4>Enter Email ID: *</h4></td>
                                       <td><input type="email" name="newEmail" id="newEmail"  class="form-control txtforget" maxlength="50" required></td>
                                   </tr>
                                   <tr>
                                       <td><h4>New Password: *</h4></td>
                                       <td><input type="password" name="newPassword" id="newPassword" class="form-control txtforget" maxlength="20" required></td>
                                   </tr>
                                   <tr>
                                       <td><h4>Retype Password: *</h4></td>
                                       <td><input type="password" name="retypePass" id="retypePass" class="form-control txtforget" maxlength="20" required></td>
                                   </tr>
                                   <tr>
                                       <td></td>
                                       <td><button class="btn btn-primary btnRset" name="btn_reset" id="btn_reset">Reset</button></td>
                                   </tr>
                               </tbody>
                           </table>
                       </form>
                   </div>
                   <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2"></div>
               </div>
               <!-- <form action="forgetpass.php" name="forgetForm" id="forgetForm">
                   <div class="form-group">
                       <label for="employeeId"><h4>Employee ID:</h4></label>
                       <input type="text" name="resetempId" id="resetempId" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="newpassword"><h4>Enter New Password</h4></label>
                       <input type="password" name="newPassword" id ="newPassword" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="reenterpassword"><h4>Retype New Password</h4></label>
                       <input type="text" name="retypePassword" id="retypePassword" class="form-control">
                   </div>
                   <div class="form-group">
                       <button class="btn btn-warning">Update</button>
                   </div>
               </form> -->
            </div>
            <div class="col-md-2 col-sm-2 col-lg-2"></div>
        </div>
    </div>
    <!-- end of body text section -->





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>