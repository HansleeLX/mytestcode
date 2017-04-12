<?php
	$sid = session_id();
	if(!$sid)
	{  
		session_start();
	}
	
	$oper_rating = $_POST['oper_rating'];
	$_SESSION['oper_rating'] = $oper_rating;
	
	$cons_rating = $_POST['cons_rating'];
	$_SESSION['cons_rating'] = $cons_rating;
	
	$teamlead_rating = $_POST['teamlead_rating'];
	$_SESSION['teamlead_rating'] = $teamlead_rating;
	
	$strat_rating = $_POST['strat_rating'];
	$_SESSION['strat_rating'] = $strat_rating;
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
                    <h4><b>Organisational level and competencies</b></h4>
                    <p>Please select the appropriate organisational level and click Next to select relevant competencies:
                        <p>
                            <div class="decoration-report"></div>
                            <div class="row">
                                <br>
                                <!-- Executive -->
                                <div class="col-sm-5" style="padding-top: 0px;">
                                    <input type="radio" name="browser" id="OL_Executive" value="OL_Executive" />
                                    <label class=labelforRL_Executive for="OL_Executive">Executive</label>
                                </div>
                              
                                
                                <div class="col-sm-7">
                                    <div class="job">	Reporting to the CEO, this level is accountable for setting of their Business Unit strategy.</div>
                                </div>
                                <!-- General Manager -->
                                <div class="col-sm-5">
                                    <input type="radio" name="browser" id="OL_GeneralManager" value="OL_GeneralManager" />
                                    <label class=labelforRL_GeneralManager for="OL_GeneralManager">Direct Report or General Manager</label>
                                </div>
                                
                                
                                <div class="col-sm-7">
                                    <div class="job">This level is accountable for a smaller part of the Business Unit.</div>
                                </div>
                                <!-- Senior Manager -->
                                <div class="col-sm-5">
                                    <input type="radio" name="browser" id="OL_SeniorManager" value="OL_SeniorManager" />
                                    <label class=labelforRL_SeniorManager for="OL_SeniorManager">Senior Manager</label>
                                </div>
                                
                                <div class="col-sm-7">
                                    <div class="job">Supervise and plan activities for a large team, national level accountability and is associated with significant experience and knowledge.</div>
                                </div>
                                <!-- Junior Manager -->
                                <div class="col-sm-5">
                                    <input type="radio" name="browser" id="OL_JuniorManager" value="OL_JuniorManager" />
                                    <label class=labelforRL_JuniorManager for="OL_JuniorManager">Manager</label>
                                </div>
                               
                                <div class="col-sm-7">
                                    <div class="job">Middle level manager associated with managing projects within teams and generally have supervisory duties.</div>
                                </div>
                                <!-- Senior Professional -->
                                <div class="col-sm-5">
                                    <input type="radio" name="browser" id="OL_SeniorProfessional" value="OL_SeniorProfessional" />
                                    <label class=labelforRL_SeniorProfessional for="OL_SeniorProfessional">Senior Specialist</label>
                                </div>
                                
                                <div class="col-sm-7">
                                    <div class="job">Referred to as Subject Matter Expert, this level provides technical guidance to junior team members, sometimes extending to project management activities.</div>
                                </div>
                                <!-- Young Professional -->
                                <div class="col-sm-5">
                                    <input type="radio" name="browser" id="OL_YoungProfessional" value="OL_YoungProfessional" />
                                    <label class=labelforRL_YoungProfessional for="OL_YoungProfessional">Specialist</label>
                                </div>
                                
                                <div class="col-sm-7">
                                    <div class="job">With several years of experience, this level is expected to deliver work with minimum direct supervision.</div>
                                </div>
                                <!-- individual contributor -->
                                <div class="col-sm-5">
                                    <input type="radio" name="browser" id="OL_Individual" value="OL_YoungProfessional" />
                                    <label class=labelforRL_Individual for="OL_Individual">Individual Contributor</label>
                                </div>
                                
                                <div class="col-sm-7">
                                    <div class="job">Generally filled by fresh graduates, trainees or diploma holders and have no supervisory duties.</div>
                                </div>
                            </div>
                            <div class="decoration-below"></div>
                            <div class="text-left">
                                <a href="Primary_Focus.php" class="btn btn-labeled btn-default" role="button">
                                    <span class="btn-label"><i class="glyphicon glyphicon-chevron-left"></i></span>Previous</a>
                                <a href="#" role="button" id="savebutton" type="button" class="btn btn-labeled btn-default"> Save & Next<span class="btn-label"> ></span></a>
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
    <script>

   	$(function(){
   		$("#savebutton").click(function(){
   			var link = $('input[name=browser]:checked').val()+".php";
   			// alert(link);
   			if(link != "undefined.php"){
   				window.location.href= link;
   			} else{
   				alert("You need to select one");
   			}
   			
   		});
   	});
    </script>
</body>

</html>
