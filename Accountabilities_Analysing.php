<?php
	$sid = session_id();
	if(!$sid)
	{  
		session_start();
	}
	
    if(!isset($_SESSION['acc_org'])){
        $_SESSION['arr_org']=array();
        
    }

    $var = array();
    array_push($var, $_POST['acc_org0']);
    array_push($var, $_POST['acc_org1']);
    array_push($var, $_POST['acc_org2']);
    array_push($var, $_POST['acc_org3']);
    array_push($var, $_POST['acc_org4']);
    array_push($var, $_POST['acc_org5']);
    array_push($var, $_POST['acc_org6']);
    array_push($var, $_POST['acc_org7']);

    $_SESSION['acc_org'] = $var;
    // array_push($_SESSION['acc_org'],$_POST['acc_org0']);
    // array_push($_SESSION['acc_org'],$_POST['acc_org1']);
    // array_push($_SESSION['acc_org'],$_POST['acc_org2']);
    // array_push($_SESSION['acc_org'],$_POST['acc_org3']);
    // array_push($_SESSION['acc_org'],$_POST['acc_org4']);
    // array_push($_SESSION['acc_org'],$_POST['acc_org5']);
    // array_push($_SESSION['acc_org'],$_POST['acc_org6']);
    // array_push($_SESSION['acc_org'],$_POST['acc_org7']);

     
    //  echo $_POST['acc_org0'];
    //  $r = count($var);
    //  echo $r;
    //  $result = count($_SESSION['acc_org']);
    // echo $result;

	// $acc_org0 = $_POST['acc_org0'];
	// $_SESSION['acc_org0'] = $acc_org0;
	
	// $acc_org1 = $_POST['acc_org1'];
	// $_SESSION['acc_org1'] = $acc_org1;
	
	// $acc_org2 = $_POST['acc_org2'];
	// $_SESSION['acc_org2'] = $acc_org2;
	
	// $acc_org3 = $_POST['acc_org3'];
	// $_SESSION['acc_org3'] = $acc_org3;
	
	// $acc_org4 = $_POST['acc_org4'];
	// $_SESSION['acc_org4'] = $acc_org4;
	
	// $acc_org5 = $_POST['acc_org5'];
	// $_SESSION['acc_org5'] = $acc_org5;
	
	// $acc_org6 = $_POST['acc_org6'];
	// $_SESSION['acc_org6'] = $acc_org6;
	
	// $acc_org7 = $_POST['acc_org7'];
	// $_SESSION['acc_org7'] = $acc_org7;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Analysing and Researching</title>
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
    <!-- jQuery -->
    <!-- jQuery 2.2.0 -->
    <script src="jQuery/jQuery-2.2.0.min.js"></script>
    <!-- AdminLTE App -->
    <script src="jQuery/app.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="css/dropdownbox.css" rel="stylesheet" type="text/css">
    <link href="css/accountabilities.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/accountabilities.js"></script>
    <link rel="stylesheet" type="text/css" href="css/tag/jquery.tag-editor.css">
	
	<link href="css/btn_savenext.css" rel="stylesheet" type="text/css">
	
	<script src="js/accountabilitiesjump.js"></script>
</head>

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
                            <i class="fa fa-sitemap"></i>
                            <span>Position Chart</span>
                        </a>
                    </li>
                    <li class="active treeview">
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
                    <li class="treeview">
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
                    <h4><b>Accountabilities</b></h4>
                    <p>Accountabilities are more than mere tasks. Each accountability should be measurable and must have a desired, well described outcomes that determines whether the accountability has been achieved or not. Generally, there is very close dependence on the accountabilities while determining performance management KPIs. The most important 4-5 accountabilities lend itself to becoming KPIs for the role. Once each accountability is written, these should be yardsticks by which a role should be measured.</p>
                    <div class="decoration"></div>
                    <div class="subheading"><b>Analysing and researching</b></div>
                    <p><i>  This is related to the problem solving and thinking associated with the role.</i></p>
                    <div class="row">
                        <div class="col-lg-6">
                            <table class="table table-filter">
                                <thead>
                                    <tr>
                                        <td class="select-title">Activity</td>
                                        <td>
                                            <select class="selectpicker form-control" id="acc_plan_select1" name="acc_plan_select1" onChange="display_plan()">
                                                <option></option>
                                                <option>Compile data</option>
                                                <option>Analyse data</option>
                                                <option>Interpret data and create insights</option>
                                                <option>Recommend</option>
                                                <option>Formulate</option>
                                                <option>Determine</option>
                                                <option>Approve</option>
                                                <option>Implement</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="select-title" >Complexity of the problem</td>
                                        <td>
                                            <select class="selectpicker form-control" id="acc_plan_select2" name="acc_plan_select2" onChange="display_plan()">
                                                <option></option>
                                                <option>Process</option>
                                                <option>Policy and methodology</option>
                                                <option>Plan</option>
                                                <option>Controls</option>
                                                <option>Budget</option>
                                                <option>Information systems</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="select-title" >Scope of impact</td>
                                        <td>
                                            <select class="selectpicker form-control" id="acc_plan_select3" name="acc_plan_select3" onChange="display_plan()">
                                                <option></option>
                                                <option>Team</option>
                                                <option>Project</option>
                                                <option>Business Unit</option>
                                                <option>Organisation</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="select-title" >Desired outcome</td>
                                        <td>
                                            <select class="selectpicker form-control" id="acc_plan_select4" name="acc_plan_select4" onChange="display_plan()">
                                                <option></option>
                                                <option>Plan for future</option>
                                                <option>Projects complete on time</option>
                                                <option>Align to strategy</option>
                                                <option>Meet compliance or legal requirement</option>
                                                <option>Meet specifications</option>
                                                <option>Initiate or address change</option>
                                            </select>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <div class="acc_edt_ctt_div">
                                <div id="acc_plan_edt_ctt_dft_div" class="acc_edt_ctt_dft_div">
                                    <textarea id="acc_edt_ctt_dft_ttarea" class=" form-control acc_edt_ctt_dft_ttarea" rows="4"></textarea>
                                </div>
                                <div class="buttonForAccountabilities">
                                    <button type="button" class="btn3 btn-sm btn-default" id="add-btn" value="Save">Add <i class="fa fa-plus" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!--  <div class="acc_boundary"></div> -->
                    <!--this is the record of sentences-->
                    <textarea class=" form-control acc_rcd_out_div" rows=1 id="add-total" name="">
                    </textarea>
                    <div>
                        <div class="decoration"></div>
                        <div class="text-left">
							<div style="float:left;">
								<a href="Accountabilities_Organising.php" class="btn btn-labeled btn-default" role="button">
								<span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Previous</a>
							</div>
							<div style="float:right;">
								<form action="Accountabilities_Adhering.php" method="post" id="acc_ana_form" name="acc_ana_form">
									
                                <?php
                                    for($i=0;$i<8;$i++){
                                    $id_name="acc_ana".$i;
                                    $str = "<input type='text' name='$id_name' id='$id_name' style='display:none'>";
                                    echo $str;
                                    }
                                ?>
									<!-- <input type="text" name="acc_ana0" id="acc_ana0" style="display:none;">
									<input type="text" name="acc_ana1" id="acc_ana1" style="display:none;">
									<input type="text" name="acc_ana2" id="acc_ana2" style="display:none;">
									<input type="text" name="acc_ana3" id="acc_ana3" style="display:none;">
									<input type="text" name="acc_ana4" id="acc_ana4" style="display:none;">
									<input type="text" name="acc_ana5" id="acc_ana5" style="display:none;">
									<input type="text" name="acc_ana6" id="acc_ana6" style="display:none;">
									<input type="text" name="acc_ana7" id="acc_ana7" style="display:none;"> -->

									
									<input type="submit" class="btn btn-default" name="acc_ana_submit" id="acc_ana_submit" value="Save & Next >" style="background-color:#F2923F; font-size:14px; color:#FFFFFF;" onClick="acc_ana_jump()">
								</form>
							</div>
                        </div>
                    </div>
                    <div class="spaceToBot"></div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tageditor/jquery.caret.min.js"></script>
    <script src="js/tageditor/jquery.tag-editor.js"></script>
    <script src="js/tageditor/jquery.tag-editor.min.js"></script>
</body>

</html>
