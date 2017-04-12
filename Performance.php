<?php
    $sid = session_id();
    if(!$sid)
    {  
        session_start();
    }
    
    if(!isset($_SESSION['acc_man'])){
        $_SESSION['arr_man']=array();
        
    }

    $var = array();
    array_push($var, $_POST['acc_man0']);
    array_push($var, $_POST['acc_man1']);
    array_push($var, $_POST['acc_man2']);
    array_push($var, $_POST['acc_man3']);
    array_push($var, $_POST['acc_man4']);
    array_push($var, $_POST['acc_man5']);
    array_push($var, $_POST['acc_man6']);
    array_push($var, $_POST['acc_man7']);

    $_SESSION['acc_man'] = $var;

    // $acc_man0 = $_POST['acc_man0'];
    // $_SESSION['acc_man0'] = $acc_man0;
    
    // $acc_man1 = $_POST['acc_man1'];
    // $_SESSION['acc_man1'] = $acc_man1;
    
    // $acc_man2 = $_POST['acc_man2'];
    // $_SESSION['acc_man2'] = $acc_man2;
    
    // $acc_man3 = $_POST['acc_man3'];
    // $_SESSION['acc_man3'] = $acc_man3;
    
    // $acc_man4 = $_POST['acc_man4'];
    // $_SESSION['acc_man4'] = $acc_man4;
    
    // $acc_man5 = $_POST['acc_man5'];
    // $_SESSION['acc_man5'] = $acc_man5;
    
    // $acc_man6 = $_POST['acc_man6'];
    // $_SESSION['acc_man6'] = $acc_man6;
    
    // $acc_man7 = $_POST['acc_man7'];
    // $_SESSION['acc_man7'] = $acc_man7;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Organisational level and competencies</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSS -->
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/mainpage.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="css/_all-skins.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <!-- js -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
    <!-- For Reporting Levels -->
    <link href="css/newreportinglevel.css" rel="stylesheet" type="text/css">
    
    <link href="css/btn_savenext.css" rel="stylesheet" type="text/css">
</head>
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="DashBoard.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>J</b>D</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Job</b>Descriptor</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-right navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> &nbsp;Stan Smith <span class="caret"></span>  &nbsp;</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="index.php"><i class="fa fa-power-off"></i>Log Out </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header"></li>
                    <li class="treeview">
                        <a href="Organisational_Context.php">
                            <i class="fa fa-group"></i>
                            <span>Organisation Context</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-male"></i>
                            <span>Role Context</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="Primary_Focus.php"><i class="fa fa-circle-o"></i> Primary Focus of the Role</a></li>
                            <li>
                                <a href="Organisational_Level.php">
                                    <div><i class="fa fa-circle-o"></i> &nbsp;&nbsp;Organisational Level
                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; & Competencies</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="Position_Chart.php">
                            <i class="fa fa-sitemap"></i> <span>Position Chart</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-database"></i> <span>Accountabilities</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                         <ul class="treeview-menu">
                            <li><a href="Accountabilities_Organising.php"><i class="fa fa-circle-o"></i> Organising <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;& Defining Objectives</a></li>
                            <li><a href="Accountabilities_Analysing.php"><i class="fa fa-circle-o"></i> Analysing and Researching</a></li>
                            <li><a href="Accountabilities_Adhering.php"><i class="fa fa-circle-o"></i> Adhering to Policies</a></li>
                            <li><a href="Accountabilities_Managing.php"><i class="fa fa-circle-o"></i> Managing People</a></li>
                        </ul>
                    </li>
                    <li class="active treeview">
                        <a href="Performance.php">
                            <i class="fa fa-product-hunt"></i> <span>Performance Management</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        </nav>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="container-fluid">
                <div class="row col-lg-10 col-lg-offset-1 custyle">
                    <h4><b>Performance Management</b></h4>
                    <p>Please select the appropriate priority and percentage of the accoutabilities:
                        <p>
                    <div class="decoration-report"></div>
                    
                    <div class="row">
                    <div col-sm-12>
                        <div class="col-sm-2">
                            <div class="subheading">
                                <center><b>Priority</b></center>
                                 
                             </div>
                             
                    </div>
                    <div class="col-sm-3">
                        <div class="subheading">
                        <center><b>Percentage (%)</b></center>
                                 
                        </div>
                    </div>

                    <div class="col-sm-7">
                        <div class="subheading">
                        <b>Accountabilities</b>
                        
                        </div>
                        
                    </div>
                    <br>
                    </div>
                    
                    <br>
                    <div class="col-sm-12 accoutabilities">
                        <?php
                            // $count = 0;
                            foreach ($_SESSION['acc_org'] as $key){
                            $str = "<p>";
                            $str = $str.$key."</p><br>";
                            if(!empty($key)){
                        ?>
                            <div class="col-sm-2">
                                <select class="selectpicker form-control" title="Select one">
                                <option value="0"></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="number">
                            </div>
                            <div class="col-sm-7">
                                <?php echo $str; ?>
                            </div>
                                
                               
                            <?php }
                         } ?>
                         <?php
                            // $count = 0;
                            foreach ($_SESSION['acc_ana'] as $key){
                            $str = "<p>";
                            $str = $str.$key."</p><br>";
                            if(!empty($key)){
                        ?>
                            <div class="col-sm-2">
                                <select class="selectpicker form-control" title="Select one">
                                <option value="0"></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="number">
                            </div>
                            <div class="col-sm-7">
                                <?php echo $str; ?>
                            </div>
                                
                               
                            <?php }
                         } ?>
                         
                         <?php
                            // $count = 0;
                            foreach ($_SESSION['acc_adh'] as $key){
                            $str = "<p>";
                            $str = $str.$key."</p><br>";
                            if(!empty($key)){
                        ?>
                            <div class="col-sm-2">
                                <select class="selectpicker form-control" title="Select one">
                                <option value="0"></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="number">
                            </div>
                            <div class="col-sm-7">
                                <?php echo $str; ?>
                            </div>
                                
                               
                            <?php }
                         } ?>

                         <?php
                            // $count = 0;
                            foreach ($_SESSION['acc_man'] as $key){
                            $str = "<p>";
                            $str = $str.$key."</p><br>";
                            if(!empty($key)){
                        ?>
                            <div class="col-sm-2">
                                <select class="selectpicker form-control" title="Select one">
                                <option value="0"></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="number">
                            </div>
                            <div class="col-sm-7">
                                <?php echo $str; ?>
                            </div>
                                
                               
                            <?php }
                         } ?>
                    </div>


                        

                    </div>
                            <div class="decoration-below"></div>
                        <div class="text-left">
                        <div style="float:left;">
                            <a href="Accountabilities_Managing.php" class="btn btn-labeled btn-default" role="button">
                            <span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Previous</a>
                        </div>
                        <div style="float:right;">
                               <form action="Summary.php" method="post" id="acc_man_form" name="acc_man_form">

                                <?php
                                for($i=0;$i<8;$i++){
                                    $id_name="acc_man".$i;
                                    $str = "<input type='text' name='$id_name' id='$id_name' style='display:none'>";
                                    echo $str;
                                }
                                ?>

                                <input type="submit" class="btn btn-default"  name="acc_man_submit" id="acc_man_submit" value="Save & Next >" style="background-color:#F2923F; font-size:14px; color:#FFFFFF;" onClick="acc_man_jump()">
                            </form>
                        </div>
                    </div>
        
                            <div class="spaceToBot"></div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- jQuery -->
    <!-- jQuery 2.2.0 -->
    <script src="jQuery/jQuery-2.2.0.min.js"></script>
      <!-- AdminLTE App -->
    <script src="jQuery/app.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/accountabilitiesjump.js"></script>
</body>

</html>
