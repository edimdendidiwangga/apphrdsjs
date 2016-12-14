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
	<link rel="stylesheet" type="text/css" href="js/hubspot-messenger/css/messenger.min.css" />
	<link rel="stylesheet" type="text/css" href="css/cloud-admin.css" >
	<link rel="stylesheet" type="text/css"  href="css/themes/default.css" id="skin-switcher" >
	<link rel="stylesheet" type="text/css"  href="css/responsive.css" >
	
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- JQUERY UI-->
	<link rel="stylesheet" type="text/css" href="js/jquery-ui-1.10.3.custom/css/custom-theme/jquery-ui-1.10.3.custom.min.css" />
	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="css/animatecss/animate.min.css" />
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	
	<!-- DATA TABLES -->
	<link rel="stylesheet" type="text/css" href="js/datatables/media/css/jquery.dataTables.min.css" />
	<link rel="stylesheet" type="text/css" href="js/datatables/media/assets/css/datatables.min.css" />
	<link rel="stylesheet" type="text/css" href="js/datatables/extras/TableTools/media/css/TableTools.min.css" />

	<!-- <link rel="stylesheet" href="js/dataTables.bootstrap.css"> -->
	<!-- FONTS -->
	<link rel="stylesheet" type="text/css" href="js/hubspot-messenger/css/messenger.min.css" />
	<link rel="stylesheet" type="text/css" href="js/hubspot-messenger/css/messenger-theme-flat.min.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>


	  <link rel="stylesheet" href="bootstrap-dist/css/bootstrap-select.min.css" />
      <script src="bootstrap-dist/js/bootstrap-select.min.js"></script>
   <style type="text/css">
   li.hov a:hover {background-color: #fbcc42 !important;}
   </style>

</head>
<body>
	<?php include 'header.php';?>
	<?php
//koneksi ke database, username,password  dan namadatabase menyesuaikan 
mysql_connect('localhost', 'root', '');
mysql_select_db('db_hrd');

//memanggil file excel_reader
require "excel_reader.php";

//jika tombol import ditekan
if(isset($_POST['submit'])){

    $target = basename($_FILES['filepegawaiall']['name']) ;
    move_uploaded_file($_FILES['filepegawaiall']['tmp_name'], $target);
    
    $data = new Spreadsheet_Excel_Reader($_FILES['filepegawaiall']['name'],false);
    
//    menghitung jumlah baris file xls
    $baris = $data->rowcount($sheet_index=0);
    
//    jika kosongkan data dicentang jalankan kode berikut
    $drop = isset( $_POST["drop"] ) ? $_POST["drop"] : 0 ;
    if($drop == 1){
//             kosongkan tabel pegawai
             $truncate ="TRUNCATE TABLE pegawai";
             mysql_query($truncate);
    };
    
//    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
    for ($i=2; $i<=$baris; $i++)
    {
//       membaca data (kolom ke-1 sd terakhir)
      $no_aplikasi    = $data->val($i, 1);
      $date           = $data->val($i, 2);
      $nama           = $data->val($i, 3);
      $tempat_lahir   = $data->val($i, 4);
      $tgl_lahir      = $data->val($i, 5);
      $usia           = $data->val($i, 6);
      $alamat         = $data->val($i, 7);
      $kota           = $data->val($i, 8);
      $no_telp        = $data->val($i, 9);
      $no_hp          = $data->val($i, 10);
      $jenkel         = $data->val($i, 11);
      $hijab          = $data->val($i, 12);
      $agama          = $data->val($i, 13);
      $status_kawin   = $data->val($i, 14);
      $t_bdn          = $data->val($i, 15);
      $b_bdn          = $data->val($i, 16);
      $kebangsaan     = $data->val($i, 17);
      $perusahaan     = $data->val($i, 18);
      $jns_perusahaan = $data->val($i, 19);
      $position       = $data->val($i, 20);
      $periode        = $data->val($i, 21);
      $pendidikan     = $data->val($i, 22);
      $jurusan        = $data->val($i, 23);
      $nama_sekolah   = $data->val($i, 24);
      $thn_lulus      = $data->val($i, 25);
      $dilamar        = $data->val($i, 26);
      $status_pengiriman = $data->val($i, 27);
      $tgl_pengiriman = $data->val($i, 28);
      $status         = $data->val($i, 29);
      $tgl_efektif    = $data->val($i, 30);
      $interviewer    = $data->val($i, 31);
      $sumber         = $data->val($i, 32);
      $ket            = $data->val($i, 33);
//      setelah data dibaca, masukkan ke tabel pegawai sql
      $query = "INSERT into kandidat(id_kandidat, nama, tempat_lahir, tgl_lahir, usia, alamat, kota, no_telp, no_hp, jenkel, hijab, agama, status_kawin, t_bdn, b_bdn, kebangsaan, perusahaan, jns_perusahaan, posisi, periode, pendidikan, jurusan, nama_sekolah, thn_lulus, dilamar, no_aplikasi, interviewer, sumber, ket, date, status_pengiriman, tgl_pengiriman, status, tgl_efektif) 
  values('', '$nama', '$tempat_lahir', '$tgl_lahir', '$usia', '$alamat', '$kota', '$no_telp', '$no_hp', '$jenkel', '$hijab', '$agama', '$status_kawin', '$t_bdn', '$b_bdn', '$kebangsaan', '$perusahaan', '$jns_perusahaan', '$position', '$periode', '$pendidikan', '$jurusan', '$nama_sekolah', '$thn_lulus', '$dilamar', '$no_aplikasi', '$interviewer', '$sumber', '$ket', '$date', '$status_pengiriman', '$tgl_pengiriman', '$status', '$tgl_efektif')";
      $hasil = mysql_query($query);
      //simpan data ke database
$sql = "select max(id_kandidat) as last_id from kandidat limit 1";
 $hasil = mysql_query($sql);
 $row = mysql_fetch_array($hasil);
 $lastd = $row['last_id'];

$query = mysql_query("insert into penilaian (id_nilai, id_kandidat) 
	values('', '$lastd')") or die(mysql_error());

$sql = "select max(id_kandidat) as last_id from kandidat limit 1";
 $hasil = mysql_query($sql);
 $row = mysql_fetch_array($hasil);
 $lastId2 = $row['last_id'];
 
$query = mysql_query("insert into kelengkapan (id_lengkap, id_kandidat) 
	values('', '$lastId2')") or die(mysql_error());
    }
    


    if(!$hasil){
//          jika import gagal
          die(mysql_error());
      }else{
//          jika impor berhasil
          echo "<script>
		alert('DATA BERHASIL di IMPORT!');
		window.location='index.php';
		</script>";
    }
    
//    hapus file xls yang udah dibaca
    unlink($_FILES['filepegawaiall']['name']);
}

?>
	<!-- PAGE -->
	<section id="page">
				<?php include 'menu.php';?>
		<div id="main-content">
			<!-- SAMPLE BOX CONFIGURATION MODAL FORM-->
			  <!-- Modal for Edit button -->
    
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title">Import Database</h4>
					</div>
					<div class="modal-body">
					  <div class="form-group">
               <form class="form-control" name="myForm" id="myForm" onSubmit="return validateForm()" action="index.php" method="post" enctype="multipart/form-data">
    			<input type="file" id="filepegawaiall" name="filepegawaiall" />
  	
			<!--  <input type="checkbox" name="drop" value="1" />  -->
			<br>
			<p>File Harus Berekstensi .xls</p> 
              </div>
          
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					 <input class="btn btn-warning" type="submit" name="submit" value="Import" />
					 </form>

					</div>
				  </div>
				</div>
			  </div> 
			<!-- /SAMPLE BOX CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="export-database" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title"></h4>
					</div>
					<div class="modal-body">
					<div class="box border primary">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>Export Database</h4>
												<div class="tools hidden-xs">
													<a href="javascript:;" class="reload">
														<i class="fa fa-refresh"></i>
													</a>
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
												</div>
											</div>
											<div class="box-body big">
											<form action="laporan-database.php" method="POST" class="form-horizontal" role="form">
												<div class="row">
												<label class="col-xs-3">Data Bulan</label>
												  <div class="col-xs-6">
													<input type="text" id="dari" name="from" class="form-control" required>
														<label for="to">to</label>
														<input type="text" id="ke" name="to" class="form-control" required>
												  </div>
												</div>
											</div>
										</div>
					 </div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					 <input class="btn btn-primary" type="submit" name="submit" value="Export" />
					</form>
					</div>
				  </div>
				</div>
			  </div> 
			<!-- /SAMPLE BOX CONFIGURATION MODAL FORM-->
			<!-- /SAMPLE BOX CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="export-pengiriman" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title"></h4>
					</div>
					<div class="modal-body">
					<div class="box border green">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>Export Database Interview Pengiriman</h4>
												<div class="tools hidden-xs">
													<a href="javascript:;" class="reload">
														<i class="fa fa-refresh"></i>
													</a>
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
												</div>
											</div>
											<div class="box-body big">
											<form action="laporan-menunggu.php" method="POST" class="form-horizontal" role="form">
												<div class="row">
												<label class="col-xs-3">Data Bulan</label>
												  <div class="col-xs-6">
													<input type="text" id="dari1" name="from" class="form-control" required>
														<label for="to">to</label>
														<input type="text" id="ke1" name="to" class="form-control" required>
												  </div>
												</div>
											</div>
										</div>
					 </div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					 <input class="btn btn-success" type="submit" name="submit" value="Export" />
					</form>
					</div>
				  </div>
				</div>
			  </div> 
			<!-- /SAMPLE BOX CONFIGURATION MODAL FORM-->
			
			<div class="modal fade" id="export-diterima" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title"></h4>
					</div>
					<div class="modal-body">
					<div class="box border pink">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>Export Database Interview Diterima</h4>
												<div class="tools hidden-xs">
													<a href="javascript:;" class="reload">
														<i class="fa fa-refresh"></i>
													</a>
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
												</div>
											</div>
											<div class="box-body big">
											<form action="laporan-diterima.php" method="POST" class="form-horizontal" role="form">
												<div class="row">
												<label class="col-xs-3">Data Bulan</label>
												  <div class="col-xs-6">
													<input type="text" id="dari2" name="from" class="form-control" required>
														<label for="to">to</label>
														<input type="text" id="ke2" name="to" class="form-control" required>
												  </div>
												</div>
											</div>
										</div>
					 </div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					 <input class="btn btn-pink" type="submit" name="submit" value="Export" />
					</form>
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
										
										
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Tabel Kandidat</h3>
									</div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->
						<!-- DATA TABLES -->
						
						<!-- EXPORT TABLES -->
						<div class="row">
							<div class="col-md-12">
							<!-- Tabs -->
								<div class="box border purple">
									<div class="box-title">
										<h4><i class="fa "></i><span class="hidden-inline-mobile"></span></h4>
									</div>
									<div class="box-body">
										<div class="tabbable header-tabs">
										  <ul class="nav nav-tabs">
										   <li><a href="#box_tab5" data-toggle="tab"><i class="fa fa-warning"></i> <span class="hidden-inline-mobile">Data Blacklist</span></a></li>
											 <li><a href="#box_tab4" data-toggle="tab"><i class="fa fa-warning"></i> <span class="hidden-inline-mobile">Data Pemblokiran</span></a></li>
											 <li><a href="#box_tab3" data-toggle="tab"><i class="fa fa-thumbs-o-up"></i> <span class="hidden-inline-mobile">Data Interview Diterima</span></a></li>
											 <li><a href="#box_tab2" data-toggle="tab"><i class="fa fa-users"></i> <span class="hidden-inline-mobile">Data Interview Pengiriman</span></a></li>
											 <li class="active"><a href="#box_tab1" data-toggle="tab"><i class="fa fa-laptop"></i> <span class="hidden-inline-mobile">Data Interview Database</span></a></li>
										  </ul>
								<div class="tab-content">
								<div class="tab-pane fade in active" id="box_tab1">
												<!-- BOX -->
								<div class="box border blue">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>Data Interview Database</h4>
										<div class="tools hidden-xs">
											<a href="#box-config" data-toggle="modal" class="config">
												<i class="fa fa-cog"></i>
											</a>
											<a href="javascript:;" class="reload">
												<i class="fa fa-refresh"></i>
											</a>
											
										</div>
									</div>
									<div class="box-body">
									<a href="index-step.php" class="btn btn-info"><i class="fa fa-plus-circle"></i> Tambah Data</a>
									<a href="#table-modal" data-toggle="modal" class="btn btn-success"><i class="fa fa-search"></i> Search Data</a>
									<a href="#myModal" data-toggle="modal" class="btn btn-warning"><i class="fa fa-upload"></i> Import</a>
									<a href="#export-database" data-toggle="modal" class="btn btn-primary"><i class="fa fa-rocket"></i> Export</a>
									
									<table id="datatable2" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th>Aksi</th>
													<th>No.</th>
													<th>No. Aplikasi</th>
													<th>NAMA</th>
													<th class="hidden-xs">No. HP</th>
													<th>Jns Kel</th>
													<th class="hidden-xs">Hijab</th>
													<th>Tinggi</th>
													<th>Usia</th>
													<th>Kota</th>
													<th>Posisi Dilamar</th>
													<th>Pendidikan</th>
													<th>Jabatan Lama</th>
													<th>Status Pengiriman</th>
													
												</tr>
											</thead>
											<tbody>
											<?php 
											$query_tampil=mysql_query("SELECT *
										    FROM kandidat where kandidat.status = '0'
										    Order by kandidat.no_aplikasi DESC");
											if ($query_tampil === FALSE) {
											    die(mysql_error());
											}
											$no=1;
											while ($data = mysql_fetch_array($query_tampil)) {
											?>
												<tr class="gradeX">
													<td>
												<div class="btn-group dropdown">
											<button class="btn btn-info dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-gear"></i>
											<span class="caret"></span>
											</button>
											<ul class="dropdown-menu">
											<li class="hov">
											
											<?php echo'
											<a href="cek-riwayat.php?id_kandidat='.$data['id_kandidat'].'" target="_blank">Cek Riwayat Pengiriman</a>
											</li>
											<li class="hov">
											<a href="nilai.php?id_kandidat='.$data['id_kandidat'].'">Cek Nilai Tes</a>
											</li>
											<li class="hov">
											<a href="edit-step.php?id_kandidat='.$data['id_kandidat'].'">Edit Data</a>
											</li>
											<li class="hov">
											<a href="pengiriman.php?id_kandidat='.$data['id_kandidat'].'">Pengiriman Customer</a>
											</li>
											<li class="hov">
											<a href="cetak_interview.php?id_kandidat='.$data['id_kandidat'].'">Cetak Hasil Interview</a>
											</li>
											
											<li class="hov">
											<a href="cetak_riwayat.php?id_kandidat='.$data['id_kandidat'].'">Cetak Riwayat Hidup</a>
											</li>
											<li class="hov">
											<a href="blokir_kandidat.php?id_kandidat='.$data['id_kandidat'].'" onclick="return confirm("Yakin Anda ingin MEMBLOKIR data ini ?")">Blokir Kandidat</a>
											</li>
											<li class="hov">
											<a href="delete_kandidat.php?id_kandidat='.$data['id_kandidat'].'" onclick="return confirm("Yakin Anda ingin Menghapus data ini ?")">Hapus</a>
											</li>
											';?>
											</ul>
										  </div>
										  
												</td>
													<td><?php echo $no; ?></td>
													<td><?php echo $data['no_aplikasi']; ?></td>
													<td><?php echo $data['nama']; ?></td>
													<td class="hidden-xs"><?php echo $data['no_hp']; ?></td>
													<td class="center"><?php echo $data['jenkel']; ?></td>
													<td class="center hidden-xs"><?php echo $data['hijab']; ?></td>
													<td><?php echo $data['t_bdn']; ?></td>
													<td><?php echo $data['usia']; ?></td>
													<td><?php echo $data['kota']; ?></td>
													<td><?php 
														 $dilamar  = $data['dilamar'];
														  $aray 	= explode(',', $dilamar);
														  
														  $array1	= explode('.', $aray[0]);
														  $array2	= explode('.', $aray[1]);
														  $array3	= explode('.', $aray[2]);
														  echo $array1[0].' '.$array1[1].', '.$array2[0].' '.$array2[1].', '.$array3[0].' '.$array3[1];
													 ?></td>
													<td><?php echo $data['pendidikan']; ?></td>
													<td><?php echo $data['posisi']; ?></td>
													<td><?php echo $data['status_pengiriman']; ?></td>
													
												</tr>
												<?php 
												$no++;
												} 
												?>
												
											</tbody>
										
											<tfoot>
												<tr>
													<th>Aksi</th>
													<th>No.</th>
													<th>No. Aplikasi</th>
													<th>NAMA</th>
													<th class="hidden-xs">No. HP</th>
													<th>Jns Kel</th>
													<th class="hidden-xs">Hijab</th>
													<th>Tinggi</th>
													<th>Usia</th>
													<th>Kota</th>
													<th>Posisi Dilamar</th>
													<th>Pendidikan</th>
													<th>Jabatan Lama</th>
													<th>Status Pengiriman</th>
													
												</tr>
											</tfoot>
										</table>
									</div>
				
								</div>
								</div>
								<!-- /BOX -->
											 <div class="tab-pane fade" id="box_tab2">
									<div class="box border green">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>Data Interview Pengiriman</h4>
										<div class="tools hidden-xs">
											<a href="#box-config" data-toggle="modal" class="config">
												<i class="fa fa-cog"></i>
											</a>
											<a href="javascript:;" class="reload">
												<i class="fa fa-refresh"></i>
											</a>
											
										</div>
									</div>
									<div class="box-body">
									<a class="btn btn-success" href="#export-pengiriman" data-toggle="modal"><i class="fa fa-file-text"></i> Export Excel</a>
										<table id="datatable1" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th>Aksi</th>
													<th>No.</th>
													<th>No. Aplikasi</th>
													<th>NAMA</th>
													<th class="hidden-xs">No. HP</th>
													<th>Jns Kel</th>
													<th class="hidden-xs">Hijab</th>
													<th>Tinggi</th>
													<th>Usia</th>
													<th>Kota</th>
													<th>Posisi Dilamar</th>
													<th>Pendidikan</th>
													<th>Jabatan Lama</th>
													<th>Status Customer</th>
													<th>Status</th>
													
												</tr>
											</thead>
											<tbody>
											<?php 
											$query = mysql_query("SELECT * FROM kandidat where kandidat.status = 'menunggu'
										        Order by kandidat.no_aplikasi DESC");
											if ($query === FALSE) {
											    die(mysql_error());
											}
											$no=1;
											while ($data = mysql_fetch_array($query)) {
											?>
												<tr class="gradeX" >
												<td>
												<div class="btn-group dropdown">
											<button class="btn btn-info dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-gear"></i>
											<span class="caret"></span>
											</button>
				
											<ul class="dropdown-menu">
											<li class="hov">
											<a href="cek-riwayat.php?id_kandidat=<?php echo $data['id_kandidat']; ?>" target="_blank">Cek Riwayat Pengiriman</a>
											</li>
											<li class="hov">
											<a href="nilai.php?id_kandidat=<?php echo $data['id_kandidat']; ?>">Cek Nilai Tes</a>
											</li>
											<li class="hov">
											<a href="edit-step.php?id_kandidat=<?php echo $data['id_kandidat']; ?>">Edit Data</a>
											</li>
											<li class="hov"> 
											<a href="update_batal.php?id_kandidat=<?php echo $data['id_kandidat']; ?>" onclick="return confirm("Yakin Anda ingin Membatalkan Pengiriman Kandidat ini ?")">Pembatalan Pengiriman</a>
											</li>
											<li class="hov">
											<a href="cetak_interview.php?id_kandidat=<?php echo $data['id_kandidat']; ?>">Cetak Hasil Interview</a>
											</li>
											
											<li class="hov">
											<a href="cetak_riwayat.php?id_kandidat=<?php echo $data['id_kandidat']; ?>">Cetak Riwayat Hidup</a>
											</li>
											<li class="hov">
											<a href="penerimaan.php?id_kandidat=<?php echo $data['id_kandidat']; ?>">Status Diterima</a>
											</li>
											</ul>
										  </div>
											
										  
												</td>
													<td><?php echo $no; ?></td>
													<td><?php echo $data['no_aplikasi']; ?></td>
													<td><?php echo $data['nama']; ?></td>
													<td class="hidden-xs"><?php echo $data['no_hp']; ?></td>
												
													<td class="center"><?php echo $data['jenkel']; ?></td>
													<td class="center hidden-xs"><?php echo $data['hijab']; ?></td>
													<td><?php echo $data['t_bdn']; ?></td>
													<td><?php echo $data['usia']; ?></td>
													<td><?php echo $data['kota']; ?></td>
													<td><?php 
														$dilamar  = $data['dilamar'];
														  $aray 	= explode(',', $dilamar);
														  
														  $array1	= explode('.', $aray[0]);
														  $array2	= explode('.', $aray[1]);
														  $array3	= explode('.', $aray[2]);
														  echo $array1[0].' '.$array1[1].', '.$array2[0].' '.$array2[1].', '.$array3[0].' '.$array3[1];
													 ?></td>
													<td><?php echo $data['pendidikan']; ?></td>
													<td><?php echo $data['posisi']; ?></td>
													<td><?php echo $data['status_pengiriman']; ?></td>
													<td><?php echo $data['status']; ?></td>
													
												
												</tr>
												<?php 
												$no++;
												} 
												?>
												
											</tbody>
											<tfoot>
												<tr>
													<th>Aksi</th>
													<th>No.</th>
													<th>No. Aplikasi</th>
													<th>NAMA</th>
													<th class="hidden-xs">No. HP</th>
													<th>Jns Kel</th>
													<th class="hidden-xs">Hijab</th>
													<th>Tinggi</th>
													<th>Usia</th>
													<th>Kota</th>
													<th>Posisi Dilamar</th>
													<th>Pendidikan</th>
													<th>Jabatan Lama</th>
													<th>Status Customer</th>
 													<th>Status</th>
													
												</tr>
											</tfoot>
										</table>
									</div>
				

								</div>
								<!-- /BOX -->
											 </div>
											 <div class="tab-pane fade" id="box_tab3">
													<!-- BOX -->
								<div class="box border pink">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>Data Interview Diterima</h4>
										<div class="tools hidden-xs">
											<a href="#box-config" data-toggle="modal" class="config">
												<i class="fa fa-cog"></i>
											</a>
											<a href="javascript:;" class="reload">
												<i class="fa fa-refresh"></i>
											</a>
											
										</div>
									</div>
									<div class="box-body">
									
									<a class="btn btn-pink" href="#export-diterima" data-toggle="modal"><i class="fa fa-file-text"></i> Export Excel</a>
										<table id="example1" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th>Aksi</th>
													<th>No.</th>
													<th>No. Aplikasi</th>
													<th>NAMA</th>
													<th class="hidden-xs">No. HP</th>
													<th>Jns Kel</th>
													<th class="hidden-xs">Hijab</th>
													<th>Tinggi</th>
													<th>Usia</th>
													<th>Kota</th>
													<th>Posisi Dilamar</th>
													<th>Pendidikan</th>
													<th>Jabatan Lama</th>
													<th>Status Customer</th>
													<th>Status</th>
													
												</tr>
											</thead>
											<tbody>
											<?php 
											$query_term = mysql_query("SELECT * FROM kandidat where kandidat.status = 'Diterima'
										        Order by kandidat.no_aplikasi Desc");
											if ($query_term === FALSE) {
											    die(mysql_error());
											}
											
											$no=1;
											while ($data = mysql_fetch_array($query_term)) {
											?>
												<tr class="gradeX">
												<td>
												<div class="btn-group dropdown">
											<button class="btn btn-info dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-gear"></i>
											<span class="caret"></span>
											</button>
				
											<ul class="dropdown-menu">
											<li class="hov">
											<a href="cek-riwayat.php?id_kandidat=<?php echo $data['id_kandidat']; ?>" target="_blank">Cek Riwayat Pengiriman</a>
											</li>
											<li class="hov">
											<a href="nilai.php?id_kandidat=<?php echo $data['id_kandidat']; ?>">Cek Nilai Tes</a>
											</li>
											<li class="hov">
											<a href="edit-step.php?id_kandidat=<?php echo $data['id_kandidat']; ?>">Edit Data</a>
											</li>
											<li class="divider"></li>
											<li class="hov">
											<a href="cetak_interview.php?id_kandidat=<?php echo $data['id_kandidat']; ?>">Cetak Hasil Interview</a>
											</li>
											<li class="hov">
											<a href="cetak_riwayat.php?id_kandidat=<?php echo $data['id_kandidat']; ?>">Cetak Riwayat Hidup</a>
											</li>
										
											</ul>
										  </div>
											
										  
												</td>
													<td><?php echo $no; ?></td>
													<td><?php echo $data['no_aplikasi']; ?></td>
													<td><?php echo $data['nama']; ?></td>
													<td class="hidden-xs"><?php echo $data['no_hp']; ?></td>
													<td class="center"><?php echo $data['jenkel']; ?></td>
													<td class="center hidden-xs"><?php echo $data['hijab']; ?></td>
													<td><?php echo $data['t_bdn']; ?></td>
													<td><?php echo $data['usia']; ?></td>
													<td><?php echo $data['kota']; ?></td>
													<td><?php 
														$dilamar  = $data['dilamar'];
														  $aray 	= explode(',', $dilamar);
														  
														  $array1	= explode('.', $aray[0]);
														  $array2	= explode('.', $aray[1]);
														  $array3	= explode('.', $aray[2]);
														  echo $array1[0].' '.$array1[1].', '.$array2[0].' '.$array2[1].', '.$array3[0].' '.$array3[1];
													 ?></td>
													<td><?php echo $data['pendidikan']; ?></td>
													<td><?php echo $data['posisi']; ?></td>
													<td><?php echo $data['status_pengiriman']; ?></td>
													<td><?php echo $data['status']; ?></td>
													
												</tr>
												<?php 
												$no++;
												} 
												?>
												
											</tbody>
											<tfoot>
												<tr>
												<th>Aksi</th>
													<th>No.</th>
													<th>No. Aplikasi</th>
													<th>NAMA</th>
													<th class="hidden-xs">No. HP</th>
													<th>Jns Kel</th>
													<th class="hidden-xs">Hijab</th>
													<th>Tinggi</th>
													<th>Usia</th>
													<th>Kota</th>
													<th>Posisi Dilamar</th>
													<th>Pendidikan</th>
													<th>Jabatan Lama</th>
													<th>Status Customer</th>
													<th>Status</th>
													
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
								<!-- /BOX -->
								<!-- /BOX -->
											 </div>
											 <div class="tab-pane fade" id="box_tab4">
													<!-- BOX -->
								<div class="box border orange">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>Data Pemblokiran</h4>
										<div class="tools hidden-xs">
											<a href="#box-config" data-toggle="modal" class="config">
												<i class="fa fa-cog"></i>
											</a>
											<a href="javascript:;" class="reload">
												<i class="fa fa-refresh"></i>
											</a>
											
										</div>
									</div>
									<div class="box-body">
									
									<a class="btn btn-warning" href="laporan-blokir.php"><i class="fa fa-file-text"></i> Export Excel</a>
										<table id="example2" cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
											<thead>
												<tr>
													<th>Aksi</th>
													<th>No.</th>
													<th>No. Aplikasi</th>
													<th>NAMA</th>
													<th class="hidden-xs">No. HP</th>
													<th>Jns Kel</th>
													<th class="hidden-xs">Hijab</th>
													<th>Tinggi</th>
													<th>Usia</th>
													<th>Kota</th>
													<th>Posisi Dilamar</th>
													<th>Pendidikan</th>
													<th>Status Customer</th>
													<th>Status</th>
													<th>Keterangan</th>
												</tr>
											</thead>
											<tbody>
											<?php 
											$query_term = mysql_query("SELECT * FROM kandidat where kandidat.status = 'Blokir'
										        Order by kandidat.no_aplikasi Desc");
											if ($query_term === FALSE) {
											    die(mysql_error());
											}
											
											$no=1;
											while ($data = mysql_fetch_array($query_term)) {
											?>
												<tr class="gradeX" <?php if($data['status']=='Blokir'){ echo 'style="background-color: #f2dede;"' ;} ?>>
												<td>
												<div class="btn-group dropdown">
											<button class="btn btn-info dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-gear"></i>
											<span class="caret"></span>
											</button>
				
											<ul class="dropdown-menu">
											<?php echo'
											<li class="hov">
											<a href="update_blokir.php?id_kandidat='.$data['id_kandidat'].'" onclick="return confirm("Yakin Anda ingin Membatalkan Blokir pada data ini ?")">Batal Blokir</a>
											</li>
											<li class="hov">
											<a href="delete_kandidat.php?id_kandidat='.$data['id_kandidat'].'" onclick="return confirm("Yakin Anda ingin Menghapus data ini ?")">Hapus</a>
											</li>';?>										
											</ul>
										  </div>
											
										  
												</td>
													<td><?php echo $no; ?></td>
													<td><?php echo $data['no_aplikasi']; ?></td>
													<td><?php echo $data['nama']; ?></td>
													<td class="hidden-xs"><?php echo $data['no_hp']; ?></td>
													<td class="center"><?php echo $data['jenkel']; ?></td>
													<td class="center hidden-xs"><?php echo $data['hijab']; ?></td>
													<td><?php echo $data['t_bdn']; ?></td>
													<td><?php echo $data['usia']; ?></td>
													<td><?php echo $data['kota']; ?></td>
													<td><?php 
														$dilamar  = $data['dilamar'];
														  $aray 	= explode(',', $dilamar);
														  
														  $array1	= explode('.', $aray[0]);
														  $array2	= explode('.', $aray[1]);
														  $array3	= explode('.', $aray[2]);
														  echo $array1[0].' '.$array1[1].', '.$array2[0].' '.$array2[1].', '.$array3[0].' '.$array3[1];
													 ?></td>
													<td><?php echo $data['pendidikan']; ?></td>
													
													<td><?php echo $data['status_pengiriman']; ?></td>
													<td><?php echo $data['status']; ?></td>
													<td><?php echo $data['ket']; ?></td>
												</tr>
												<?php 
												$no++;
												} 
												?>
												
											</tbody>
											<tfoot>
												<tr>
												<th>Aksi</th>
													<th>No.</th>
													<th>No. Aplikasi</th>
													<th>NAMA</th>
													<th class="hidden-xs">No. HP</th>
													<th>Jns Kel</th>
													<th class="hidden-xs">Hijab</th>
													<th>Tinggi</th>
													<th>Usia</th>
													<th>Kota</th>
													<th>Posisi Dilamar</th>
													<th>Pendidikan</th>
													<th>Status Customer</th>
													<th>Status</th>
													<th>Keterangan</th>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
								<!-- /BOX -->
								</div>
								 <div class="tab-pane fade" id="box_tab5">
													<!-- BOX -->
								<div class="box border red">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>Data Blacklist</h4>
										<div class="tools hidden-xs">
											<a href="#box-config" data-toggle="modal" class="config">
												<i class="fa fa-cog"></i>
											</a>
											<a href="javascript:;" class="reload">
												<i class="fa fa-refresh"></i>
											</a>
											
										</div>
									</div>
									<div class="box-body">
									
									<a class="btn btn-danger" href="laporan-blacklist.php"><i class="fa fa-file-text"></i> Export Excel</a>
										<table id="example3" cellpadding="0" cellspacing="0" border="0" class="table table-bordered">
											<thead>
												<tr>
													<th>Aksi</th>
													<th>No.</th>
													<th>No. Aplikasi</th>
													<th>NAMA</th>
													<th class="hidden-xs">No. HP</th>
													<th>Jns Kel</th>
													<th>Tinggi</th>
													<th>Usia</th>
													<th>Kota</th>
													<th>Pendidikan</th>
													<th>Jabatan Lama</th>
													<th>Status Customer</th>
													<th>Status</th>
													<th>Keterangan</th>
												</tr>
											</thead>
											<tbody>
											<?php 
											$query_term = mysql_query("SELECT * FROM kandidat where kandidat.status = 'Blacklist'
										        Order by kandidat.no_aplikasi Desc");
											if ($query_term === FALSE) {
											    die(mysql_error());
											}
											
											$no=1;
											while ($data = mysql_fetch_array($query_term)) {
											?>
												<tr class="gradeX" <?php if($data['status']==' '){ echo 'style="background-color: #f2dede;"' ;} ?>>
												<td>
												<div class="btn-group dropdown">
											<button class="btn btn-info dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-gear"></i>
											<span class="caret"></span>
											</button>
				
											<ul class="dropdown-menu">
											<?php echo'
											
											<li class="hov">
											<a href="delete_kandidat.php?id_kandidat='.$data['id_kandidat'].'" onclick="return confirm("Yakin Anda ingin Menghapus data ini ?")"">Hapus</a>
											</li>';?>										
											</ul>
										  </div>
											
										  
												</td>
													<td><?php echo $no; ?></td>
													<td><?php echo $data['no_aplikasi']; ?></td>
													<td><?php echo $data['nama']; ?></td>
													<td class="hidden-xs"><?php echo $data['no_hp']; ?></td>
													<td class="center"><?php echo $data['jenkel']; ?></td>
													<td><?php echo $data['t_bdn']; ?></td>
													<td><?php echo $data['usia']; ?></td>
													<td><?php echo $data['kota']; ?></td>
													<td><?php echo $data['pendidikan']; ?></td>
													<td><?php echo $data['posisi']; ?></td>
													<td><?php echo $data['status_pengiriman']; ?></td>
													<td><?php echo $data['status']; ?></td>
													<td><?php echo $data['ket']; ?></td>
												</tr>
												<?php 
												$no++;
												} 
												?>
												
											</tbody>
											<tfoot>
												<tr>
												<th>Aksi</th>
													<th>No.</th>
													<th>No. Aplikasi</th>
													<th>NAMA</th>
													<th class="hidden-xs">No. HP</th>
													<th>Jns Kel</th>
													<th>Tinggi</th>
													<th>Usia</th>
													<th>Kota</th>
													<th>Pendidikan</th>
													<th>Jabatan Lama</th>
													<th>Status Customer</th>
													<th>Status</th>
													<th>Keterangan</th>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
								<!-- /BOX -->
											 </div>
										  </div>
									   </div>
									</div>
								</div>
								<!-- /Tabs -->
								
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
															<option value="26-30">26-30</option>
															<option value="30-40">30-40</option>
															<option value="40-99">>= 40</option>
															<option value="10-99">Semua Umur</option>
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
								<input type="reset" value="Reset" class="btn btn-warning">
								  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
								</form>
							  </div>
							</div>
						  </div>
						<!-- /SAMPLE BOX CONFIGURATION MODAL FORM-->
						
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
	<!-- FULL CALENDAR -->
	<script type="text/javascript" src="js/fullcalendar/fullcalendar.min.js"></script>
	<!-- TIMEAGO -->
	<script type="text/javascript" src="js/timeago/jquery.timeago.min.js"></script>
	
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
	<!-- HUBSPOT MESSENGER -->
	<script type="text/javascript" src="js/hubspot-messenger/js/messenger.min.js"></script>
	<script type="text/javascript" src="js/hubspot-messenger/js/messenger-theme-flat.js"></script>
	<script type="text/javascript" src="js/jQuery-Cookie/jquery.cookie.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<link rel="stylesheet" type="text/css" href="js/hubspot-messenger/css/messenger.min.css" />
	<link rel="stylesheet" type="text/css" href="js/hubspot-messenger/css/messenger-theme-flat.min.css" />
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>
	<script src="js/script.js"></script>
	<script type="text/javascript">
            $(document).ready(function() {
    $('#example1').dataTable()

} );
$(document).ready(function() {
    $('#example2').dataTable()

} );
$(document).ready(function() {
    $('#example3').dataTable()

} );
        </script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("dynamic_table");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	<script type="text/javascript">
//    validasi form (hanya file .xls yang diijinkan)
    function validateForm()
    {
        function hasExtension(inputID, exts) {
            var fileName = document.getElementById(inputID).value;
            return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
        }

        if(!hasExtension('filepegawaiall', ['.xls'])){
            alert("Hanya file XLS (Excel 2003) yang diijinkan.");
            return false;
        }
    }
</script>
	<script>
  $( function() {
    var dateFormat = "yy-mm-dd",
      from = $( "#from" )
        .datepicker({
          dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
      	dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    
  } );
  </script>
  <script>
  $( function() {
    var dateFormat = "yy-mm-dd",
      from = $( "#dari" )
        .datepicker({
          dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#ke" ).datepicker({
      	dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    
  } );
  </script>
   <script>
  $( function() {
    var dateFormat = "yy-mm-dd",
      from = $( "#dari1" )
        .datepicker({
          dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#ke1" ).datepicker({
      	dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    
  } );
  </script>
	 <script>
  $( function() {
    var dateFormat = "yy-mm-dd",
      from = $( "#dari2" )
        .datepicker({
          dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#ke2" ).datepicker({
      	dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    
  } );
  </script>
 <script>
  $( function() {
    var dateFormat = "yy-mm-dd",
      from = $( "#dari3" )
        .datepicker({
          dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#ke3" ).datepicker({
      	dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    
  } );
  </script>
        
<script>

var d = "";


function batal() {
    confirm("Anda Yakin Membatalkan Pengiriman ?");
    
}
function hapus() {
    confirm("Anda Yakin akan Menghapus Data ini ?");
    
}
function terima() {
    confirm("Anda Yakin akan Mengubah Status menjadi 'DITERIMA' ?");
    
}
function hold() {
    confirm("Anda Yakin akan MEMBLOKIR Kandidat ini ?");
    
}
function no_hold() {
    confirm("Anda Yakin akan MEMBATALKAN Blokir Kandidat ?");
    
}
function myPeriod() {
    
   	var datep2 = document.getElementById("datep2").value;
    var datep1 = document.getElementById("datep1").value;
    var pl = " - ";
    document.getElementById("v_periode_2").value = datep1+pl+datep2;
}

</script>
 
</body>
</html>
 