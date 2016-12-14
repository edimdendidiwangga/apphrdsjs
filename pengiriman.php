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
	<!-- FONTS 
	<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
	-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<!-- DROPZONE -->
	<link rel="stylesheet" type="text/css" href="js/dropzone/dropzone.min.css" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<!-- select bootstrap -->
	  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
      <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
      <!-- select bootstrap -->
	  <link rel="stylesheet" href="bootstrap-dist/css/bootstrap-select.min.css" />
      <script src="bootstrap-dist/js/bootstrap-select.min.js"></script>
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
			<div class="modal fade" id="box-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title">Box Settings</h4>
					</div>
					<div class="modal-body">
					  Here goes box setting content.
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
											<a href="index.php">Home</a>
										</li>
										<li>
											<a href="#">Pengiriman Customer</a>
										</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Pengiriman Kandidat ke Customer</h3>
									</div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->
						<!-- SAMPLE -->
						<div class="row">
						<div class="box border purple">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>Pengiriman Customer</h4>
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
												   <?php 
													$id = $_GET['id_kandidat'];

													$query = mysql_query("
												        SELECT *
												        FROM kandidat 
												        where kandidat.id_kandidat='$id'");
													
													$data = mysql_fetch_array($query);

													 $dilamar  = $data['dilamar'];
														  $aray 	= explode(',', $dilamar);
														  
														  $array1	= explode('.', $aray[0]);
														  $array2	= explode('.', $aray[1]);
														  $array3	= explode('.', $aray[2]);
													?>
													<form action="update_customer.php" method="post" class="form-horizontal" role="
													form">
													<input type="hidden" name="id_kandidat" value="<?php echo $id; ?>">
													<input type="hidden" name="nama_customer" value="<?php echo $data['status_pengiriman']; ?>">
													<input type="hidden" name="cabang_t" value="<?php echo $data['cabang']; ?>">
													<input type="hidden" name="position_t" value="<?php echo $data['position']; ?>">
													<input type="hidden" name="tgl_pengiriman_t" value="<?php echo $data['tgl_pengiriman']; ?>">
													<div class="form-group">
													   <label class="control-label col-md-3">Nama Customer<span class="required">*</span></label>
													   <div class="col-md-4">
														  <select name="customer" class="selectpicker" data-show-subtext="true" data-live-search="true" required>
														  <option value="" disabled="" selected="" style="display:none" ;="">Pilih Customer</option>
														  <?php
														  $query = mysql_query("
												        SELECT *
												        FROM customer 
												        ");
													
													while($data = mysql_fetch_array($query)) {
													?>
															 
															 <option value="<?php echo $data['customer'];?>"><?php echo $data['customer'];?></option>
															 
															<?php } ?>
															</select>
														  <span class="error-span"></span>
													   </div>
													</div>
													<div class="form-group">
													   <label class="control-label col-md-3">Kantor Cabang</label>
													   <div class="col-md-4">
														  
														  <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="cabang">
													   
													   <option value="" disabled="" selected="" style="display:none" ;="">Pilih Kantor Cabang</option>
													   <?php
													   $query = mysql_query("
													    SELECT * 
													    FROM sub_cabang ");
											
											
														while ($cs = mysql_fetch_array($query)) {
														?>
														<option value="<?php echo $cs['nama_cabang']; ?>"><?php echo $cs['nama_cabang']; ?>
													   
											<?php } ?>		   
													</select>	
														  <span class="error-span"></span>
														 
													   </div>
													</div>
													<div class="form-group">
													   <label class="control-label col-md-3">Posisi yang dilamar<span class="required">*</span></label>
													   <div class="col-md-4">
															  <?php 
															  
														  echo

																'<label class="radio">
																<input type="radio" name="position" value="'.$array1[0].' '.$array1[1].'" class="uniform" required/>'.$array1[0].' '.$array1[1].'</label>
																<label class="radio">
																<input type="radio" name="position" value="'.$array2[0].' '.$array2[1].'" class="uniform" required/>'.$array2[0].' '.$array2[1].'</label>
																<label class="radio">
																<input type="radio" name="position" value="'.$array3[0].' '.$array3[1].'" class="uniform" required/>'.$array3[0].' '.$array3[1].'</label>';
															?>												  
													   </div>
													</div>
													<div class="form-group">
													   <label class="control-label col-md-3">Tanggal Pengiriman<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" id="tgl_pengiriman" name="tgl_pengiriman" placeholder="DD/MM/YYYY" required/>
														  <span class="error-span"></span>
														   <BR><BR>
														  <input type="submit" class="btn btn-success" value="SIMPAN">
													   </div>
													</div>
													</form>
													
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
	<script src="js/script.js"></script>
	<script src="js/bootstrap-wizard/form-wizard.min.js"></script>

	
	<script>
		jQuery(document).ready(function() {		
			App.setPage("wizards_validations");  //Set current page
			App.init(); //Initialise plugins and elements
			FormWizard.init();
		});
	</script>
	<script>
	$(function() {
    $( "#tgl_pengiriman" ).datepicker({
    	dateFormat: "dd/mm/yy",
      changeMonth: true,
      changeYear: true
    });
    
  });
		
	</script>
	<!-- /JAVASCRIPTS 

<script>
// just for the demos, avoids form submit


jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#myform" ).validate({
	
  rules: {
    jawaban: {
      required: true,
      maxlength: 35,
      minlength: 35
    }
  }
});
</script>
-->
</body>
</html>