<?php
	$sid = session_id();
	if(!$sid)
	{  
		session_start();
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Junior Manager</title>
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
	<!-- record selected compentency and jump to next page -->
	<script src="js/competenciesjump.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/competencies.css">
	<link href="css/btn_savenext.css" rel="stylesheet" type="text/css">
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
                            <i class="fa fa-briefcase"></i> <span>Position Chart</span>
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
            <div class="container-fluid">
                <div class="row col-lg-10 col-lg-offset-1 custyle">
                    <h4> <b>Competencies - Junior Manager</b></h4>
                    <p>
                        We believe that the most common and relevant competencies which are required can be broken down to the following 2 types. Please select the ones that are relevant to this role and reorder them using the simple interface.</p>
                    <p class="text-primary"><span class="glyphicon glyphicon-move"></span> &nbsp;You can drag the content from left side and drop it to right side to re-order it</p>
                    </p>
                    <div class="decoration"></div>
                    <!-- /.content -->
                    <div class="parent">
                        <div class="col-sm-6">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <b>Drag from here</b>
                                </div>
                                <div class="panel-body">
                                    <ul id="source4" class="source connected">
                                        <li>Communicating with and influencing team members</li>
                                        <li>Working with others in teams(same level)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <b>Drop here</b>
                                </div>
                                <div class="panel-body">
                                    <ul id="target4" class="target connected">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="decoration"></div>
                    <div class="text-left">
                        <div style="float:left;">
							<a href="Primary_Focus.php" class="btn btn-labeled btn-default" role="button">
                                    <span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Previous</a>
						</div>
						<div style="float:right;">
							<form action="Position_Chart.php" method="post" id="ol_executive_form" name="ol_executive_form">
								<?php
                                for($i=0;$i<20;$i++){
                                    $id_name="competencies".$i;
                                    $str = "<input type='text' name='$id_name' id='$id_name' style='display:none'>";
                                    echo $str;
                                }
                                ?>
								
								<input type="text" name="competenciesnum" id="competenciesnum" style="display:none;">
								<input type="submit" class="btn btn-default" name="pf_submit" id="pf_submit" value="Save & Next >" style="background-color:#F2923F; font-size:14px; color:#FFFFFF;" onClick="ol_juniormanagerjump()">
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
    <!--drag and drop-->
    <!--drag and drop-->
    <script src="js/sort/sortable.js"></script>
    <script type="text/javascript">
    Sortable.create(source4, {
        group: "sorting",
        sort: true,
        animation: 150
    });
    Sortable.create(target4, {
        group: "sorting",
        sort: true
    });
    </script>
</body>

</html>
