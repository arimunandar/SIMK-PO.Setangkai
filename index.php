<?php 
	session_start();
	if (isset($_SESSION['username'])) {
		header('Location: dashboard.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="assets/images/favicon.png">

	<title>PO. SETANGKAI</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="assets/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" href="assets/fonts/font-awesome-4/css/font-awesome.min.css">

	<!-- Custom styles for this template -->
	<link href="assets/css/style.css" rel="stylesheet" />	

</head>

<body class="texture">

<div id="cl-wrapper" class="login-container">

	<div class="middle-login">
		<div class="block-flat">
			<div class="header">							
				<h3 class="text-center">PO. SETANGKAI</h3>
			</div>
			<div>
				<form style="margin-bottom: 0px !important;" class="form-horizontal" action="core/login.php" method="post">
					<div class="content">
						<h4 class="title">Login Access</h4>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" placeholder="Username" id="username" class="form-control" name="username">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" placeholder="Password" id="password" class="form-control" name="password">
									</div>
								</div>
							</div>
							
					</div>
					<div class="foot">
						<button class="btn btn-primary" data-dismiss="modal" type="submit" name="signin"><span class="fa fa-sign-in"></span> Login</button>
					</div>
				</form>
			</div>
		</div>
	</div> 
	
</div>

<script src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/behaviour/general.js"></script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
  <script src="assets/js/behaviour/voice-commands.js"></script>
  <script src="assets/js/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.flot/jquery.flot.js"></script>
<script type="text/javascript" src="assets/js/jquery.flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="assets/js/jquery.flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="assets/js/jquery.flot/jquery.flot.labels.js"></script>
</body>
</html>
