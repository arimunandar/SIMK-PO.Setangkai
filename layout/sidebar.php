	<!--======================== Fixed Navbar ========================== -->
	<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="fa fa-gear"></span>
				</button>
				<a class="navbar-brand" href="#"><span>PO. SETANGKAI</span></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right user-nav">
					<li><a href="core/logout.php"><span class="glyphicon glyphicon-off"></span> Sign Out</a></li>
				</ul>     
			</div><!--/.nav-collapse -->
		</div>
	</div>

	<div id="cl-wrapper">
		<div class="cl-sidebar">
			<div class="cl-toggle"><i class="fa fa-bars"></i></div>
			<div class="cl-navblock">
				<div class="menu-space">
					<div class="content">

						<ul class="cl-vnavigation">
							<li class="active"><a href="dashboard.php"><i class="fa fa-home"></i><span>Dashboard</span></a>
							</li>
							<?php 
								if (isset($_SESSION['level'])) {
									if ($_SESSION['level'] == 'admin') {
							?>
							<li><a href="#"><i class="fa fa-users"></i><span> Users</span></a>
								<ul class="sub-menu">
									<li><a href="?users=Admin"><span class="fa fa-asterisk"></span> Admin</a></li>									
									<li><a href="?users=Operator"><span class="fa fa-asterisk"></span> Operator</a></li>
								</ul>
							</li>														
							<li><a href="#"><i class="fa fa-book"></i><span> Perangkat</span></a>
								<ul class="sub-menu">
									<li><a href="?perangkat=Jadwal"><span class="fa fa-asterisk"></span> Jadwal</a></li>
									<li><a href="?perangkat=Rute"><span class="fa fa-asterisk"></span> Rute</a></li>
									<li><a href="?perangkat=Mobil"><span class="fa fa-asterisk"></span> Mobil</a></li>
									<li><a href="?perangkat=Supir"><span class="fa fa-asterisk"></span> Supir</a></li>
								</ul>
							</li>
							<li><a href="#"><i class="fa fa-pencil"></i><span> Keberangkatan</span></a>
								<ul class="sub-menu">
									<li><a href="?keberangkatan=Penumpang"><span class="fa fa-asterisk"></span> Penumpang</a></li>
									<li><a href="?keberangkatan=Barang"><span class="fa fa-asterisk"></span> Barang</a></li>
									<li><a href="?keberangkatan=Surat"><span class="fa fa-asterisk"></span> Surat Jalan</a></li>
								</ul>
							</li>
							<li><a href="#"><i class="fa fa-pencil"></i><span> Laporan</span></a>
								<ul class="sub-menu">
									<li><a href="?laporan=Keuangan"><span class="fa fa-asterisk"></span> Laporan Pendapatan</a></li>
								</ul>
							</li>
							<?php
									}elseif ($_SESSION['level'] == 'operator') {
							?>														
							<li><a href="#"><i class="fa fa-book"></i><span> Perangkat</span></a>
								<ul class="sub-menu">
									<li><a href="?perangkat=Jadwal"><span class="fa fa-asterisk"></span> Jadwal</a></li>
									<li><a href="?perangkat=Rute"><span class="fa fa-asterisk"></span> Rute</a></li>
									<li><a href="?perangkat=Mobil"><span class="fa fa-asterisk"></span> Mobil</a></li>
									<li><a href="?perangkat=Supir"><span class="fa fa-asterisk"></span> Supir</a></li>
								</ul>
							</li>
							<li><a href="#"><i class="fa fa-pencil"></i><span> Keberangkatan</span></a>
								<ul class="sub-menu">
									<li><a href="?keberangkatan=Penumpang"><span class="fa fa-asterisk"></span> Penumpang</a></li>
									<li><a href="?keberangkatan=Barang"><span class="fa fa-asterisk"></span> Barang</a></li>
									<li><a href="?keberangkatan=Surat"><span class="fa fa-asterisk"></span> Surat Jalan</a></li>
								</ul>
							</li>
							<?php
									}
								}
							?>							
						</ul>
					</div>
				</div>
				<div class="text-right collapse-button" style="padding:7px 9px;">
					<input type="text" class="form-control search" placeholder="" />
					<button id="sidebar-collapse" class="btn btn-default" style="">
						<i style="color:#fff;" class="fa fa-angle-left"></i>
					</button>
				</div>
			</div>
		</div>