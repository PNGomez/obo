<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/logo.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>OBO Record System | Update Task </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="#2B2E33" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <img src="assets/img/title.png" alt="title" style="width:237px;height:61px;top:10px; padding:0; margin:0;">
            </div>

            <ul class="nav">
                <li>
                    
                    <a href="home.php">
                       <i class="fa fa-home" aria-hidden="true"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li  class="active">
                    <a href="dashboard.php">
                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="database.php">
                        <i class="fa fa-database" aria-hidden="true"></i>
                        <p>Database</p>
                    </a>
                </li>
                <li>
                    <a href="search.php">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <p>Search</p>
                    </a>
                </li>
                <li>
                    <a href="add.php">
                       <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        <p>Add</p>
                    </a>
                </li>
                <li>
                    <a href="archive.php">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                        <p>Archive</p>
                    </a>
                </li>
                <li>
                    <a href="import.php">
                        <i class="fa fa-upload" aria-hidden="true"></i>
                        <p>Import</p>
                    </a>
                </li>
                   <li>
                    <a href="export.php">
                       <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                        <p>Export</p>
                    </a>
                </li>
                
                <li class="active-pro">
                    <a href="help.php">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        <p>HELP</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">ADD NEW RECORD</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Account
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="view_prof.php">View Profile</a></li>
                                <li><a href="edit_prof.php">Edit Profile</a></li>
                                <li><a href="user_accts.php">User Accounts</a></li>
                                <li class="divider"></li>
                                <li><a href="add_user.php">Add User</a></li>
                              </ul>
                        </li>
                        <li class="dropdown">
                            <a href="login.php">
                                <i class="fa fa-sign-out"></i>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <?php
  include_once 'connect-db.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM task WHERE task_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $task = $_POST['task'];
 
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE task SET task='$task' WHERE task_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>

  <script type="text/javascript">
  window.location.href='dashboard.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{?>
 <script type="text/javascript">
  window.location.href='dashboard.php';
  </script>
  <?php
}
?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                  <form method="post">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Task</h4>
                            </div>
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Edit Task</label>
                                                  <input type="text" name="task" placeholder="task" class="form-control" value="<?php echo $fetched_row['task']; ?>" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                               <button type="submit" name="btn-update" class="btn btn-primary button-loading"><strong>UPDATE</strong></button>
                                                <button type="submit" name="btn-cancel" class="btn btn-primary button-loading"><strong>Cancel</strong></button>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                          </div>
                    </div>
                    </div>
                    </form>
                </div>    

            </div>                  
        </div>
        </div>

       
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

</html>
