<?php 
include('config.php');
include('cek-login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>PT SJS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="css/cloud-admin.css" >
	<link rel="stylesheet" type="text/css"  href="css/themes/default.css" id="skin-switcher" >
	<link rel="stylesheet" type="text/css"  href="css/responsive.css" >
	
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<!-- SELECT2 -->
	<link rel="stylesheet" type="text/css" href="js/select2/select2.min.css" />
	<!-- UNIFORM -->
	<link rel="stylesheet" type="text/css" href="js/uniform/css/uniform.default.min.css" />
	<!-- WIZARD -->
	<link rel="stylesheet" type="text/css" href="js/bootstrap-wizard/wizard.css" />
	<link rel="stylesheet" type="text/css" href="js/tablecloth/css/tablecloth.min.css">
	<!-- FONTS 

	<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script> 
	-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	
</head>
<body>
	<?php include 'header.php'; ?>
	
	<!-- PAGE -->
	<section id="page">
				<!-- SIDEBAR -->
				<?php include 'menu.php'; ?>
				<!-- /SIDEBAR -->
		<div id="main-content">
			<!-- SAMPLE BOX CONFIGURATION MODAL FORM-->
			<div class="modal hide fade" id="box-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title">Box Settings</h4>
					</div>
					<div class="modal-body">
					  
        <form action="" method="POST"  name="fedit" id="fedit">
        <label>Kode Jurusan :</label> 
					<input type="text" class="form-control" value="" name="id_jurusan">
                    <label>Nama Jurusan :</label> 
					<input type="text" class="form-control" value="" name="nama_jurusan">
      
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  <button type="button" class="btn btn-primary">Save changes</button>
					</div>
				  </div>
				</div>
			  </div>
			<!-- /SAMPLE BOX CONFIGURATION MODAL FORM-->
			<div class="container">
				<div class="row">
					<div id="content" class="col-lg-12">
						<!-- PAGE HEADER-->
						<div class="row">
							<div class="col-sm-12">
								<div class="page-header">
									<!-- STYLER -->
									
									<!-- /STYLER -->
									<!-- BREADCRUMBS -->
									<ul class="breadcrumb">
										<li>
											<i class="fa fa-home"></i>
											<a href="index.html">Home</a>
										</li>
										<li>
											<a href="#">Riwayat Pengiriman Customer</a>
										</li>
										
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Riwayat Pengiriman Customer</h3>
									</div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->
						<!-- SAMPLE -->
						<div class="row">
						<div class="box border purple">
											<div class="box-title">
											<?php 
													$id = $_GET['id_kandidat'];
													$query = mysql_query("SELECT *
												        FROM tmp_customer inner join kandidat where tmp_customer.id_kandidat=kandidat.id_kandidat AND tmp_customer.id_kandidat='$id'
												       ");
													
													$d = mysql_fetch_array($query);
													?>
													
												<h4><i class="fa fa-bars"></i>Riwayat Pengiriman <?php echo $d['nama']; ?></h4>
										
												<div class="tools hidden-xs">
													<a href="#box-config" data-toggle="modal" class="config">
														<i class="fa fa-cog"></i>
													</a>
													<a href="javascript:;" class="reload">
														<i class="fa fa-refresh"></i>
													</a>
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
													<a href="javascript:;" class="remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
											<div class="box-body big">
												<div class="row">
												   <table class="table table-striped" >
											
											<thead>
											  <tr>
												<th>No.</th>
												<th> Nama Customer</th>
												<th> Jabatan Di lamar</th>
												<th>Tanggal Pengiriman</th>
												
												
											  </tr>
											</thead>
											<tbody>
											<tr>
											<?php 
											$id = $_GET['id_kandidat'];
											$query = mysql_query("SELECT *
											FROM kandidat  
											where kandidat.id_kandidat='$id'");
											$a = mysql_fetch_array($query);
											?>

											<td>1 </td>
											<td><?php if(!empty($a['status_pengiriman'])){ echo $a['status_pengiriman']; }
												else{ echo "<h3>Belum Pernah Dikirim ke Customer</h3>";}?></td>
											<td><?php echo $a['position']; ?></td>
											<td><?php echo $a['tgl_pengiriman']; ?></td>
											</tr>
											
											<?php
											$id = $_GET['id_kandidat'];
											$query = mysql_query("SELECT *
											FROM tmp_customer inner join kandidat 
											where tmp_customer.id_kandidat=kandidat.id_kandidat AND tmp_customer.id_kandidat='$id'");
											
											$no=2;
											while($data = mysql_fetch_array($query)){
											
											?>
											  <tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $data['nama_customer']; ?></td>
												<td><?php echo $data['position']; ?></td>
												<td><?php echo $data['tgl_pengiriman']; ?></td>
												
											  </tr>
											  <?php $no++; } ?>
											</tbody>
										  </table>
													</div>
												</div>
												
											</div>
											
											  
										   </div>
										
								<!-- /BOX -->
							</div>
						</div>
						<!-- /SAMPLE -->
						<div class="footer-tools">
							<span class="go-top">
								<i class="fa fa-chevron-up"></i> Top
							</span>
						</div>
					</div><!-- /CONTENT-->
				</div>
			</div>
		</div>
	</section>
	<!--/PAGE -->
	<!-- JAVASCRIPTS -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- JQUERY -->
	<script src="js/jquery/jquery-2.0.3.min.js"></script>
	<!-- JQUERY UI-->
	<script src="js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
	<!-- BOOTSTRAP -->
	<script src="bootstrap-dist/js/bootstrap.min.js"></script>
	
		
	<!-- DATE RANGE PICKER -->
	<script src="js/bootstrap-daterangepicker/moment.min.js"></script>
	
	<script src="js/bootstrap-daterangepicker/daterangepicker.min.js"></script>
	<!-- SLIMSCROLL -->
	<script type="text/javascript" src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script><script type="text/javascript" src="js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js"></script>
	<!-- BLOCK UI -->
	<script type="text/javascript" src="js/jQuery-BlockUI/jquery.blockUI.min.js"></script>
	<!-- SELECT2 -->
	<script type="text/javascript" src="js/select2/select2.min.js"></script>
	<!-- UNIFORM -->
	<script type="text/javascript" src="js/uniform/jquery.uniform.min.js"></script>
	<!-- WIZARD -->
	<script src="js/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
	<!-- WIZARD -->
	<script src="js/jquery-validate/jquery.validate.min.js"></script>
	<script src="js/jquery-validate/additional-methods.min.js"></script>
	<!-- BOOTBOX -->
	<script type="text/javascript" src="js/bootbox/bootbox.min.js"></script>
	<!-- COOKIE -->
	<script type="text/javascript" src="js/jQuery-Cookie/jquery.cookie.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<script type="text/javascript" src="js/tablecloth/js/jquery.tablecloth.js"></script>
	<script src="js/script.js"></script>
	<script src="js/bootstrap-wizard/form-wizard.min.js"></script>

	
	<script>
		jQuery(document).ready(function() {		
			App.setPage("wizards_validations");  //Set current page
			App.init(); //Initialise plugins and elements
			FormWizard.init();
		});
	</script>



</body>
</html>