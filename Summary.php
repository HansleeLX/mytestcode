<?php
	$sid = session_id();
	if(!$sid)
	{  
		session_start();
	}
	
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>
        Summary page sample
    </title>
  
   <!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
	
    <link href="css/jquery.orgchart.css" rel="stylesheet" type="text/css">
	 
    <link rel="stylesheet" href="css/competencies.css">
	
	<!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	<style>
		hr { 
			display: block;
			margin-top: 0.5em;
			margin-bottom: 0.5em;
			margin-left: auto;
			margin-right: auto;
			border-style: inset;
			border-width: 1px;
		} 
	</style>

</head>

<body>
	<div class="container-fluid">
	    <section class="container">
	    	<center><h2 class="dark-grey">Summary</h2></center>
			<div class="container-page">	

				<!-- Organisation Context -->
				<div class="col-md-10 col-md-offset-1">
				<hr>
					<h3 class="dark-grey">Organisation Context</h3>
					
					<div class="form-group col-lg-12">
						<div class="form-group col-lg-4">
							<label>Job Title </label>
						</div>
						<div class="form-group col-lg-4">
							<input disabled="disabled" type="" name="" class="form-control" id="" value="<?php echo $_SESSION['jobtitle']?>">
						</div>
					</div>
					
					<div class="form-group col-lg-12">
						<div class="form-group col-lg-4">
							<label>Organisational Details</label>
						</div>
						<div class="form-group col-lg-4">
							<input disabled="disabled" type="" name="" class="form-control" id="" value="<?php echo $_SESSION['organization']?>">
						</div>
						<div class="form-group col-lg-12">
							<textarea disabled="disabled" class="form-control" rows="5" id="comment"><?php echo $_SESSION['org_dtl']?></textarea>
						</div>
					</div>
					
					<div class="form-group col-lg-12">

					</div>
					<div class="form-group col-lg-12">
						<div class="form-group col-lg-4">
							<label>Business Unit Details</label>
						</div>
						<div class="form-group col-lg-4">
							<input disabled="disabled" type="" name="" class="form-control" id="" value="<?php echo $_SESSION['businessunit']?>">
						</div>
						<div class="form-group col-lg-12">
							<textarea disabled="disabled" class="form-control" rows="5" id="comment"><?php echo $_SESSION['bu_dtl']?></textarea>
						</div>
					</div>
					<div class="form-group col-lg-12">
						<div class="form-group col-lg-4">
							<label>Team Details</label>
						</div>
						<div class="form-group col-lg-4">
							<input disabled="disabled" type="" name="" class="form-control" id="" value="<?php echo $_SESSION['team']?>">
						</div>
						<div class="form-group col-lg-12">
							<textarea disabled="disabled" class="form-control" rows="5" id="comment"><?php echo $_SESSION['team_dtl']?></textarea>
						</div>
					</div>

				</div>

				<!-- Primary Focus -->

				<div class="col-md-10 col-md-offset-1">
				<hr>
	    			<h3 class="dark-grey">Primary Focus</h3>
					<div class="form-group col-lg-12">
						<div class="form-group col-lg-4">
							<label>Operational</label>
						</div>
						<div class="form-group col-lg-4">
							<input type="" disabled="disabled" name="" class="form-control" id="" value="<?php echo $_SESSION['oper_rating']?>">
						</div>
					</div>
					<div class="form-group col-lg-12">
						<div class="form-group col-lg-4">
							<label>Consultative</label>
						</div>
						<div class="form-group col-lg-4">
							<input type="" disabled="disabled" name="" class="form-control" id="" value="<?php echo $_SESSION['cons_rating']?>">
						</div>
					</div>
					<div class="form-group col-lg-12">
						<div class="form-group col-lg-4">
							<label>Project Management</label>
						</div>
						<div class="form-group col-lg-4">
							<input type="" disabled="disabled" name="" class="form-control" id="" value="<?php echo $_SESSION['teamlead_rating']?>">
						</div>
					</div>
					<div class="form-group col-lg-12">
						<div class="form-group col-lg-4">
							<label>Strategic</label>
						</div>
						<div class="form-group col-lg-4">
							<input type="" disabled="disabled" name="" class="form-control" id="" value="<?php echo $_SESSION['strat_rating']?>">
						</div>
					</div>
				</div>
	            
	            <!-- Competencies -->
				<div class="col-md-10 col-md-offset-1">
				<hr>
	    			<h3 class="dark-grey">Competencies</h3>

					<div class="form-group col-lg-12">
						<div class="panel panel-success">
					      <!--<div class="panel-heading">Senior Manager</div>-->
					      <div class="panel-body">
						  	<ul id="target_ul" class="target connected">
                            </ul>
							<!--the script just display the competencies.-->
							<script>
								var ul = document.getElementById('target_ul');
								
								var competenciesnum = '<?php echo $_SESSION['competenciesnum']?>';
								// <?php
								// 	for($i=0;$i<competenciesnum;$i++){
								// 		// $element_name="li".$i;
								// 		$com_name = "competencies".$i;
								// 		$element_name = document.createElement('li');
								// 		$element_name.innerHTML =  '<?php echo $_SESSION['$com_name']?>';
								// 	ul.appendChild($element_name);
								// 	}
								// ?>

								if(competenciesnum == '1')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
								}
								
								if(competenciesnum == '2')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
								}
								
								if(competenciesnum == '3')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
								}
								
								if(competenciesnum == '4')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
									var li3 = document.createElement('li');
									li3.innerHTML = '<?php echo $_SESSION['competencies3']?>';
									ul.appendChild(li3);
								}
								
								if(competenciesnum == '5')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
									var li3 = document.createElement('li');
									li3.innerHTML = '<?php echo $_SESSION['competencies3']?>';
									ul.appendChild(li3);
									
									var li4 = document.createElement('li');
									li4.innerHTML = '<?php echo $_SESSION['competencies4']?>';
									ul.appendChild(li4);
								}
								
								if(competenciesnum == '6')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
									var li3 = document.createElement('li');
									li3.innerHTML = '<?php echo $_SESSION['competencies3']?>';
									ul.appendChild(li3);
									
									var li4 = document.createElement('li');
									li4.innerHTML = '<?php echo $_SESSION['competencies4']?>';
									ul.appendChild(li4);
									
									var li5 = document.createElement('li');
									li5.innerHTML = '<?php echo $_SESSION['competencies5']?>';
									ul.appendChild(li5);
								}
								
								if(competenciesnum == '7')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
									var li3 = document.createElement('li');
									li3.innerHTML = '<?php echo $_SESSION['competencies3']?>';
									ul.appendChild(li3);
									
									var li4 = document.createElement('li');
									li4.innerHTML = '<?php echo $_SESSION['competencies4']?>';
									ul.appendChild(li4);
									
									var li5 = document.createElement('li');
									li5.innerHTML = '<?php echo $_SESSION['competencies5']?>';
									ul.appendChild(li5);
									
									var li6 = document.createElement('li');
									li6.innerHTML = '<?php echo $_SESSION['competencies6']?>';
									ul.appendChild(li6);
								}
								
								if(competenciesnum == '8')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
									var li3 = document.createElement('li');
									li3.innerHTML = '<?php echo $_SESSION['competencies3']?>';
									ul.appendChild(li3);
									
									var li4 = document.createElement('li');
									li4.innerHTML = '<?php echo $_SESSION['competencies4']?>';
									ul.appendChild(li4);
									
									var li5 = document.createElement('li');
									li5.innerHTML = '<?php echo $_SESSION['competencies5']?>';
									ul.appendChild(li5);
									
									var li6 = document.createElement('li');
									li6.innerHTML = '<?php echo $_SESSION['competencies6']?>';
									ul.appendChild(li6);
									
									var li7 = document.createElement('li');
									li7.innerHTML = '<?php echo $_SESSION['competencies7']?>';
									ul.appendChild(li7);
								}
								
								if(competenciesnum == '9')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
									var li3 = document.createElement('li');
									li3.innerHTML = '<?php echo $_SESSION['competencies3']?>';
									ul.appendChild(li3);
									
									var li4 = document.createElement('li');
									li4.innerHTML = '<?php echo $_SESSION['competencies4']?>';
									ul.appendChild(li4);
									
									var li5 = document.createElement('li');
									li5.innerHTML = '<?php echo $_SESSION['competencies5']?>';
									ul.appendChild(li5);
									
									var li6 = document.createElement('li');
									li6.innerHTML = '<?php echo $_SESSION['competencies6']?>';
									ul.appendChild(li6);
									
									var li7 = document.createElement('li');
									li7.innerHTML = '<?php echo $_SESSION['competencies7']?>';
									ul.appendChild(li7);
									
									var li8 = document.createElement('li');
									li8.innerHTML = '<?php echo $_SESSION['competencies8']?>';
									ul.appendChild(li8);
								}
								
								if(competenciesnum == '10')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
									var li3 = document.createElement('li');
									li3.innerHTML = '<?php echo $_SESSION['competencies3']?>';
									ul.appendChild(li3);
									
									var li4 = document.createElement('li');
									li4.innerHTML = '<?php echo $_SESSION['competencies4']?>';
									ul.appendChild(li4);
									
									var li5 = document.createElement('li');
									li5.innerHTML = '<?php echo $_SESSION['competencies5']?>';
									ul.appendChild(li5);
									
									var li6 = document.createElement('li');
									li6.innerHTML = '<?php echo $_SESSION['competencies6']?>';
									ul.appendChild(li6);
									
									var li7 = document.createElement('li');
									li7.innerHTML = '<?php echo $_SESSION['competencies7']?>';
									ul.appendChild(li7);
									
									var li8 = document.createElement('li');
									li8.innerHTML = '<?php echo $_SESSION['competencies8']?>';
									ul.appendChild(li8);
									
									var li9 = document.createElement('li');
									li9.innerHTML = '<?php echo $_SESSION['competencies9']?>';
									ul.appendChild(li9);
								}
								
								if(competenciesnum == '11')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
									var li3 = document.createElement('li');
									li3.innerHTML = '<?php echo $_SESSION['competencies3']?>';
									ul.appendChild(li3);
									
									var li4 = document.createElement('li');
									li4.innerHTML = '<?php echo $_SESSION['competencies4']?>';
									ul.appendChild(li4);
									
									var li5 = document.createElement('li');
									li5.innerHTML = '<?php echo $_SESSION['competencies5']?>';
									ul.appendChild(li5);
									
									var li6 = document.createElement('li');
									li6.innerHTML = '<?php echo $_SESSION['competencies6']?>';
									ul.appendChild(li6);
									
									var li7 = document.createElement('li');
									li7.innerHTML = '<?php echo $_SESSION['competencies7']?>';
									ul.appendChild(li7);
									
									var li8 = document.createElement('li');
									li8.innerHTML = '<?php echo $_SESSION['competencies8']?>';
									ul.appendChild(li8);
									
									var li9 = document.createElement('li');
									li9.innerHTML = '<?php echo $_SESSION['competencies9']?>';
									ul.appendChild(li9);
									
									var li10 = document.createElement('li');
									li10.innerHTML = '<?php echo $_SESSION['competencies10']?>';
									ul.appendChild(li10);
								}
								
								if(competenciesnum == '12')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
									var li3 = document.createElement('li');
									li3.innerHTML = '<?php echo $_SESSION['competencies3']?>';
									ul.appendChild(li3);
									
									var li4 = document.createElement('li');
									li4.innerHTML = '<?php echo $_SESSION['competencies4']?>';
									ul.appendChild(li4);
									
									var li5 = document.createElement('li');
									li5.innerHTML = '<?php echo $_SESSION['competencies5']?>';
									ul.appendChild(li5);
									
									var li6 = document.createElement('li');
									li6.innerHTML = '<?php echo $_SESSION['competencies6']?>';
									ul.appendChild(li6);
									
									var li7 = document.createElement('li');
									li7.innerHTML = '<?php echo $_SESSION['competencies7']?>';
									ul.appendChild(li7);
									
									var li8 = document.createElement('li');
									li8.innerHTML = '<?php echo $_SESSION['competencies8']?>';
									ul.appendChild(li8);
									
									var li9 = document.createElement('li');
									li9.innerHTML = '<?php echo $_SESSION['competencies9']?>';
									ul.appendChild(li9);
									
									var li10 = document.createElement('li');
									li10.innerHTML = '<?php echo $_SESSION['competencies10']?>';
									ul.appendChild(li10);
									
									var li11 = document.createElement('li');
									li11.innerHTML = '<?php echo $_SESSION['competencies11']?>';
									ul.appendChild(li11);
								}
								
								if(competenciesnum == '13')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
									var li3 = document.createElement('li');
									li3.innerHTML = '<?php echo $_SESSION['competencies3']?>';
									ul.appendChild(li3);
									
									var li4 = document.createElement('li');
									li4.innerHTML = '<?php echo $_SESSION['competencies4']?>';
									ul.appendChild(li4);
									
									var li5 = document.createElement('li');
									li5.innerHTML = '<?php echo $_SESSION['competencies5']?>';
									ul.appendChild(li5);
									
									var li6 = document.createElement('li');
									li6.innerHTML = '<?php echo $_SESSION['competencies6']?>';
									ul.appendChild(li6);
									
									var li7 = document.createElement('li');
									li7.innerHTML = '<?php echo $_SESSION['competencies7']?>';
									ul.appendChild(li7);
									
									var li8 = document.createElement('li');
									li8.innerHTML = '<?php echo $_SESSION['competencies8']?>';
									ul.appendChild(li8);
									
									var li9 = document.createElement('li');
									li9.innerHTML = '<?php echo $_SESSION['competencies9']?>';
									ul.appendChild(li9);
									
									var li10 = document.createElement('li');
									li10.innerHTML = '<?php echo $_SESSION['competencies10']?>';
									ul.appendChild(li10);
									
									var li11 = document.createElement('li');
									li11.innerHTML = '<?php echo $_SESSION['competencies11']?>';
									ul.appendChild(li11);
									
									var li12 = document.createElement('li');
									li12.innerHTML = '<?php echo $_SESSION['competencies12']?>';
									ul.appendChild(li12);
								}
								
								if(competenciesnum == '14')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
									var li3 = document.createElement('li');
									li3.innerHTML = '<?php echo $_SESSION['competencies3']?>';
									ul.appendChild(li3);
									
									var li4 = document.createElement('li');
									li4.innerHTML = '<?php echo $_SESSION['competencies4']?>';
									ul.appendChild(li4);
									
									var li5 = document.createElement('li');
									li5.innerHTML = '<?php echo $_SESSION['competencies5']?>';
									ul.appendChild(li5);
									
									var li6 = document.createElement('li');
									li6.innerHTML = '<?php echo $_SESSION['competencies6']?>';
									ul.appendChild(li6);
									
									var li7 = document.createElement('li');
									li7.innerHTML = '<?php echo $_SESSION['competencies7']?>';
									ul.appendChild(li7);
									
									var li8 = document.createElement('li');
									li8.innerHTML = '<?php echo $_SESSION['competencies8']?>';
									ul.appendChild(li8);
									
									var li9 = document.createElement('li');
									li9.innerHTML = '<?php echo $_SESSION['competencies9']?>';
									ul.appendChild(li9);
									
									var li10 = document.createElement('li');
									li10.innerHTML = '<?php echo $_SESSION['competencies10']?>';
									ul.appendChild(li10);
									
									var li11 = document.createElement('li');
									li11.innerHTML = '<?php echo $_SESSION['competencies11']?>';
									ul.appendChild(li11);
									
									var li12 = document.createElement('li');
									li12.innerHTML = '<?php echo $_SESSION['competencies12']?>';
									ul.appendChild(li12);
									
									var li13 = document.createElement('li');
									li13.innerHTML = '<?php echo $_SESSION['competencies13']?>';
									ul.appendChild(li13);
								}
								
								if(competenciesnum == '15')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
									var li3 = document.createElement('li');
									li3.innerHTML = '<?php echo $_SESSION['competencies3']?>';
									ul.appendChild(li3);
									
									var li4 = document.createElement('li');
									li4.innerHTML = '<?php echo $_SESSION['competencies4']?>';
									ul.appendChild(li4);
									
									var li5 = document.createElement('li');
									li5.innerHTML = '<?php echo $_SESSION['competencies5']?>';
									ul.appendChild(li5);
									
									var li6 = document.createElement('li');
									li6.innerHTML = '<?php echo $_SESSION['competencies6']?>';
									ul.appendChild(li6);
									
									var li7 = document.createElement('li');
									li7.innerHTML = '<?php echo $_SESSION['competencies7']?>';
									ul.appendChild(li7);
									
									var li8 = document.createElement('li');
									li8.innerHTML = '<?php echo $_SESSION['competencies8']?>';
									ul.appendChild(li8);
									
									var li9 = document.createElement('li');
									li9.innerHTML = '<?php echo $_SESSION['competencies9']?>';
									ul.appendChild(li9);
									
									var li10 = document.createElement('li');
									li10.innerHTML = '<?php echo $_SESSION['competencies10']?>';
									ul.appendChild(li10);
									
									var li11 = document.createElement('li');
									li11.innerHTML = '<?php echo $_SESSION['competencies11']?>';
									ul.appendChild(li11);
									
									var li12 = document.createElement('li');
									li12.innerHTML = '<?php echo $_SESSION['competencies12']?>';
									ul.appendChild(li12);
									
									var li13 = document.createElement('li');
									li13.innerHTML = '<?php echo $_SESSION['competencies13']?>';
									ul.appendChild(li13);
									
									var li14 = document.createElement('li');
									li14.innerHTML = '<?php echo $_SESSION['competencies14']?>';
									ul.appendChild(li14);
								}
								
								if(competenciesnum == '16')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
									var li3 = document.createElement('li');
									li3.innerHTML = '<?php echo $_SESSION['competencies3']?>';
									ul.appendChild(li3);
									
									var li4 = document.createElement('li');
									li4.innerHTML = '<?php echo $_SESSION['competencies4']?>';
									ul.appendChild(li4);
									
									var li5 = document.createElement('li');
									li5.innerHTML = '<?php echo $_SESSION['competencies5']?>';
									ul.appendChild(li5);
									
									var li6 = document.createElement('li');
									li6.innerHTML = '<?php echo $_SESSION['competencies6']?>';
									ul.appendChild(li6);
									
									var li7 = document.createElement('li');
									li7.innerHTML = '<?php echo $_SESSION['competencies7']?>';
									ul.appendChild(li7);
									
									var li8 = document.createElement('li');
									li8.innerHTML = '<?php echo $_SESSION['competencies8']?>';
									ul.appendChild(li8);
									
									var li9 = document.createElement('li');
									li9.innerHTML = '<?php echo $_SESSION['competencies9']?>';
									ul.appendChild(li9);
									
									var li10 = document.createElement('li');
									li10.innerHTML = '<?php echo $_SESSION['competencies10']?>';
									ul.appendChild(li10);
									
									var li11 = document.createElement('li');
									li11.innerHTML = '<?php echo $_SESSION['competencies11']?>';
									ul.appendChild(li11);
									
									var li12 = document.createElement('li');
									li12.innerHTML = '<?php echo $_SESSION['competencies12']?>';
									ul.appendChild(li12);
									
									var li13 = document.createElement('li');
									li13.innerHTML = '<?php echo $_SESSION['competencies13']?>';
									ul.appendChild(li13);
									
									var li14 = document.createElement('li');
									li14.innerHTML = '<?php echo $_SESSION['competencies14']?>';
									ul.appendChild(li14);
									
									var li15 = document.createElement('li');
									li15.innerHTML = '<?php echo $_SESSION['competencies15']?>';
									ul.appendChild(li15);
								}
								
								if(competenciesnum == '17')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
									var li3 = document.createElement('li');
									li3.innerHTML = '<?php echo $_SESSION['competencies3']?>';
									ul.appendChild(li3);
									
									var li4 = document.createElement('li');
									li4.innerHTML = '<?php echo $_SESSION['competencies4']?>';
									ul.appendChild(li4);
									
									var li5 = document.createElement('li');
									li5.innerHTML = '<?php echo $_SESSION['competencies5']?>';
									ul.appendChild(li5);
									
									var li6 = document.createElement('li');
									li6.innerHTML = '<?php echo $_SESSION['competencies6']?>';
									ul.appendChild(li6);
									
									var li7 = document.createElement('li');
									li7.innerHTML = '<?php echo $_SESSION['competencies7']?>';
									ul.appendChild(li7);
									
									var li8 = document.createElement('li');
									li8.innerHTML = '<?php echo $_SESSION['competencies8']?>';
									ul.appendChild(li8);
									
									var li9 = document.createElement('li');
									li9.innerHTML = '<?php echo $_SESSION['competencies9']?>';
									ul.appendChild(li9);
									
									var li10 = document.createElement('li');
									li10.innerHTML = '<?php echo $_SESSION['competencies10']?>';
									ul.appendChild(li10);
									
									var li11 = document.createElement('li');
									li11.innerHTML = '<?php echo $_SESSION['competencies11']?>';
									ul.appendChild(li11);
									
									var li12 = document.createElement('li');
									li12.innerHTML = '<?php echo $_SESSION['competencies12']?>';
									ul.appendChild(li12);
									
									var li13 = document.createElement('li');
									li13.innerHTML = '<?php echo $_SESSION['competencies13']?>';
									ul.appendChild(li13);
									
									var li14 = document.createElement('li');
									li14.innerHTML = '<?php echo $_SESSION['competencies14']?>';
									ul.appendChild(li14);
									
									var li15 = document.createElement('li');
									li15.innerHTML = '<?php echo $_SESSION['competencies15']?>';
									ul.appendChild(li15);
									
									var li16 = document.createElement('li');
									li16.innerHTML = '<?php echo $_SESSION['competencies16']?>';
									ul.appendChild(li16);
								}
								
								if(competenciesnum == '18')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
									var li3 = document.createElement('li');
									li3.innerHTML = '<?php echo $_SESSION['competencies3']?>';
									ul.appendChild(li3);
									
									var li4 = document.createElement('li');
									li4.innerHTML = '<?php echo $_SESSION['competencies4']?>';
									ul.appendChild(li4);
									
									var li5 = document.createElement('li');
									li5.innerHTML = '<?php echo $_SESSION['competencies5']?>';
									ul.appendChild(li5);
									
									var li6 = document.createElement('li');
									li6.innerHTML = '<?php echo $_SESSION['competencies6']?>';
									ul.appendChild(li6);
									
									var li7 = document.createElement('li');
									li7.innerHTML = '<?php echo $_SESSION['competencies7']?>';
									ul.appendChild(li7);
									
									var li8 = document.createElement('li');
									li8.innerHTML = '<?php echo $_SESSION['competencies8']?>';
									ul.appendChild(li8);
									
									var li9 = document.createElement('li');
									li9.innerHTML = '<?php echo $_SESSION['competencies9']?>';
									ul.appendChild(li9);
									
									var li10 = document.createElement('li');
									li10.innerHTML = '<?php echo $_SESSION['competencies10']?>';
									ul.appendChild(li10);
									
									var li11 = document.createElement('li');
									li11.innerHTML = '<?php echo $_SESSION['competencies11']?>';
									ul.appendChild(li11);
									
									var li12 = document.createElement('li');
									li12.innerHTML = '<?php echo $_SESSION['competencies12']?>';
									ul.appendChild(li12);
									
									var li13 = document.createElement('li');
									li13.innerHTML = '<?php echo $_SESSION['competencies13']?>';
									ul.appendChild(li13);
									
									var li14 = document.createElement('li');
									li14.innerHTML = '<?php echo $_SESSION['competencies14']?>';
									ul.appendChild(li14);
									
									var li15 = document.createElement('li');
									li15.innerHTML = '<?php echo $_SESSION['competencies15']?>';
									ul.appendChild(li15);
									
									var li16 = document.createElement('li');
									li16.innerHTML = '<?php echo $_SESSION['competencies16']?>';
									ul.appendChild(li16);
									
									var li17 = document.createElement('li');
									li17.innerHTML = '<?php echo $_SESSION['competencies17']?>';
									ul.appendChild(li17);
								}
								
								if(competenciesnum == '19')
								{
									var li0 = document.createElement('li');
									li0.innerHTML = '<?php echo $_SESSION['competencies0']?>';
									ul.appendChild(li0);
									
									var li1 = document.createElement('li');
									li1.innerHTML = '<?php echo $_SESSION['competencies1']?>';
									ul.appendChild(li1);
									
									var li2 = document.createElement('li');
									li2.innerHTML = '<?php echo $_SESSION['competencies2']?>';
									ul.appendChild(li2);
									
									var li3 = document.createElement('li');
									li3.innerHTML = '<?php echo $_SESSION['competencies3']?>';
									ul.appendChild(li3);
									
									var li4 = document.createElement('li');
									li4.innerHTML = '<?php echo $_SESSION['competencies4']?>';
									ul.appendChild(li4);
									
									var li5 = document.createElement('li');
									li5.innerHTML = '<?php echo $_SESSION['competencies5']?>';
									ul.appendChild(li5);
									
									var li6 = document.createElement('li');
									li6.innerHTML = '<?php echo $_SESSION['competencies6']?>';
									ul.appendChild(li6);
									
									var li7 = document.createElement('li');
									li7.innerHTML = '<?php echo $_SESSION['competencies7']?>';
									ul.appendChild(li7);
									
									var li8 = document.createElement('li');
									li8.innerHTML = '<?php echo $_SESSION['competencies8']?>';
									ul.appendChild(li8);
									
									var li9 = document.createElement('li');
									li9.innerHTML = '<?php echo $_SESSION['competencies9']?>';
									ul.appendChild(li9);
									
									var li10 = document.createElement('li');
									li10.innerHTML = '<?php echo $_SESSION['competencies10']?>';
									ul.appendChild(li10);
									
									var li11 = document.createElement('li');
									li11.innerHTML = '<?php echo $_SESSION['competencies11']?>';
									ul.appendChild(li11);
									
									var li12 = document.createElement('li');
									li12.innerHTML = '<?php echo $_SESSION['competencies12']?>';
									ul.appendChild(li12);
									
									var li13 = document.createElement('li');
									li13.innerHTML = '<?php echo $_SESSION['competencies13']?>';
									ul.appendChild(li13);
									
									var li14 = document.createElement('li');
									li14.innerHTML = '<?php echo $_SESSION['competencies14']?>';
									ul.appendChild(li14);
									
									var li15 = document.createElement('li');
									li15.innerHTML = '<?php echo $_SESSION['competencies15']?>';
									ul.appendChild(li15);
									
									var li16 = document.createElement('li');
									li16.innerHTML = '<?php echo $_SESSION['competencies16']?>';
									ul.appendChild(li16);
									
									var li17 = document.createElement('li');
									li17.innerHTML = '<?php echo $_SESSION['competencies17']?>';
									ul.appendChild(li17);
									
									var li18= document.createElement('li');
									li18.innerHTML = '<?php echo $_SESSION['competencies18']?>';
									ul.appendChild(li18);
								}
							</script>
						  </div>
					    </div>
					</div>
				</div>

				<!-- Organisation Chart -->
				<div class="col-md-10 col-md-offset-1">
					<hr>
	    			<h3 class="dark-grey">Organisation Chart</h3>
					<div id="chart">
						<!-- /.content -->
						<div id="orgChartContainer">
							<div id="orgChart"></div>
						</div>
						<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
						<script type="text/javascript" src="js/jquery.orgchart.js"></script>
						<script type="text/javascript">
						
						var position1_info = '<?php echo $_SESSION['position1']?>';
						var position1_first = position1_info.indexOf(",");
						var position1_id = parseInt(position1_info.substring(0,position1_first).toString());
						position1_info = position1_info.substring(position1_first+1,position1_info.length).toString();
						var position1_second = position1_info.indexOf(",");
						var position1_name = position1_info.substring(0,position1_second).toString();
						position1_info = position1_info.substring(position1_second+1,position1_info.length).toString();
						var position1_parent = parseInt(position1_info.substring(0,position1_info.length).toString());
						//alert(position1_id+':'+position1_name+':'+position1_parent);
						
						var position1 = {
							id: position1_id,
							name: position1_name,
							parent: position1_parent}
							
						
						var position2_info = '<?php echo $_SESSION['position2']?>';
						var position2_first = position2_info.indexOf(",");
						var position2_id = parseInt(position2_info.substring(0,position2_first).toString());
						position2_info = position2_info.substring(position2_first+1,position2_info.length).toString();
						var position2_second = position2_info.indexOf(",");
						var position2_name = position2_info.substring(0,position2_second).toString();
						position2_info = position2_info.substring(position2_second+1,position2_info.length).toString();
						var position2_parent = parseInt(position2_info.substring(0,position2_info.length).toString());
						//alert(position1_id+':'+position1_name+':'+position1_parent);
						
						var position2 = {
							id: position2_id,
							name: position2_name,
							parent: position2_parent}
							
						var position3_info = '<?php echo $_SESSION['position3']?>';
						if(position3_info != null)
						{
							var position3_first = position3_info.indexOf(",");
							var position3_id = parseInt(position3_info.substring(0,position3_first).toString());
							position3_info = position3_info.substring(position3_first+1,position3_info.length).toString();
							var position3_second = position3_info.indexOf(",");
							var position3_name = position3_info.substring(0,position3_second).toString();
							position3_info = position3_info.substring(position3_second+1,position3_info.length).toString();
							var position3_parent = parseInt(position3_info.substring(0,position3_info.length).toString());
							//alert(position1_id+':'+position1_name+':'+position1_parent);
							var position3 = {
							id: position3_id,
							name: position3_name,
							parent: position3_parent};
						}
								
						var position4_info = '<?php echo $_SESSION['position4']?>';
						if(position4_info != null)
						{
							var position4_first = position4_info.indexOf(",");
							var position4_id = parseInt(position4_info.substring(0,position4_first).toString());
							position4_info = position4_info.substring(position4_first+1,position4_info.length).toString();
							var position4_second = position4_info.indexOf(",");
							var position4_name = position4_info.substring(0,position4_second).toString();
							position4_info = position4_info.substring(position4_second+1,position4_info.length).toString();
							var position4_parent = parseInt(position4_info.substring(0,position4_info.length).toString());
							//alert(position1_id+':'+position1_name+':'+position1_parent);
							var position4 = {
							id: position4_id,
							name: position4_name,
							parent: position4_parent};
						}

						var position5_info = '<?php echo $_SESSION['position5']?>';
						if(position5_info != null)
						{
							var position5_first = position5_info.indexOf(",");
							var position5_id = parseInt(position5_info.substring(0,position5_first).toString());
							position5_info = position5_info.substring(position5_first+1,position5_info.length).toString();
							var position5_second = position5_info.indexOf(",");
							var position5_name = position5_info.substring(0,position5_second).toString();
							position5_info = position5_info.substring(position5_second+1,position5_info.length).toString();
							var position5_parent = parseInt(position5_info.substring(0,position5_info.length).toString());
							//alert(position1_id+':'+position1_name+':'+position1_parent);
							var position5 = {
							id: position5_id,
							name: position5_name,
							parent: position5_parent};
						}
						
						var position6_info = '<?php echo $_SESSION['position6']?>';
						if(position6_info != null)
						{
							var position6_first = position6_info.indexOf(",");
							var position6_id = parseInt(position6_info.substring(0,position6_first).toString());
							position6_info = position6_info.substring(position6_first+1,position6_info.length).toString();
							var position6_second = position6_info.indexOf(",");
							var position6_name = position6_info.substring(0,position6_second).toString();
							position6_info = position6_info.substring(position6_second+1,position6_info.length).toString();
							var position6_parent = parseInt(position6_info.substring(0,position6_info.length).toString());
							//alert(position1_id+':'+position1_name+':'+position1_parent);
							var position6 = {
							id: position6_id,
							name: position6_name,
							parent: position6_parent};
						}	
						
						var position7_info = '<?php echo $_SESSION['position7']?>';
						if(position7_info != null)
						{
							var position7_first = position7_info.indexOf(",");
							var position7_id = parseInt(position7_info.substring(0,position7_first).toString());
							position7_info = position7_info.substring(position7_first+1,position7_info.length).toString();
							var position7_second = position7_info.indexOf(",");
							var position7_name = position7_info.substring(0,position7_second).toString();
							position7_info = position7_info.substring(position7_second+1,position7_info.length).toString();
							var position7_parent = parseInt(position7_info.substring(0,position7_info.length).toString());
							//alert(position1_id+':'+position1_name+':'+position1_parent);
							var position7 = {
							id: position7_id,
							name: position7_name,
							parent: position7_parent};
						}
						
						var position8_info = '<?php echo $_SESSION['position8']?>';
						if(position8_info != null)
						{
							var position8_first = position8_info.indexOf(",");
							var position8_id = parseInt(position8_info.substring(0,position8_first).toString());
							position8_info = position8_info.substring(position8_first+1,position8_info.length).toString();
							var position8_second = position8_info.indexOf(",");
							var position8_name = position8_info.substring(0,position8_second).toString();
							position8_info = position8_info.substring(position8_second+1,position8_info.length).toString();
							var position8_parent = parseInt(position8_info.substring(0,position8_info.length).toString());
							//alert(position1_id+':'+position1_name+':'+position1_parent);
							var position8 = {
							id: position8_id,
							name: position8_name,
							parent: position8_parent};
						}	
						
						var position9_info = '<?php echo $_SESSION['position9']?>';
						if(position9_info != null)
						{
							var position9_first = position9_info.indexOf(",");
							var position9_id = parseInt(position9_info.substring(0,position9_first).toString());
							position9_info = position9_info.substring(position9_first+1,position9_info.length).toString();
							var position9_second = position9_info.indexOf(",");
							var position9_name = position9_info.substring(0,position9_second).toString();
							position9_info = position9_info.substring(position9_second+1,position9_info.length).toString();
							var position9_parent = parseInt(position9_info.substring(0,position9_info.length).toString());
							//alert(position1_id+':'+position1_name+':'+position1_parent);
							var position9 = {
							id: position9_id,
							name: position9_name,
							parent: position9_parent};
						}
						
						var position10_info = '<?php echo $_SESSION['position10']?>';
						if(position10_info != null)
						{
							var position10_first = position10_info.indexOf(",");
							var position10_id = parseInt(position10_info.substring(0,position10_first).toString());
							position10_info = position10_info.substring(position10_first+1,position10_info.length).toString();
							var position10_second = position10_info.indexOf(",");
							var position10_name = position10_info.substring(0,position10_second).toString();
							position10_info = position10_info.substring(position10_second+1,position10_info.length).toString();
							var position10_parent = parseInt(position10_info.substring(0,position10_info.length).toString());
							//alert(position1_id+':'+position1_name+':'+position1_parent);
							var position10 = {
							id: position10_id,
							name: position10_name,
							parent: position10_parent};
						}
							
						var position11_info = '<?php echo $_SESSION['position11']?>';
						if(position11_info != null)
						{
							var position11_first = position11_info.indexOf(",");
							var position11_id = parseInt(position11_info.substring(0,position11_first).toString());
							position11_info = position11_info.substring(position11_first+1,position11_info.length).toString();
							var position11_second = position11_info.indexOf(",");
							var position11_name = position11_info.substring(0,position11_second).toString();
							position11_info = position11_info.substring(position11_second+1,position11_info.length).toString();
							var position11_parent = parseInt(position11_info.substring(0,position11_info.length).toString());
							//alert(position1_id+':'+position1_name+':'+position1_parent);
							var position11 = {
							id: position11_id,
							name: position11_name,
							parent: position11_parent};
						}
						
						var position12_info = '<?php echo $_SESSION['position12']?>';
						if(position12_info != null)
						{
							var position12_first = position12_info.indexOf(",");
							var position12_id = parseInt(position12_info.substring(0,position12_first).toString());
							position12_info = position12_info.substring(position12_first+1,position12_info.length).toString();
							var position12_second = position12_info.indexOf(",");
							var position12_name = position12_info.substring(0,position12_second).toString();
							position12_info = position12_info.substring(position12_second+1,position12_info.length).toString();
							var position12_parent = parseInt(position12_info.substring(0,position12_info.length).toString());
							//alert(position1_id+':'+position1_name+':'+position1_parent);
							var position12 = {
							id: position12_id,
							name: position12_name,
							parent: position12_parent};
						}
						
						var position13_info = '<?php echo $_SESSION['position13']?>';
						if(position13_info != null)
						{
							var position13_first = position13_info.indexOf(",");
							var position13_id = parseInt(position13_info.substring(0,position13_first).toString());
							position13_info = position13_info.substring(position13_first+1,position13_info.length).toString();
							var position13_second = position13_info.indexOf(",");
							var position13_name = position13_info.substring(0,position13_second).toString();
							position13_info = position13_info.substring(position13_second+1,position13_info.length).toString();
							var position13_parent = parseInt(position13_info.substring(0,position13_info.length).toString());
							//alert(position1_id+':'+position1_name+':'+position1_parent);
							var position13 = {
							id: position13_id,
							name: position13_name,
							parent: position13_parent};
						}
						
						var position14_info = '<?php echo $_SESSION['position14']?>';
						if(position14_info != null)
						{
							var position14_first = position14_info.indexOf(",");
							var position14_id = parseInt(position14_info.substring(0,position14_first).toString());
							position14_info = position14_info.substring(position14_first+1,position14_info.length).toString();
							var position14_second = position14_info.indexOf(",");
							var position14_name = position14_info.substring(0,position14_second).toString();
							position14_info = position14_info.substring(position14_second+1,position14_info.length).toString();
							var position14_parent = parseInt(position14_info.substring(0,position14_info.length).toString());
							//alert(position1_id+':'+position1_name+':'+position1_parent);
							var position14 = {
							id: position14_id,
							name: position14_name,
							parent: position14_parent};
						}
						
						var positionnum_info = '<?php echo $_SESSION['positionnum']?>';
						var positionnum = parseInt(positionnum_info.toString());
						if(positionnum == 3)
						{
							var defaultData = [position1,position2,position3];
						}
						if(positionnum == 4)
						{
							var defaultData = [position1,position2,position3,position4];
						}
						if(positionnum == 5)
						{
							var defaultData = [position1,position2,position3,position4,position5];
						}
						if(positionnum == 6)
						{
							var defaultData = [position1,position2,position3,position4,position5,position6];
						}
						if(positionnum == 7)
						{
							var defaultData = [position1,position2,position3,position4,position5,position6,position7];
						}
						if(positionnum == 8)
						{
							var defaultData = [position1,position2,position3,position4,position5,position6,position7,position8];
						}
						if(positionnum == 9)
						{
							var defaultData = [position1,position2,position3,position4,position5,position6,position7,position8,position9];
						}
						if(positionnum == 10)
						{
							var defaultData = [position1,position2,position3,position4,position5,position6,position7,position8,position9,position10];
						}
						if(positionnum == 11)
						{
							var defaultData = [position1,position2,position3,position4,position5,position6,position7,position8,position9,position10,position11];
						}
						if(positionnum == 12)
						{
							var defaultData = [position1,position2,position3,position4,position5,position6,position7,position8,position9,position10,position11,position12];
						}
						if(positionnum == 13)
						{
							var defaultData = [position1,position2,position3,position4,position5,position6,position7,position8,position9,position10,position11,position12,position13];
						}
						if(positionnum == 14)
						{
							var defaultData = [position1,position2,position3,position4,position5,position6,position7,position8,position9,position10,position11,position12,position13,position14];
						}
						
						
						
						$(function() {
							org_chart = $('#orgChart').orgChart({
								data: defaultData,
								showControls: false,
								allowEdit: false,
								onAddNode: function(node) {
									org_chart.newNode(node.data.id);
								},
								onDeleteNode: function(node) {
									org_chart.deleteNode(node.data.id);
								}
			
							});
						});
						</script>
					</div>
				</div>

				<!-- Accountabilities -->
				<div class="col-md-10 col-md-offset-1">
					<hr>
	    			<h3 class="dark-grey">Accountabilities</h3>
					<div>
						<h4>Organising</h4>
						<br>
						<?php
						foreach ($_SESSION['acc_org'] as $key){
						 	$str = "<p>";
						 	$str = $str.$key."</p>";
						 	if(!empty($key)){
						 		echo $str;
						 	}
						 	
						 } 
						?>
						
					</div>
					<div>
						<h4>Analysing</h4>
						<br>
						<?php
						foreach ($_SESSION['acc_ana'] as $key){
                            $str = "<p>";
                            
                            $str = $str.$key."</p>";
                            if(!empty($key)){
						 		echo $str;
						 	}
                         }
                         ?>
					</div>
					<div>
						<h4>Adhering</h4>
						<br>
						<?php
						foreach ($_SESSION['acc_adh'] as $key){
                            $str = "<p>";
                            
                            $str = $str.$key."</p>";
                            if(!empty($key)){
						 		echo $str;
						 	}
                         }
                         ?>
					</div>
					<div>
						<h4>Managing</h4>
						<br>
						<?php
						foreach ($_SESSION['acc_man'] as $key){
                            $str = "<p>";
                            
                            $str = $str.$key."</p>";
                            if(!empty($key)){
						 		echo $str;
						 	}
                         }
                         ?>
					</div>
				</div>
				
				<!-- Return button -->
				<div class="col-md-10 col-md-offset-1">
					<hr>
					<div style="float:right; margin-bottom:15px;">
						<a href="DashBoard.php" role="button" id="savebutton" type="button" class="btn btn-labeled btn-default">Return Dashboard</a>
					</div>
				</div>
			</div>
		</section>
	</div>

</body>
</html>
