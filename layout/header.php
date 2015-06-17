<?php 
	session_start();
	require_once('config/db.php');
	if (!isset($_SESSION['username'])) {
		header('Location: index.php');
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

		<title>PO. SETANGKAI | ARI MUNANDAR</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

		<!--======================== Bootstrap core CSS ========================== -->
		<link href="assets/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/js/jquery.gritter/css/jquery.gritter.css" />

		<link rel="stylesheet" href="assets/fonts/font-awesome-4/css/font-awesome.min.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="assets/js/jquery.nanoscroller/nanoscroller.css" />
		<link rel="stylesheet" type="text/css" href="assets/js/jquery.easypiechart/jquery.easy-pie-chart.css" />
		<link rel="stylesheet" type="text/css" href="assets/js/bootstrap.switch/bootstrap-switch.css" />
		<link rel="stylesheet" type="text/css" href="assets/js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/js/jquery.select2/select2.css" />
		<link rel="stylesheet" type="text/css" href="assets/js/bootstrap.slider/css/slider.css" />
		<link rel="stylesheet" type="text/css" href="assets/js/jquery.niftymodals/css/component.css" />
		<link rel="stylesheet" type="text/css" href="assets/js/jquery.datatables/bootstrap-adapter/css/datatables.css" />

		<!--======================== Custom styles for this template ========================== -->
		<link href="assets/css/style.css" rel="stylesheet" />

		<!-- DataTables CSS -->
		<link rel="stylesheet" type="text/css" href="assets/datatables/media/css/jquery.dataTables.css">
		  
		<!-- jQuery -->
		<script type="text/javascript" charset="utf8" src="assets/datatables/media/js/jquery.js"></script>
		  
		<!-- DataTables -->
		<script type="text/javascript" charset="utf8" src="assets/datatables/media/js/jquery.dataTables.js"></script>
	</head>
<body>
	
