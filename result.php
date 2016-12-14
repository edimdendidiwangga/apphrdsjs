<?php
error_reporting(0);
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
	<?php include 'header.php'; ?>
	<!--/HEADER -->
	
	<!-- PAGE -->
	<section id="page">
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
										
										<li>Hasil Pencarian</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Hasil Pencarian</h3>
									</div>
									<div class="description">Hasil Pencarian</div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->
						<!-- DATA TABLES -->
						
						<a href="index-step.php"><button class="btn btn-primary">Tambah Data</button></a>
						<a href="#table-modal" data-toggle="modal" class="btn btn-info">Search Data</a>
						<?php
											$jenkel = $_POST['jenkel'];
											$kota = $_POST['kota'];
											$dilamar1 = $_POST['dilamar1'];
											$sub_posisi = $_POST['sub_posisi'];
											$dilamar_a = $dilamar1.". ".$sub_posisi;
											$pendidikan = $_POST['pendidikan'];
											$usia = $_POST['usia'];
											$usia1 = substr($usia, 0, 2);
											$usia2 = substr($usia, 3);

											$from = $_POST['from'];
											$to = $_POST['to'];

												$query=mysql_query("SELECT *
										        FROM kandidat
										        where kandidat.status='0' AND
										        (kandidat.date BETWEEN '$from' AND '$to') 
										        AND kandidat.jenkel like '%$jenkel%'
										        AND (kandidat.usia BETWEEN '$usia1' AND '$usia2') 
										        AND kandidat.dilamar LIKE '%$dilamar_a%'
										        AND kandidat.pendidikan LIKE '%$pendidikan%' 
										        AND kandidat.kota LIKE '%$kota%'						       
										        ");
												?>

						<!-- EXPORT TABLES -->
						<div class="row">
							<div class="col-md-12">
								<!-- BOX -->
								<div class="box border purple">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>Data Kandidat</h4>
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
									
										<table id="datatable2" class="table table-striped display table-bordered">
											<thead>
												<tr>
												<th>NO.</th>
													<th>NO. Aplikasi</th>
													<th>TANGGAL</th>
													<th>NAMA</th>
													<th>TEMPAT LAHIR</th>
													<th class="hidden-xs">TANGGAL LAHIR</th>
													<th>USIA</th>
													<th>ALAMAT</th>
													<th>Provinsi</th>
													<th>Kota</th>
													<th>Kecamatan</th>
													<th class="hidden-xs">NO TELEPON</th>
													<th>NO HP</th>
													<th>P/W</th>
													<th>HIJAB</th>
													<th>AGAMA</th>
													<th>STATUS PERKAWINAN</th>
													<th>TINGGI</th>
													<th>BERAT</th>
													<th>NAMA PERUSAHAAN</th>
													<th>JABATAN LAMA</th>
													<th>PERIODE</th>
													<th>PENDIDIKAN</th>
													<th>JURUSAN</th>
													<th>POSISI DILAMAR </th>
													<th>Status Pengiriman</th>
													<th>TANGGAL PENGIRIMAN</th>
													<th>TANGGAL EFEKTIF</th>
													<th>INTERVIEWER</th>
													<th>SUMBER</th>
													<th>KET</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
											<?php
											$no=1;
											while ($data = mysql_fetch_array($query)) {
											?>
												<tr class="gradeX">
													<td><?php echo $no;?></td>
													<td><?php echo $data['no_aplikasi']; ?></td>
													<td><?php echo $data['date']; ?></td>
													<td class="hidden-xs"><?php echo $data['nama']; ?></td>
													<td class="center"><?php echo $data['tempat_lahir']; ?></td>
													<td class="center hidden-xs"><?php echo $data['tgl_lahir']; ?></td>
													<td><?php echo $data['usia']; ?></td>
													<td><?php echo $data['alamat']; ?></td>
													<td><?php echo $data['provinsi']; ?></td>
													<td><?php echo $data['kota']; ?></td>
													<td><?php echo $data['kec']; ?></td>
													<td><?php echo $data['no_telp']; ?></td>
													<td><?php echo $data['no_hp']; ?></td>
													<td><?php echo $data['jenkel']; ?></td>
													<td><?php echo $data['hijab']; ?></td>
													<td><?php echo $data['agama']; ?></td>
													<td><?php echo $data['status_kawin']; ?></td>
													<td><?php echo $data['t_bdn']; ?></td>
													<td><?php echo $data['b_bdn']; ?></td>
													<td><?php echo $data['perusahaan']; ?></td>
													<td><?php echo $data['posisi']; ?></td>
													<td><?php echo $data['periode']; ?></td>
													<td><?php echo $data['pendidikan']; ?></td>
													<td><?php echo $data['jurusan']; ?></td>
													<td><?php $dilamar  = $data['dilamar'];
														  $aray 	= explode(',', $dilamar);
														  
														  $array1	= explode('.', $aray[0]);
														  $array2	= explode('.', $aray[1]);
														  $array3	= explode('.', $aray[2]);
														  echo $array1[0].' '.$array1[1].', '.$array2[0].' '.$array2[1].', '.$array3[0].' '.$array3[1]; ?></td>
													<td><?php echo $data['status_pengiriman']; ?></td>
													<td><?php echo $data['tgl_pengiriman']; ?></td>
													<td><?php echo $data['tgl_efektif']; ?></td>
													<td><?php echo $data['interviewer']; ?></td>
													<td><?php echo $data['sumber']; ?></td>
													<td><?php echo $data['ket']; ?></td>
												<td>
												<div class="btn-group dropdown">
											<button class="btn btn-info dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-gear"></i>
											<span class="caret"></span>
											</button>
											<ul class="dropdown-menu">
											<li>
											<a href="nilai.php?id_kandidat=<?php echo $data['id_kandidat']; ?>">Cek Nilai Tes</a>
											</li>
											<li>
											<a href="edit-step.php?id_kandidat=<?php echo $data['id_kandidat']; ?>">Edit Data</a>
											</li>
											<li>
											<a href="pengiriman.php?id_kandidat=<?php echo $data['id_kandidat']; ?>">Pengiriman Customer</a>
											</li>
											<li>
											<a href="cetak_interview.php?id_kandidat=<?php echo $data['id_kandidat']; ?>">Cetak Hasil Interview</a>
											</li>
											<li class="divider"></li>
											<li>
											<a href="cetak_riwayat.php?id_kandidat=<?php echo $data['id_kandidat']; ?>">Cetak Riwayat Hidup</a>
											</li>
											<li>
											<a href="delete_kandidat.php?id_kandidat=<?php echo $data['id_kandidat']; ?>">Hapus</a>
											</li>
											</ul>
										  </div>
											
										  
												</td>
												</tr>
												<?php 
													$no++;
												} 
												?>
												
												
											</tbody>
											<tfoot>
												<tr>
													<th>NO.</th>
													<th>No. Aplikasi</th>
													<th>TANGGAL</th>
													<th>NAMA</th>
													<th>TEMPAT LAHIR</th>
													<th class="hidden-xs">TANGGAL LAHIR</th>
													<th>USIA</th>
													<th>ALAMAT</th>
													<th>Provinsi</th>
													<th>Kota</th>
													<th>Kecamatan</th>
													<th class="hidden-xs">NO TELEPON</th>
													<th>NO HP</th>
													<th>P/W</th>
													<th>HIJAB</th>
													<th>AGAMA</th>
													<th>STATUS PERKAWINAN</th>
													<th>TINGGI</th>
													<th>BERAT</th>
													<th>NAMA PERUSAHAAN</th>
													<th>JABATAN LAMA</th>
													<th>PERIODE</th>
													<th>PENDIDIKAN</th>
													<th>JURUSAN</th>
													<th>POSISI DILAMAR</th>
													<th>Status Pengiriman</th>
													<th>TANGGAL PENGIRIMAN</th>
													<th>TANGGAL EFEKTIF</th>
													<th>INTERVIEWER</th>
													<th>SUMBER</th>
													<th>KET</th>
													<th>Aksi</th>
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
												<h4><i class="fa fa-bars"></i>Search Data</h4>
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
													
												</div>
											</div>
											<div class="box-body big">
												
												<form action="result.php" method="post" class="form-horizontal" role="form">
												  
												   <div class="form-group">
													<label class="col-sm-4 control-label">Jenis Kelamin</label>
													<div class="col-sm-8">
													  <select class="form-control" name="jenkel" required>
													  <option></option>
													  <option value="Pria">Pria</option>
													  <option value="Wanita">Wanita</option>
													  </select>
													</div>
												  </div>
												  
												  <div class="form-group"> 
													<label class="col-sm-4 control-label">Posisi yang dilamar</label>
													<div class="col-sm-8">
													   <select name="dilamar1" class="form-control" required>
													   <option value="" disabled="" selected="" style="display:none" ;="">Pilih Posisi</option>
													   <?php
													   $query = mysql_query("
										        SELECT * 
										        FROM posisi order by nama_posisi asc");
											
											
											while ($cs = mysql_fetch_array($query)) {
											?>
													   <option value="<?php echo $cs['nama_posisi']; ?>"><?php echo $cs['nama_posisi']; ?>
													   
											<?php } ?>		   
													</select>	
													 <select name="sub_posisi" class="form-control">
													   <option value="" disabled="" selected="" style="display:none" ;="">Pilih Sub Posisi</option>
													   <?php
													   $query = mysql_query("
										        SELECT * 
										        FROM sub_posisi order by nama_sub_posisi asc");
											
											
											while ($cs = mysql_fetch_array($query)) {
											?>
													   <option value="<?php echo $cs['nama_sub_posisi']; ?>"><?php echo $cs['nama_sub_posisi']; ?>
													   
											<?php } ?>		   
													</select>	
													</div>
													</div>
													
												  <div class="form-group">
													<label class="col-sm-4 control-label">Pendidikan</label>
													<div class="col-sm-8">
													   <select class="form-control" name="pendidikan" required>
															   <option value="" disabled="" selected="" style="display:none" ;=""></option>
															   <option value="S3">S3</option>
															   <option value="S2">S2</option>
															   <option value="S1">S1</option>
															   <option value="D3">D3</option>
															   <option value="D1">D1</option>
															   <option value="SMK">SMK</option>
															   <option value="SMA">SMA</option>
															   <option value="SMP">SMP</option>
															  
														   </select>
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-4 control-label">Kabupaten/Kota</label>
													<div class="col-sm-8">
													   <input type="text" name="kota" class="form-control">
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-4 control-label">Usia</label>
													<div class="col-sm-8">
													   <select class="form-control" name="usia" required>
															<option value="" disabled="" selected="" style="display:none" ;=""></option>
															<option value="19-25">19-25</option>
															<option value="26-28">26-28</option>
															<option value="29-32">29-32</option>
															<option value="32-99">>= 32</option>
														</select>
													</div>
				
												  </div>
												   <div class="form-group">
													<label class="col-sm-4 control-label">Data Bulan</label>
													<div class="col-sm-8">
													  <input type="text" id="from" name="from" class="form-control" required>
														<label for="to">to</label>
														<input type="text" id="to" name="to" class="form-control" required>
													</div>
												  </div>
											</div> 
								</div>
								<div class="modal-footer">
								<input type="submit" value="Search" class="btn btn-info">
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
	<!-- /JAVASCRIPTS datatable2-->
	<script>
	 $( function() {
    var dateFormat = "yy-mm-dd",
      from = $( "#from" )
        .datepicker({
          dateFormat: "yy-mm-dd",
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
      	dateFormat: "yy-mm-dd",
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    
  } );
</script>   
		
</body>
</html>

