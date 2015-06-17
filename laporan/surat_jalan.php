<?php 
	require_once('../config/db.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../assets/images/favicon.png">

		<title>PO. SETANGKAI</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

		<!--======================== Bootstrap core CSS ========================== -->
		<link href="../assets/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../assets/js/jquery.gritter/css/jquery.gritter.css" />

		<link rel="stylesheet" href="../assets/fonts/font-awesome-4/css/font-awesome.min.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../assets/js/html5shiv.js"></script>
		<script src="../assets/js/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="../assets/js/jquery.nanoscroller/nanoscroller.css" />
		<link rel="stylesheet" type="text/css" href="../assets/js/jquery.easypiechart/jquery.easy-pie-chart.css" />
		<link rel="stylesheet" type="text/css" href="../assets/js/bootstrap.switch/bootstrap-switch.css" />
		<link rel="stylesheet" type="text/css" href="../assets/js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" type="text/css" href="../assets/js/jquery.select2/select2.css" />
		<link rel="stylesheet" type="text/css" href="../assets/js/bootstrap.slider/css/slider.css" />
		<link rel="stylesheet" type="text/css" href="../assets/js/jquery.niftymodals/css/component.css" />
		<link rel="stylesheet" type="text/css" href="../assets/js/jquery.datatables/bootstrap-adapter/css/datatables.css" />

		<!--======================== Custom styles for this template ========================== -->
		<link href="../assets/css/style.css" rel="stylesheet" />

		<!-- DataTables CSS -->
		<link rel="stylesheet" type="text/css" href="../assets/datatables/media/css/jquery.dataTables.css">
		  
		<!-- jQuery -->
		<script type="text/javascript" charset="utf8" src="../assets/datatables/media/js/jquery.js"></script>
		  
		<!-- DataTables -->
		<script type="text/javascript" charset="utf8" src="../assets/datatables/media/js/jquery.dataTables.js"></script>
	</head>
<body>
	<div class="container" style="background:#ffffff;">
		<div class="block-flat">
			<div class="header">							
				<center>
					<b><h2>PO. SETANGKAI LINTAU</h2></b><br>
					<h4>Jln. Lintau Buo No. 1 | Telp : (0752) 12345 | HP : 085127383912</h4>
				</center>
			</div>
			<div class="content"><br>
				<center><h3>Data Penumpang</h3></center>
				<table class="table table-bordered" id="table_id1">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Penumpang</th>
							<th>Telepon</th>
							<th>Alamat Jemput</th>
							<th>Alamat Tujuan</th>
						</tr>
					</thead>
					<tbody>
			
					<?php 
						if (isset($_POST['cari'])) {
							$no 		=	1;
							$tanggal 	=	$_POST['tanggal'];
							$jadwal 	=	$_POST['jadwal'];
							$rute 		=	$_POST['rute'];
							$supir 		=	$_POST['supir'];

							$penumpang 	=	mysql_query("SELECT * FROM penumpang 
															WHERE tanggal='$tanggal' 
																AND id_jadwal='$jadwal'
																AND id_rute='$rute'
																AND id_supir='$supir'");
							while ($row=mysql_fetch_array($penumpang)) {
					?>
						<tr>
							<td scope="row"><?php echo $no; ?></td>
							<td><?php echo $row['nama_penumpang']; ?></td>
							<td><?php echo $row['telp_penumpang']; ?></td>
							<td><?php echo $row['alamat_jemput']; ?></td>
							<td><?php echo $row['alamat_tujuan']; ?></td>
						</tr>
					<?php
						$no++;
							}		
						}
					?>
					</tbody>
				</table>
			</div>	
			<center><h3>Data Barang</h3></center>
			<table class="table table-bordered" id="table_id2">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Barang</th>
							<th>Nama Pengirim</th>
							<th>Telepon Pengirim</th>
							<th>Nama Penerima</th>
							<th>Telepon Penerima</th>
							<th>Alamat Penerima</th>
						</tr>
					</thead>
					<tbody>
			
					<?php 
						if (isset($_POST['cari'])) {
							$no 		=	1;
							$tanggal 	=	$_POST['tanggal'];
							$jadwal 	=	$_POST['jadwal'];
							$rute 		=	$_POST['rute'];
							$supir 		=	$_POST['supir'];

							$barang 	=	mysql_query("SELECT * FROM barang 
															WHERE tanggal='$tanggal' 
																AND id_jadwal='$jadwal'
																AND id_rute='$rute'
																AND id_supir='$supir'");
							while ($row=mysql_fetch_array($barang)) {
					?>
						<tr>
							<td scope="row"><?php echo $no; ?></td>
							<td><?php echo $row['nama_barang']; ?></td>
							<td><?php echo $row['nama_pengirim']; ?></td>
							<td><?php echo $row['telp_pengirim']; ?></td>
							<td><?php echo $row['nama_penerima']; ?></td>
							<td><?php echo $row['telp_penerima']; ?></td>
							<td><?php echo $row['alamat_penerima']; ?></td>
						</tr>
					<?php
						$no++;
							}
				?>		
					
					</tbody>
				</table>

				<?php

					$jadwal 		=	mysql_query("SELECT * FROM jadwal WHERE id_jadwal='$jadwal'");
					$data 			=	mysql_fetch_array($jadwal);
					echo "<h4> Jadwal keberangkatan : " .$data['jadwal']. "</h4>";
					}
				?>
				<br><br><br>
				<div class="row">
					<table class="no-border">
						<tbody class="no-border-x no-border-y">
							<tr>
								<td style="width:75%;"></td>
								<td class="text-center">
									<center>
										<?php
											echo "Tanggal : " . date("d-m-Y") . "<br>";
										?>
										<label>Diketahui</label><br><br><br><br><br>
										(...............................................)
									</center>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<button class="btn btn-primary btn-flat md-trigger" data-modal="colored-primary"><span class="fa fa-reply"></span></button>	
				<button class="btn btn-warning btn-flat md-trigger" onClick="window.print();return false"><span class="fa fa-print"></span></button>
		</div>
	</div>

<!-- Nifty Modal -->
<div class="md-modal colored-header md-effect-10" id="colored-primary">
    <div class="md-content">
      <div class="modal-header">
        <h3><span class="fa fa-reply"></span></h3>
        <button type="button" class="close md-close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <div class="i-circle primary"><i class="fa fa-reply"></i></div>
          <h4>Back !</h4>
          <p>Anda yakin kembali ke halaman sebelumnya ?</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat md-close" data-dismiss="modal">Cancel</button>
        <a href="../dashboard.php?keberangkatan=Surat" class="btn btn-primary btn-flat md-close">Kembali</a>
      </div>
    </div>
</div

	<script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.gritter/js/jquery.gritter.js"></script>

    <script type="text/javascript" src="../assets/js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
    <script type="text/javascript" src="../assets/js/behaviour/general.js"></script>
    <script src="../assets/js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assets/js/jquery.sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.nestable/jquery.nestable.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.switch/bootstrap-switch.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/js/jquery.select2/select2.min.js" type="text/javascript"></script>
    <script src="../assets/js/skycons/skycons.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assets/js/jquery.niftymodals/js/jquery.modalEffects.js"></script>   
    <script type="text/javascript" src="../assets/js/bootstrap.summernote/dist/summernote.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.datatables/jquery.datatables.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.datatables/bootstrap-adapter/js/datatables.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.datatables/jquery.datatables.min.js"></script>
 	<script type="text/javascript" src="../assets/js/jquery.datatables/bootstrap-adapter/js/datatables.js"></script>
  	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $(document).ready( function () {
          $('#table_id').DataTable();
      } );
      $(document).ready( function () {
          $('#table_id1').DataTable();
      } );
      $(document).ready( function () {
          $('#table_id2').DataTable();
      } );
    </script>
    <script type="text/javascript">
      //Add dataTable Functions
      var functions = $('<div class="btn-group"><button class="btn btn-default btn-xs" type="button">Actions</button><button data-toggle="dropdown" class="btn btn-xs btn-primary dropdown-toggle" type="button"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><ul role="menu" class="dropdown-menu pull-right"><li><a href="#">Edit</a></li><li><a href="#">Copy</a></li><li><a href="#">Details</a></li><li class="divider"></li><li><a href="#">Remove</a></li></ul></div>');
      $("#datatable tbody tr td:last-child").each(function(){
        $(this).html("");
        functions.clone().appendTo(this);
      });
      
      //Add dataTable Icons
      var functions = $('');
      $("#datatable-icons tbody tr td:last-child").each(function(){
        $(this).html("");
        functions.clone().appendTo(this);
      });
      
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dataTables();
        
       /* Formating function for row details */
       
        /*
         * Insert a 'details' column to the table
         */
        var nCloneTh = document.createElement( 'th' );
        var nCloneTd = document.createElement( 'td' );
        nCloneTd.innerHTML = '<img class="toggle-details" src="images/plus.png" />';
        nCloneTd.className = "center";
         
        $('#datatable2 thead tr').each( function () {
            this.insertBefore( nCloneTh, this.childNodes[0] );
        } );
         
        $('#datatable2 tbody tr').each( function () {
            this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
        } );
         
        /*
         * Initialse DataTables, with no sorting on the 'details' column
         */
        var oTable = $('#datatable2').dataTable( {
            "aoColumnDefs": [
                { "bSortable": false, "aTargets": [ 0 ] }
            ],
            "aaSorting": [[1, 'asc']]
        });
         
        /* Add event listener for opening and closing details
         * Note that the indicator for showing which row is open is not controlled by DataTables,
         * rather it is done here
         */
        $('#datatable2').delegate('tbody td img','click', function () {
            var nTr = $(this).parents('tr')[0];
            if ( oTable.fnIsOpen(nTr) )
            {
                /* This row is already open - close it */
                this.src = "images/plus.png";
                oTable.fnClose( nTr );
            }
            else
            {
                /* Open this row */
                this.src = "images/minus.png";
                oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
            }
        } );
        
      $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
      $('.dataTables_length select').addClass('form-control');    

        //Horizontal Icons dataTable
        $('#datatable-icons').dataTable();
      });
    </script>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script type="text/javascript" src="../assets/js/jquery.magnific-popup/dist/jquery.magnific-popup.min.js"></script>
   
  <script type="text/javascript">
    $(document).ready(function(){
    
      $('.image-zoom').magnificPopup({ 
        type: 'image',
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below
        zoom: {
          enabled: true, // By default it's false, so don't forget to enable it
          duration: 300, // duration of the effect, in milliseconds
          easing: 'ease-in-out', // CSS transition easing function 
          opener: function(openerElement) {
            var parent = $(openerElement);
            return parent;
          }
        }
      });
      
      //Nifty Modals Init
      $('.md-trigger').modalEffects();
      
      //Summernote Editor
      $('#summernote').summernote({ 
        height: 100,
        toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
      ]});
    });
  </script>
  
    <script src="../assets/js/behaviour/voice-commands.js"></script>
  <script src="../assets/js/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.flot/jquery.flot.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.flot/jquery.flot.pie.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.flot/jquery.flot.resize.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.flot/jquery.flot.labels.js"></script>
  </body>
  </html>
