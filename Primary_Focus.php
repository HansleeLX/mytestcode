<?php
	$sid = session_id();
	if(!$sid)
	{  
		session_start();
	}
	
	$jobtitle = $_POST['jobtitle'];
	$_SESSION['jobtitle'] = $jobtitle;
	
	$organization = $_POST['organization'];
	$_SESSION['organization'] = $organization;
	
	$org_dtl = $_POST['org_dtl'];
	$_SESSION['org_dtl'] = $org_dtl;
	
	$businessunit = $_POST['businessunit'];
	$_SESSION['businessunit'] = $businessunit;
	
	$bu_dtl = $_POST['bu_dtl'];
	$_SESSION['bu_dtl'] = $bu_dtl;
	
	$team = $_POST['team'];
	$_SESSION['team'] = $team;
	
	$team_dtl = $_POST['team_dtl'];
	$_SESSION['team_dtl'] = $team_dtl;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Primary Focus</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSS -->
    <!-- Bootstrap 3.3.6 -->
    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="css/_all-skins.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/primaryfocus_text.css">
    <link rel="stylesheet" type="text/css" href="css/dropdownbox.css">
	<link href="css/btn_savenext.css" rel="stylesheet" type="text/css">
	<script src="js/check.js" type="text/javascript" ></script>
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
                    <li class="header">MENU</li>
                    
                    <li class="treeview">
                        <a href="Organisational_Context.php">
                            <i class="fa fa-group"></i>
                            <span>Organisation Context</span>
                        </a>
                    </li>
                    <li class="active treeview">
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
                    <h4><b> Primary Focus</b></h4>
                    <p>It is important to understand the primary function of the role and where the role fits in the context of the organisation. This is determined by understanding how many levels the role is from the CEO and the nature of the role. Simply select the most relevant level and nature. The descriptions toggle to each explains what is expected at a certain level.
                    </p>
                    <p class="text-primary"><i class="fa fa-search" aria-hidden="true"></i> The primary focus of the role helps to explain which aspect of the role is the most important &mdash; i.e. where does true accountability exist. It is quite possible that roles at professional level or junior managerial level are mainly operational and/or consultative focused and as one moves up in the organisation, the focus shifts to team leadership or strategic direction.</p>
                    <div class="decoration"></div>
                    <h5><b>Please select your Primary Focus of Role:</b></h5>
                    <h5 id="warm_highlight_p">Hover on the elements below to view more description</h5>
					<form action="Organisational_Level.php" method="post" id="pf_form" name="pf_form" onSubmit="return precentage_check()">
                    <div class="primary_focus_outdiv">
                        <div class="col-md-6" id="rating-col">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td class="select-title" data-container="body" data-toggle="tooltip" title="Generally associated with task focused roles i.e. blue collar, administrative and extends to junior professional roles i.e. accountants, engineers"><b>Operational</b></td>
                                        <td>
                                            <select id="primary_focus_oper_rtbar" name="oper_rating" class="selectpicker form-control primary_focus_rtbar" onChange="getTotalSumFunction()">
                                                <option value="0%">0%</option>
                                                <option value="10%">10%</option>
                                                <option value="20%">20%</option>
                                                <option value="30%">30%</option>
                                                <option value="40%">40%</option>
                                                <option value="50%">50%</option>
                                                <option value="60%">60%</option>
                                                <option value="70%">70%</option>
                                                <option value="80%">80%</option>
                                                <option value="90%">90%</option>
                                                <option value="100%">100%</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="select-title" data-container="body" data-toggle="tooltip" title="Providing advice, analysis and recommendation: associated with experienced roles and/or requiring specialised training/advice"><b>Consultative</b></td>
                                        <td>
                                            <select id="primary_focus_cons_rtbar" name="cons_rating" class="selectpicker form-control primary_focus_rtbar" onChange="getTotalSumFunction()">
                                                <option value="0%">0%</option>
                                                <option value="10%">10%</option>
                                                <option value="20%">20%</option>
                                                <option value="30%">30%</option>
                                                <option value="40%">40%</option>
                                                <option value="50%">50%</option>
                                                <option value="60%">60%</option>
                                                <option value="70%">70%</option>
                                                <option value="80%">80%</option>
                                                <option value="90%">90%</option>
                                                <option value="100%">100%</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="select-title" data-container="body" data-toggle="tooltip" title="Must have some component of leadership and accountability is to manage teams and co-ordinate resources to reach business outcomes: team leaders, project managers"><b>Project Management</b></td>
                                        <td>
                                            <select id="primary_focus_teamlead_rtbar" name="teamlead_rating" class="selectpicker form-control primary_focus_rtbar" onChange="getTotalSumFunction()">
                                                <option value="0%">0%</option>
                                                <option value="10%">10%</option>
                                                <option value="20%">20%</option>
                                                <option value="30%">30%</option>
                                                <option value="40%">40%</option>
                                                <option value="50%">50%</option>
                                                <option value="60%">60%</option>
                                                <option value="70%">70%</option>
                                                <option value="80%">80%</option>
                                                <option value="90%">90%</option>
                                                <option value="100%">100%</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="select-title" data-container="body" data-toggle="tooltip" title="Needs to think beyond 6 months generally impacting a large team, medium sized function or Business Unit extending to organisation; the main tasks are around formulating plans and strategies"><b>Strategic</b></td>
                                        <td>
                                            <select id="primary_focus_strat_rtbar" name="strat_rating" class="selectpicker form-control primary_focus_rtbar" onChange="getTotalSumFunction()">
                                                <option value="0%">0%</option>
                                                <option value="10%">10%</option>
                                                <option value="20%">20%</option>
                                                <option value="30%">30%</option>
                                                <option value="40%">40%</option>
                                                <option value="50%">50%</option>
                                                <option value="60%">60%</option>
                                                <option value="70%">70%</option>
                                                <option value="80%">80%</option>
                                                <option value="90%">90%</option>
                                                <option value="100%">100%</option>
                                            </select>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="col-md-6" id="total-percentage">
                            <div class="text-center total-title">
                                <b id="total_of_four_rating_bar">Total:</b>
                            </div>
                            <div class="text-center total-pie">
                                <!-- <button type="button" value="generate chart" width="20px" height="10px" onclick=""></button> -->
                                
                                    <canvas id="mycanvas">
                                    </canvas>   
                            </div>
                        </div>
                    </div>
                    <div class="decoration-below"></div>
                    <div class="text-left">
						<div style="float:left;">
							<a href="Primary_Focus.php" class="btn btn-labeled btn-default" role="button">
                                    <span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Previous</a>
						</div>
						<div style="float:right;">
							
								<input type="text" name="hid_test" id="hid_test" style="display:none;">
								<input type="submit" class="btn btn-default" name="pf_submit" id="pf_submit" value="Save & Next >" style="background-color:#F2923F; font-size:14px; color:#FFFFFF;">
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
    <!-- jQuery 2.2.0 -->
    <script src="jQuery/jQuery-2.2.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    
    <!-- AdminLTE App -->
    <script src="jQuery/app.min.js"></script>
    <script src="js/Chart.js"></script>
    <script type="text/javascript" src="js/check.js"></script>
</body>

</html>
