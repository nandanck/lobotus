<!DOCTYPE html>
<html lang="en" ng-app>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	
	<meta name="author" content="Nandan C K">

    <title>Lobotus Task</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../components/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- FormValidation CSS file -->
	<link rel="stylesheet" href="../../components/formvalidation/dist/css/formValidation.min.css">
	
    <!-- Custom Fonts -->
    <link href="../../components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- DateTimePicker CSS file -->
	<link href="../../components/bootstrap-datetimepicker/dist/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/> 
	
	<!-- iCheck Plugin-->
	<link href="../../components/icheck/skins/all.css" rel="stylesheet">
	
    
	<style>
		
		body {
			padding-top: 20px;
			padding-bottom: 60px;
		}
	
		.navbar {
			margin-bottom: 20px;
		}
		
		.imgbor {
			border: 1px;
			background-color: #bbdefb;
			padding:6px;
			border-radius: 4px;
		}
		
		#form_1  .form-control-feedback {
			top: 35px;
			right: -12px;
		}
		
		
		
	</style>
	
</head>
	
<body style="background-color:#ffffdd">


    <div class="container">

		<!-- Static navbar -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Lobotus</a>
				</div>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a><i class="fa fa-calendar"></i> &nbsp;<span id="date"></span></a></li>
				</ul>
				
				
				
				
				
			</div><!--/.container-fluid -->
		</nav>
	</div>
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form class="form" role="form" id="form_1" method="POST" action="php/basic_c.php" autocomplete="off">
					<div class="panel panel-success">
						<div class="panel-heading">
							<div class="panel-title"> Input</div>
						</div>
						<div class="panel-body" style="background-color:#ddde8f">
							
							<div class="row"> 
								
                                <div id="" class="col-md-3 selectContainer">
									<label class="control-label">From&nbsp; </label><br>
									<select class="form-control" id="fro_city" name="fro_city" onchange="showDetails();">
										<option value="">Please choose</option>
										<option value="North">Delhi</option>
										<option value="North">Jaipur</option>
										<option value="North">Lucknow</option>
										<option value="North">Srinagar</option>
										
										<option value="South">Bengaluru</option>
										<option value="South">Chennai</option>
										<option value="South">Hyderabad</option>
										<option value="South">Cochin</option>
										
										<option value="East ">Kolkatta</option>
										<option value="East ">Bhuvaneshwar</option>
										<option value="East ">Jaipur</option>
										<option value="East ">Gangtok</option>
										
										<option value="West">Mumbai</option>
										<option value="West">Pune</option>
										<option value="West">Surat</option>
										<option value="West">Ahmedabad</option>
									</select>
								</div>
								
								<div id="" class="col-md-3 selectContainer">
									<label class="control-label">To&nbsp; </label><br>
									<select class="form-control" id="to_city" name="to_city" onchange="showDetails();">
										<option value="">Please choose</option>
										<option value="North">Delhi</option>
										<option value="North">Jaipur</option>
										<option value="North">Lucknow</option>
										<option value="North">Srinagar</option>
										
										<option value="South">Bengaluru</option>
										<option value="South">Chennai</option>
										<option value="South">Hyderabad</option>
										<option value="South">Cochin</option>
										
										<option value="East">Kolkatta</option>
										<option value="East">Bhuvaneshwar</option>
										<option value="East">Jaipur</option>
										<option value="East">Gangtok</option>
										
										<option value="West">Mumbai</option>
										<option value="West">Pune</option>
										<option value="West">Surat</option>
										<option value="West">Ahmedabad</option>
									</select>
								</div>
								
								<div id="" class="col-md-3 selectContainer">
									<label class="control-label">Kg&nbsp; </label><br>
									<select class="form-control" id="kg_dr" name="kg_dr">
										<option value="">Please choose</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
								
								
								
							<div>
								
								
								<div class="col-md-2">
									<label class="control-label">&nbsp;</label>
									<button type="button" class="btn btn-success btn-block"  onclick="showoutput()">Get Details</button>
								</div>
								
							</div> <!-- date selection -->
							</br></br>
							
							<div class="row"  style="display:none;">
									<div class="form-group col-md-6">
										<label class="control-label" for="">Zone</label>
										<input type="text" class="form-control" id="zone_val" name="zone_val" placeholder="" readonly />
									</div>
								</div>
								
								
							</br></br>
								
								
								
                            </div>
							
							<div class="row"  >
									<div class="form-group col-md-6">
										<label class="control-label" for="">Output Value</label>
										<input type="text" class="form-control" id="out_val" name="out_val" placeholder="" readonly />
									</div>
								</div>
						</div>
						<!-- end of panel body -->
					</div>
					<!-- End of panel -->
				</form>
				<!-- End of form -->
			</div>
			<!-- End of Column -->
		</div>
		<!-- End of Row -->
		
	</div>
	<!-- End of Container -->
	
	
	
	<!-- The modal -->
    <div class="modal fade" id="helloModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Bravo...<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></h4>
                </div>
                <div class="modal-body">
                    <div class="text-center welcome"></div>
                </div>
            </div>
        </div>
    </div>
	<!-- end of modal -->
	
	
	
	<!-- jQuery -->
	<script src="../../components/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../../components/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../components/angularjs/angular.min.js"></script>
	
	<!-- FormValidation plugin and the class supports validating Bootstrap form -->
	<script src="../../components/formvalidation/dist/js/formValidation.min.js"></script>
	<script src="../../components/formvalidation/dist/js/framework/bootstrap.min.js"></script>

	<!-- DateTimePicker plugin -->
	<script src="../../components/bootstrap-datetimepicker/dist/js/moment.min.js"></script>
	<script src="../../components/bootstrap-datetimepicker/dist/js/bootstrap-datetimepicker.min.js"></script>
	<script src="../../components/bootstrap-datetimepicker/dist/js/zepto.min.js"></script>

	<!-- iCheck Plugin -->
	<script src="../../components/icheck/icheck.min.js"></script>
	
	<!-- justgauge -->
	<script src="../../components/justgage/justgage.1.0.1.min.js"></script>
	<script src="../../components/justgage/raphael.2.1.0.min.js"></script>
	
	<!-- easy pie chart -->
	<script src="../../components/canvgauge/gauge.min.js"></script>
	
	

	<script>
		n = new Date();
		document.getElementById('date').innerHTML = n.toDateString();
		
		
	
	
		

	</script>
	
	
	<script>
	
	
			
			
			function showDetails() {

				
				
				
				var city1 = $('#fro_city').val();
				var city2 = $('#to_city').val();
				
				if (( city1 === "North" && city2 === "North" ) || ( city1 === "South" && city2 === "South" )  ) {
		
					$("#zone_val").val("z1");
					
					} else if (( city1 === "North" && city2 === "South" ) || ( city1 === "North" && city2 === "East" ) ||  ( city1 === "South" && city2 === "North" ) || ( city1 === "South" && city2 === "East" )  || ( city1 === "East" && city2 === "North" ) || ( city1 === "East" && city2 === "South" ) || ( city1 === "West" && city2 === "South" )   ) {
		
					$("#zone_val").val("z2");
					
					} else if (( city1 === "North" && city2 === "West" ) || ( city1 === "South" && city2 === "West" ) ||  ( city1 === "East" && city2 === "East" ) || ( city1 === "East" && city2 === "West" )  || ( city1 === "West" && city2 === "North" ) || ( city1 === "West" && city2 === "East" ) ) {
		
					$("#zone_val").val("z3");
					
					}  else if ( city1 === "West" && city2 === "West"  ) {
		
					$("#zone_val").val("z4");
					
					}  else {
		
					$("#zone_val").val("NA");
					
					}
				}
					
				
				function showoutput() {
					
					
					var zo1 = $('#zone_val').val();
				    var kg_v = $('#kg_dr').val();
					
					
					if ( zo1 === "z1" && kg_v === "1" ){
		
					$("#out_val").val("100");
					
					} else if ( zo1 === "z2" && kg_v === "1" ) {
		
					$("#out_val").val("120");
					
					}  else if ( zo1 === "z3" && kg_v === "1" ) {
		
					$("#out_val").val("135");
					
					} else if ( zo1 === "z4" && kg_v === "1" ) {
		
					$("#out_val").val("150");
					
					} else if ( zo1 === "z1" && kg_v === "2" ){
		
					$("#out_val").val("11");
					
					} else if ( zo1 === "z2" && kg_v === "2" ) {
		
					$("#out_val").val("125");
					
					}  else if ( zo1 === "z3" && kg_v === "2" ) {
		
					$("#out_val").val("145");
					
					} else if ( zo1 === "z4" && kg_v === "2" ) {
		
					$("#out_val").val("165");
					
					} else if ( zo1 === "z1" && kg_v === "3" ){
		
					$("#out_val").val("125");
					
					} else if ( zo1 === "z2" && kg_v === "3" ) {
		
					$("#out_val").val("140");
					
					}  else if ( zo1 === "z3" && kg_v === "3" ) {
		
					$("#out_val").val("150");
					
					} else if ( zo1 === "z4" && kg_v === "3" ) {
		
					$("#out_val").val("180");
					
					} else if ( zo1 === "z1" && kg_v === "4" ){
		
					$("#out_val").val("130");
					
					} else if ( zo1 === "z2" && kg_v === "4" ) {
		
					$("#out_val").val("150");
					
					}  else if ( zo1 === "z3" && kg_v === "4" ) {
		
					$("#out_val").val("175");
					
					} else if ( zo1 === "z4" && kg_v === "4" ) {
		
					$("#out_val").val("200");
					
					}  else if ( zo1 === "z1" && kg_v === "5" ){
		
					$("#out_val").val("150");
					
					} else if ( zo1 === "z2" && kg_v === "5" ) {
		
					$("#out_val").val("175");
					
					}  else if ( zo1 === "z3" && kg_v === "5" ) {
		
					$("#out_val").val("220");
					
					} else if ( zo1 === "z4" && kg_v === "5" ) {
		
					$("#out_val").val("250");
					
					}
				}
					
					
					
					
				
				

	</script>
	

	
	
</body>

</html>