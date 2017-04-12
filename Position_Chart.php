<?php
	$sid = session_id();
	if(!$sid)
	{  
		session_start();
	}
	
	$competencies0 = $_POST['competencies0'];
	$_SESSION['competencies0'] = $competencies0;
	
	$competencies1 = $_POST['competencies1'];
	$_SESSION['competencies1'] = $competencies1;
	
	$competencies2 = $_POST['competencies2'];
	$_SESSION['competencies2'] = $competencies2;
	
	$competencies3 = $_POST['competencies3'];
	$_SESSION['competencies3'] = $competencies3;
	
	$competencies4 = $_POST['competencies4'];
	$_SESSION['competencies4'] = $competencies4;
	
	$competencies5 = $_POST['competencies5'];
	$_SESSION['competencies5'] = $competencies5;
	
	$competencies6 = $_POST['competencies6'];
	$_SESSION['competencies6'] = $competencies6;
	
	$competencies7 = $_POST['competencies7'];
	$_SESSION['competencies7'] = $competencies7;
	
	$competencies8 = $_POST['competencies8'];
	$_SESSION['competencies8'] = $competencies8;
	
	$competencies9 = $_POST['competencies9'];
	$_SESSION['competencies9'] = $competencies9;
	
	$competencies10 = $_POST['competencies10'];
	$_SESSION['competencies10'] = $competencies10;
	
	$competencies11 = $_POST['competencies11'];
	$_SESSION['competencies11'] = $competencies11;
	
	$competencies12 = $_POST['competencies12'];
	$_SESSION['competencies12'] = $competencies12;
	
	$competencies13 = $_POST['competencies13'];
	$_SESSION['competencies13'] = $competencies13;
	
	$competencies14 = $_POST['competencies14'];
	$_SESSION['competencies14'] = $competencies14;
	
	$competencies15 = $_POST['competencies15'];
	$_SESSION['competencies15'] = $competencies15;
	
	$competencies16 = $_POST['competencies16'];
	$_SESSION['competencies16'] = $competencies16;
	
	$competencies17 = $_POST['competencies17'];
	$_SESSION['competencies17'] = $competencies17;
	
	$competencies18 = $_POST['competencies18'];
	$_SESSION['competencies18'] = $competencies18;
	
	$competencies19 = $_POST['competencies19'];
	$_SESSION['competencies19'] = $competencies19;
	
	
	$competenciesnum = $_POST['competenciesnum'];
	$_SESSION['competenciesnum'] = $competenciesnum;
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Position Chart</title>
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
    <script type="text/javascript" src="js/DashBoard.js"></script>
	
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/jquery.orgchart.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	<link href="css/btn_savenext.css" rel="stylesheet" type="text/css">
	<script src="js/positionchartjump.js"></script>

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
                            <li><a href="Organisational_Level.php"><div><i class="fa fa-circle-o"></i> &nbsp;&nbsp;Organisational Level <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; & Competencies</div></a></li>
                        </ul>
                    </li>
                    <li class="active treeview">
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
				<h4><b>Position chart</b> </h4>
				<p>
					In order to get a true understanding of the demands made on the role and its strategic focus and importance, it is important to understand the reporting relationship. We believe that the true picture of the role emerges when it is viewed in context of who it reports to, who reports to it and some roles at a similar level to it.
                    The easy to navigate chart allows you to very easily add levels, edit role titles and create your own organisation charts.
				</p>
				<p class="text-primary"><i class="fa fa-flag" aria-hidden="true"></i> The level above is the direct manager, the lower level is "direct report" and the same level are the roles that report to the direct manager.
				</p>
            
            <div class="decoration-report"></div>
            <!-- /.content -->
            <div id="orgChartContainer">
                <div id="orgChart"></div>
            </div>
            <!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
            <script type="text/javascript" src="js/jquery.orgchart.js"></script>
            <script type="text/javascript">
            var defaultData = [{
                id: 1,
                name: 'Upper level',
                parent: 0
            }, {
                id: 2,
                name: 'Current user',
                parent: 1
            }, {
                id: 3,
                name: 'Lower level',
                parent: 2
            }];
            $(function() {
                org_chart = $('#orgChart').orgChart({
                    data: defaultData,
                    showControls: true,
                    allowEdit: true,
                    onAddNode: function(node) {
                        org_chart.newNode(node.data.id);
                    },
                    onDeleteNode: function(node) {
                        org_chart.deleteNode(node.data.id);
                    }

                });
            });
            </script>
			<div class="decoration"></div>
			<div class="text-left">
				<div style="float:left;">
					<a href="Organisational_Level.php" class="btn btn-labeled btn-default" role="button">
							<span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Previous</a>
				</div>
				<div style="float:right;">
					<form action="Accountabilities_Organising.php" method="post" id="chart_form" name="chart_form">
						
						<input type="text" name="position1" id="position1" style="display:none;">
						<input type="text" name="position2" id="position2" style="display:none;">
						<input type="text" name="position3" id="position3" style="display:none;">

						<input type="text" name="position4" id="position4" style="display:none;">
						<input type="text" name="position5" id="position5" style="display:none;">
						<input type="text" name="position6" id="position6" style="display:none;">
						<input type="text" name="position7" id="position7" style="display:none;">
						<input type="text" name="position8" id="position8" style="display:none;">
						<input type="text" name="position9" id="position9" style="display:none;">
						<input type="text" name="position10" id="position10" style="display:none;">
						<input type="text" name="position11" id="position11" style="display:none;">
						<input type="text" name="position12" id="position12" style="display:none;">
						<input type="text" name="position13" id="position13" style="display:none;">
						<input type="text" name="position14" id="position14" style="display:none;">
						
						<input type="text" name="positionnum" id="positionnum" style="display:none;">
						
						<input type="submit" class="btn btn-default" name="chart_submit" id="chart_submit" value="Save & Next >" style="background-color:#F2923F; font-size:14px; color:#FFFFFF;" onClick="positionchartjump()">
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
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
