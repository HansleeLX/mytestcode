<?php
	$sid = session_id();
	if(!$sid)
	{  
		session_start();
	}

    if(!isset($_SESSION['acc_ana'])){
        $_SESSION['arr_ana']=array();
        
    }

    $var = array();
    array_push($var, $_POST['acc_ana0']);
    array_push($var, $_POST['acc_ana1']);
    array_push($var, $_POST['acc_ana2']);
    array_push($var, $_POST['acc_ana3']);
    array_push($var, $_POST['acc_ana4']);
    array_push($var, $_POST['acc_ana5']);
    array_push($var, $_POST['acc_ana6']);
    array_push($var, $_POST['acc_ana7']);

    $_SESSION['acc_ana'] = $var;

	// $acc_ana0 = $_POST['acc_ana0'];
	// $_SESSION['acc_ana0'] = $acc_ana0;
	
	// $acc_ana1 = $_POST['acc_ana1'];
	// $_SESSION['acc_ana1'] = $acc_ana1;
	
	// $acc_ana2 = $_POST['acc_ana2'];
	// $_SESSION['acc_ana2'] = $acc_ana2;
	
	// $acc_ana3 = $_POST['acc_ana3'];
	// $_SESSION['acc_ana3'] = $acc_ana3;
	
	// $acc_ana4 = $_POST['acc_ana4'];
	// $_SESSION['acc_ana4'] = $acc_ana4;
	
	// $acc_ana5 = $_POST['acc_ana5'];
	// $_SESSION['acc_ana5'] = $acc_ana5;
	
	// $acc_ana6 = $_POST['acc_ana6'];
	// $_SESSION['acc_ana6'] = $acc_ana6;
	
	// $acc_ana7 = $_POST['acc_ana7'];
	// $_SESSION['acc_ana7'] = $acc_ana7;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adhering to policies</title>
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
                    <div class="subheading"><b> Adhering to policies</b></div>
                    <p><i>The governance and control aspect of the role. This is based on ensuring standards are met, quality protocols are followed and certain protocols are adhered to</i></p>
                    <div class="row">
                        <div class="col-lg-6">
                            <table class="table table-filter">
                                <thead>
                                    <tr>
                                        <td class="select-title" >Activity</td>
                                        <td>
                                            <select class="selectpicker form-control" id="acc_rpt_select1" name="acc_rpt_select1" onChange="display_rpt()">
                                                <option></option>
                                                <option>Compile data</option>
                                                <option>Prepare</option>
                                                <option>Recommend</option>
                                                <option>Approve</option>
                                                <option>Monitor</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="select-title" >Nature of report</td>
                                        <td>
                                            <select class="selectpicker form-control" id="acc_rpt_select2" name="acc_rpt_select2" onChange="display_rpt()">
                                                <option></option>
                                                <option>Accounting</option>
                                                <option>Finance</option>
                                                <option>IT</option>
                                                <option>Customer</option>
                                                <option>Marketing</option>
                                                <option>Compliance</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="select-title">Impacting</td>
                                        <td>
                                            <select class="selectpicker form-control" id="acc_rpt_select3" name="acc_rpt_select3" onChange="display_rpt()">
                                                <option></option>
                                                <option>Daily</option>
                                                <option>Weekly</option>
                                                <option>Monthly</option>
                                                <option>Annual</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="select-title" >Desired outcome</td>
                                        <td>
                                            <select class="selectpicker form-control" id="acc_rpt_select4" name="acc_rpt_select14" onChange="display_rpt()">
                                                <option></option>
                                                <option>Meet compliance needs</option>
                                                <option>Ensure actions are taken</option>
                                                <option>To be used for other reporting or decision making</option>
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
                    
                    <!--this is the record of sentences-->
                    <textarea class=" form-control acc_rcd_out_div" rows=1 id="add-total" name="">
                    </textarea>
                    <div class="decoration"></div>
                    <div class="text-left">
						<div style="float:left;">
							<a href="Accountabilities_Analysing.php" class="btn btn-labeled btn-default" role="button">
							<span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Previous</a>
						</div>
						<div style="float:right;">
							<form action="Accountabilities_Managing.php" method="post" id="acc_adh_form" name="acc_adh_form">
								
                                <?php
                                for($i=0;$i<8;$i++){
                                    $id_name="acc_adh".$i;
                                    $str = "<input type='text' name='$id_name' id='$id_name' style='display:none'>";
                                    echo $str;
                                }
                                ?>

								<!-- <input type="text" name="acc_adh0" id="acc_adh0" style="display:none;">
								<input type="text" name="acc_adh1" id="acc_adh1" style="display:none;">
								<input type="text" name="acc_adh2" id="acc_adh2" style="display:none;">
								<input type="text" name="acc_adh3" id="acc_adh3" style="display:none;">
								<input type="text" name="acc_adh4" id="acc_adh4" style="display:none;">
								<input type="text" name="acc_adh5" id="acc_adh5" style="display:none;">
								<input type="text" name="acc_adh6" id="acc_adh6" style="display:none;">
								<input type="text" name="acc_adh7" id="acc_adh7" style="display:none;"> -->
								
								<input type="submit" class="btn btn-default" name="acc_adh_submit" id="acc_adh_submit" value="Save & Next >" style="background-color:#F2923F; font-size:14px; color:#FFFFFF;" onClick="acc_adh_jump()">
							</form>
						</div>
                    </div>
                </div>
                <div class="spaceToBot"></div>
            </div>
        </div>
        <!-- /.content -->
        <!-- /.content-wrapper -->
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tageditor/jquery.caret.min.js"></script>
    <script src="js/tageditor/jquery.tag-editor.js"></script>
    <script src="js/tageditor/jquery.tag-editor.min.js"></script>
</body>

</html>
