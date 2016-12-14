<?php 
include('config.php');
include('cek-login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Cloud Admin | Dynamic Tables</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="css/cloud-admin.css" >
	<link rel="stylesheet" type="text/css"  href="css/themes/default.css" id="skin-switcher" >
	<link rel="stylesheet" type="text/css"  href="css/responsive.css" >
	
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- JQUERY UI-->
	<link rel="stylesheet" type="text/css" href="js/jquery-ui-1.10.3.custom/css/custom-theme/jquery-ui-1.10.3.custom.min.css" />
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<!-- DATA TABLES -->
	<link rel="stylesheet" type="text/css" href="js/datatables/media/css/jquery.dataTables.min.css" />
	<link rel="stylesheet" type="text/css" href="js/datatables/media/assets/css/datatables.min.css" />
	<link rel="stylesheet" type="text/css" href="js/datatables/extras/TableTools/media/css/TableTools.min.css" />
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<?PHP include 'header.php'; ?>
	<!--/HEADER -->
	
	<!-- PAGE -->
	<section id="page">
				<?php include 'menu.php'; ?>
				<!-- /SIDEBAR -->



		<div id="main-content">
			<!-- SAMPLE BOX CONFIGURATION MODAL FORM-->
			
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
											<a href="#">Kunci Jawaban</a>
										</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Daftar Kunci Jawaban </h3>
									</div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->
						<!-- DATA TABLES -->
						<a href="#table-modal" data-toggle="modal" class="btn btn-info">Tambah Kunci Jawaban</a>
						<!-- EXPORT TABLES -->
						<div class="row">
							<div class="col-md-12">
								<!-- BOX -->
								<div class="box border purple">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>Data Hasil Tes </h4>
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
									<div class="box-body">
									
										<table id="datatable2" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover">
											<thead>
												<tr>
													
													<th>No</th>
													
													<th>Nama Tes</th>
													<th class="hidden-xs">Kunci Jawaban</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											<?php 
											
											$query = mysql_query("
										        SELECT *
										        FROM kunci
										        Order by kunci.id_kunci Desc");
											
									              
											$no = 1;
											while ($data = mysql_fetch_array($query)) {
											
									               
									            ?>
												<tr class="gradeX">
													<td><?php echo $no; ?></td>
													<td class="hidden-xs"><?php echo $data['nama_tes']; ?></td>
													<td ><?php echo $data['kunci_jawaban']; ?></td>
													
													<td>

													<a href="delete_kunci.php?id_kunci=<?php echo $data['id_kunci'];?>" class="btn btn-danger" onclick="hapus()"><i class="fa fa-trash"></i> Hapus</a>

													</td>
													
												</tr>
												<?php 
													$no++;
												} 
												?>
												
											</tbody>
											<tfoot>
												<tr>
													<th>No</th>
													<th>Nama Tes</th>
													<th class="hidden-xs">Kunci Jawaban</th>
													<th>Action</th>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
								<!-- /BOX -->
							</div>
						</div>
						<!-- /EXPORT TABLES -->
						
 
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


	<div class="modal fade" id="table-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content modal-table">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title"></h4>
								</div>
								<div class="modal-body">
								 <div class="box border primary">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>Tambah Kunci Jawaban</h4>
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
												<form action="kunci-jawaban.php" method="post" class="form-horizontal" role="form">
												  <div class="form-group">
													<label class="col-sm-4 control-label">Nama Tes</label>
													<div class="col-sm-8">
													 <input name="nama_tes" type="text" class="form-control" placeholder="Text input">
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-4 control-label">Kunci Jawaban</label>
													<div class="col-sm-8">
													  <input name="kunci_jawaban" type="text" class="form-control" placeholder="Text input">
													</div>
												  </div>
												   
												   
											</div> 
								</div>
								<div class="modal-footer">
								<input type="submit" value="Simpan" class="btn btn-info">
								  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
								</form>
							  </div>
							</div>
						  </div>



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
	<!-- DATA TABLES -->
	<script type="text/javascript" src="js/datatables/media/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/datatables/media/assets/js/datatables.min.js"></script>
	<script type="text/javascript" src="js/datatables/extras/TableTools/media/js/TableTools.min.js"></script>
	<script type="text/javascript" src="js/datatables/extras/TableTools/media/js/ZeroClipboard.min.js"></script>
	<!-- COOKIE -->
	<script type="text/javascript" src="js/jQuery-Cookie/jquery.cookie.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<script src="js/script.js"></script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("dynamic_table");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	<script type="text/javascript">
		function hapus(){
			confirm("Anda Yakin ingin menghapus data ini ?");
			
		}
	</script>
	
	<!-- /JAVASCRIPTS datatable2
	<script type="text/javascript" language="javascript" >
			$(document).ready(function() {
    $('#big_table tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control" placeholder="'+title+'" />' );
    } );		
    var table = $('#big_table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5'
        ],
        "bInfo": false,
    } );
    
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
        console.log('keypu')
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );       
    
} );
		</script>-->
</body>
</html>