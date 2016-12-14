<?php 
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
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<!-- DROPZONE -->
	<link rel="stylesheet" type="text/css" href="js/dropzone/dropzone.min.css" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	  <!-- select bootstrap -->
	  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
      <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

	  <link rel="stylesheet" href="bootstrap-dist/css/bootstrap-select.min.css" />
      <script src="bootstrap-dist/js/bootstrap-select.min.js"></script>

		
	  <script type="text/javascript" src="jquery.js"></script>
      
      <script type="text/javascript">
var htmlobjek;
$(document).ready(function(){
  //apabila terjadi event onchange terhadap object <select id=propinsi>
  $("#propinsi").change(function(){
    var propinsi = $("#propinsi").val();
    $.ajax({
        url: "ambilkota.php",
        data: "propinsi="+propinsi,
        cache: false,
        success: function(msg){
            //jika data sukses diambil dari server kita tampilkan
            //di <select id=kota>
            $("#kota").html(msg);
        }
    });
  });
  $("#kota").change(function(){
    var kota = $("#kota").val();
    $.ajax({
        url: "ambilkecamatan.php",
        data: "kota="+kota,
        cache: false,
        success: function(msg){
            $("#kec").html(msg);
        }
    });
  });

  $("#kec").change(function(){
    var kec = $("#kec").val();
    $.ajax({
        url: "ambilkelurahan.php",
        data: "kec="+kec,
        cache: false,
        success: function(msg){
            $("#kel").html(msg);
        }
    });
  });
});

</script>
</head>

<body>

	<!-- HEADER -->
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
										<li>
											<a href="#">Tambah Data Kandidat</a>
										</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Form Tambah Data Kandidat</h3>
									</div>
									<div class="description">Form Wizard and Validations</div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->
						<!-- SAMPLE -->
						<div class="row">
							<div class="col-md-12">
								<!-- BOX -->
								<div class="box border red" id="formWizard">
									<div class="box-title">
										<h4><i class="fa fa-bars"></i>Form Wizard - <span class="stepHeader">Step 1 of 3</h4>
										<div class="tools hidden-xs">
											<a href="#box-config" data-toggle="modal" class="config">
												<i class="fa fa-cog"></i>
											</a>
											<a href="javascript:;" class="reload">
												<i class="fa fa-refresh"></i>
											</a>
											
										</div>
									</div>
									<div class="box-body form">
										<form id="wizForm" action="insert.php" class="form-horizontal" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
										<input type="hidden" name="approval" value="t1">
										<div class="wizard-form">
										   <div class="wizard-content">
											  <ul class="nav nav-pills nav-justified steps">
												 <li>
													<a href="#account" data-toggle="tab" class="wiz-step">
													<span class="step-number">1</span>
													<span class="step-name"><i class="fa fa-check"></i> Isi Bidodata </span>   
													</a>
												 </li>

												 <li>
													<a href="#payment" data-toggle="tab" class="wiz-step active">
													<span class="step-number">2</span>
													<span class="step-name"><i class="fa fa-check"></i>Riwayat Hidup</span>   
													</a>
												 </li>
												 <li>
													<a href="#penilaian" data-toggle="tab" class="wiz-step active">
													<span class="step-number">3</span>
													<span class="step-name"><i class="fa fa-check"></i> Penilaian</span>   
													</a>
												 </li>
												 <li>
													<a href="#pengiriman" data-toggle="tab" class="wiz-step">
													<span class="step-number">4</span>
													<span class="step-name"><i class="fa fa-check"></i> Lain-lain </span>   
													</a> 
												 </li>
												 <!--<li>
													<a href="#confirm" data-toggle="tab" class="wiz-step">
													<span class="step-number">4</span>
													<span class="step-name"><i class="fa fa-check"></i> Submit </span>   
													</a> 
												 </li>
												 -->
											  </ul>
											  <div id="bar" class="progress progress-striped progress-sm active" role="progressbar">
												 <div class="progress-bar progress-bar-warning"></div>
											  </div>
											  <div class="tab-content">
												 <div class="alert alert-danger display-none">
													<a class="close" aria-hidden="true" href="#" data-dismiss="alert">×</a>
													Your form has errors. Please correct them to proceed.
												 </div>
												 <div class="alert alert-success display-none">
													<a class="close" aria-hidden="true" href="#" data-dismiss="alert">×</a>
													Your form validation is successful!
												 </div>
												 <div class="tab-pane active" id="account">
												 
								<!-- /BOX -->
											 
										
										
								<!-- /BOX -->
												 <!--
													<div class="form-group">
													   <label class="control-label col-md-3">Email<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="email" placeholder="Please provide email address"/>
														  <span class="error-span"></span>
													   </div>
													</div>
													<div class="form-group">
													   <label class="control-label col-md-3">Password<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="password" class="form-control" name="password" placeholder="Please provide password"/>
														  <span class="error-span"></span>
													   </div>
													</div>
													-->
													<div class="form-group">
													   <label class="control-label col-md-3">Nomor Absensi<span class="required">*</span></label>
													   <div class="col-md-4">
													   <!-- <?php
														
														switch ($mon) {
															case '01':
																$rom = 'I';
																break;
															case '02':
																$rom = 'II';
																break;
															case '03':
																$rom = 'III';
																break;
															case '04':
																$rom = 'IV';
																break;
															case '05':
																$rom = 'V';
																break;
															case '06':
																$rom = 'VI';
																break;
															case '07':
																$rom = 'VII';
																break;
															case '08':
																$rom = 'VIII';
																break;
															case '09':
																$rom = 'IX';
																break;
															case '10':
																$rom = 'X';
																break;
															case '11':
																$rom = 'XI';
																break;
															case '12':
																$rom = 'XII';
																break;
															default:
																$rom = '?';
																break;
														}

														  $sql = "select max(nik) as last_id from kandidat limit 1";
															 $hasil = mysql_query($sql);
															 $row = mysql_fetch_array($hasil);

															
															 	$i = $row['last_id'];
															
															 
															 $i++;
															 echo '
														  <input type="hidden"  name="nik" value="'.$i.'" readOnly="true" />
														  <input type="text" name="no_aplikasi" class="form-control" value="'.$i.''.$rom.''.$year.'" readOnly="true"/>
														  ';

														  ?> -->

														<input type="text" name="no_absensi" class="form-control" placeholder="Masukkan No. Absensi" required />
														  <span class="error-span"></span>
													   </div>
													</div>
													<div class="form-group">
													   <label class="control-label col-md-3">Nama<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="nama" placeholder="Isikan nama lengkap" required>
														  <span class="error-span"></span>
													   </div>
													</div>
													
													<div class="form-group">
													   <label class="control-label col-md-3">Tempat Lahir<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="tempat_lahir" placeholder="Isikan Tempat Lahir" required/>
														  <span class="error-span"></span>
													   </div>
													</div>
													
													<div class="form-group">
													   <label class="control-label col-md-3">Tanggal Lahir<span class="required">*</span></label>
													   <div class="col-md-4">
														<input  class="form-control datepicker" name="tgl_lahir" type="text" placeholder="yyyy/mm/dd" id="datelhr" required>
														</div>
													</div>
													<div class="form-group">
													   <label class="control-label col-md-3">Usia</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="usia" id="usia" readOnly="true"/>
														  <span class="error-span"></span>
													   </div>
												</div>
													<div class="form-group">
													   <label class="control-label col-md-3">Jenis Kelamin<span class="required">*</span></label>
													   <div class="col-md-4">
															 <label class="radio">
																<input type="radio" name="jenkel" id="jenkelm" value="Pria" data-title="Male" class="uniform" checked="checked" />
															 Pria
															 </label>
															 <label class="radio">
																<input type="radio" name="jenkel" id="jenkel" value="Wanita" data-title="Female" class="uniform"/>
															 Wanita
															 </label>	
															 <span class="help-block" id="sp" style="display: none">Jika Wanita, Pilih Berhijab / Tidak :</span>
															 <label class="radio" id="lb" style="display: none">
															 <input type="radio" name="hijab" id="hijab" value="Hijab" data-title=" Berhijab" style="display: none"/>		
															 Hijab
															 </label>	
															 <label class="radio" id="lbb" style="display: none">
																<input type="radio" name="hijab" id="nohijab" value="Tidak" data-title="Tidak Berhijab" style="display: none"/ checked>
															 Tidak Berhijab
															 </label>	
													   </div>
													
													</div>
													<div class="form-group">
													   <label class="control-label col-md-3">Alamat<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="alamat" placeholder="Isikan Alamat" required/>
														  <span class="error-span"></span>
													   </div>
													</div>
													<div class="form-group">
													   <label class="control-label col-md-3">Domisili<span class="required">*</span></label>
													   <div class="col-md-4">
														  <?php
mysql_connect("localhost","root","");
mysql_select_db("db_hrd");
?>

<select class="form-control" name="propinsi" id="propinsi">
													   
													   <option value="" disabled="" selected="" style="display:none" ;="">Pilih Provinsi</option>
<?php
//mengambil nama-nama propinsi yang ada di database
$propinsi = mysql_query("SELECT * FROM provinsi ORDER BY id_provinsi");
while($p=mysql_fetch_array($propinsi)){
echo "<option value=\"$p[id_provinsi]\">$p[nama_provinsi]</option>\n";
}
?>
</select>

<select class="form-control" name="kota" id="kota" required>
													   
													   <option value="" disabled="" selected="" style="display:none" ;="">Pilih Kota</option>
<?php
//mengambil nama-nama kabupaten/kota yang ada di database
$kota = mysql_query("SELECT * FROM kabupaten ORDER BY id_kabupaten");
while($p=mysql_fetch_array($propinsi)){
echo "<option value=\"$p[id_kabupaten]\">$p[nama_kabupaten]</option>\n";
}
?>
</select>

														  <span class="error-span"></span>
													   </div>
													</div>
												
												 <div class="form-group">
													   <label class="control-label col-md-3">No. HP<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="no_hp" placeholder="Isikan Nomor Handphone" required/>
														  <span class="error-span"></span>
													   </div>
												 </div>
												 <div class="form-group">
													   <label class="control-label col-md-3">No. Telp Lainnya</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="no_telp" placeholder="Isikan Nomor Telephone"/>
														  <span class="error-span"></span>
													   </div>
													</div>
												 <div class="form-group">
													   <label class="control-label col-md-3">Agama<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="agama" placeholder="Isikan Agama" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Tinggi Badan<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="t_bdn" placeholder="Isikan Tinggi Badan (cm)" required />
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Berat Badan<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="b_bdn" placeholder="Isikan Berat Badan (kg)" required />
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Status Perkawinan<span class="required">*</span></label>
													   <div class="col-md-4">
														  <select name="status_kawin" class="form-control" required>
															 <option value=""></option>
															 <option value="lajang">Belum Menikah</option>
															 <option value="menikah">Menikah</option>
															 <option value="duda">Duda</option>
															 <option value="Janda">Janda</option>
															</select>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													  <label class="control-label col-md-3">Kebangsaan<span class="required">*</span></label>
													   <div class="col-md-4">
														  <select name="kebangsaan" id="country_select" class="col-md-12 full-width-fix" required>
															 <option value=""></option>
															 <option value="AF">Afghanistan</option>
															 <option value="AL">Albania</option>
															 <option value="DZ">Algeria</option>
															 <option value="AS">American Samoa</option>
															 <option value="AD">Andorra</option>
															 <option value="AO">Angola</option>
															 <option value="AI">Anguilla</option>
															 <option value="AQ">Antarctica</option>
															 <option value="AR">Argentina</option>
															 <option value="AM">Armenia</option>
															 <option value="AW">Aruba</option>
															 <option value="AU">Australia</option>
															 <option value="AT">Austria</option>
															 <option value="AZ">Azerbaijan</option>
															 <option value="BS">Bahamas</option>
															 <option value="BH">Bahrain</option>
															 <option value="BD">Bangladesh</option>
															 <option value="BB">Barbados</option>
															 <option value="BY">Belarus</option>
															 <option value="BE">Belgium</option>
															 <option value="BZ">Belize</option>
															 <option value="BJ">Benin</option>
															 <option value="BM">Bermuda</option>
															 <option value="BT">Bhutan</option>
															 <option value="BO">Bolivia</option>
															 <option value="BA">Bosnia and Herzegowina</option>
															 <option value="BW">Botswana</option>
															 <option value="BV">Bouvet Island</option>
															 <option value="BR">Brazil</option>
															 <option value="IO">British Indian Ocean Territory</option>
															 <option value="BN">Brunei Darussalam</option>
															 <option value="BG">Bulgaria</option>
															 <option value="BF">Burkina Faso</option>
															 <option value="BI">Burundi</option>
															 <option value="KH">Cambodia</option>
															 <option value="CM">Cameroon</option>
															 <option value="CA">Canada</option>
															 <option value="CV">Cape Verde</option>
															 <option value="KY">Cayman Islands</option>
															 <option value="CF">Central African Republic</option>
															 <option value="TD">Chad</option>
															 <option value="CL">Chile</option>
															 <option value="CN">China</option>
															 <option value="CX">Christmas Island</option>
															 <option value="CC">Cocos (Keeling) Islands</option>
															 <option value="CO">Colombia</option>
															 <option value="KM">Comoros</option>
															 <option value="CG">Congo</option>
															 <option value="CD">Congo, the Democratic Republic of the</option>
															 <option value="CK">Cook Islands</option>
															 <option value="CR">Costa Rica</option>
															 <option value="CL">Cloud Admin</option>
															 <option value="CI">Cote d'Ivoire</option>
															 <option value="HR">Croatia (Hrvatska)</option>
															 <option value="CU">Cuba</option>
															 <option value="CY">Cyprus</option>
															 <option value="CZ">Czech Republic</option>
															 <option value="DK">Denmark</option>
															 <option value="DJ">Djibouti</option>
															 <option value="DM">Dominica</option>
															 <option value="DO">Dominican Republic</option>
															 <option value="EC">Ecuador</option>
															 <option value="EG">Egypt</option>
															 <option value="SV">El Salvador</option>
															 <option value="GQ">Equatorial Guinea</option>
															 <option value="ER">Eritrea</option>
															 <option value="EE">Estonia</option>
															 <option value="ET">Ethiopia</option>
															 <option value="FK">Falkland Islands (Malvinas)</option>
															 <option value="FO">Faroe Islands</option>
															 <option value="FJ">Fiji</option>
															 <option value="FI">Finland</option>
															 <option value="FR">France</option>
															 <option value="GF">French Guiana</option>
															 <option value="PF">French Polynesia</option>
															 <option value="TF">French Southern Territories</option>
															 <option value="GA">Gabon</option>
															 <option value="GM">Gambia</option>
															 <option value="GE">Georgia</option>
															 <option value="DE">Germany</option>
															 <option value="GH">Ghana</option>
															 <option value="GI">Gibraltar</option>
															 <option value="GR">Greece</option>
															 <option value="GL">Greenland</option>
															 <option value="GD">Grenada</option>
															 <option value="GP">Guadeloupe</option>
															 <option value="GU">Guam</option>
															 <option value="GT">Guatemala</option>
															 <option value="GN">Guinea</option>
															 <option value="GW">Guinea-Bissau</option>
															 <option value="GY">Guyana</option>
															 <option value="HT">Haiti</option>
															 <option value="HM">Heard and Mc Donald Islands</option>
															 <option value="VA">Holy See (Vatican City State)</option>
															 <option value="HN">Honduras</option>
															 <option value="HK">Hong Kong</option>
															 <option value="HU">Hungary</option>
															 <option value="IS">Iceland</option>
															 <option value="IN">India</option>
															 <option value="Indonesia">Indonesia</option>
															 <option value="IR">Iran (Islamic Republic of)</option>
															 <option value="IQ">Iraq</option>
															 <option value="IE">Ireland</option>
															 <option value="IL">Israel</option>
															 <option value="IT">Italy</option>
															 <option value="JM">Jamaica</option>
															 <option value="JP">Japan</option>
															 <option value="JO">Jordan</option>
															 <option value="KZ">Kazakhstan</option>
															 <option value="KE">Kenya</option>
															 <option value="KI">Kiribati</option>
															 <option value="KP">Korea, Democratic People's Republic of</option>
															 <option value="KR">Korea, Republic of</option>
															 <option value="KW">Kuwait</option>
															 <option value="KG">Kyrgyzstan</option>
															 <option value="LA">Lao People's Democratic Republic</option>
															 <option value="LV">Latvia</option>
															 <option value="LB">Lebanon</option>
															 <option value="LS">Lesotho</option>
															 <option value="LR">Liberia</option>
															 <option value="LY">Libyan Arab Jamahiriya</option>
															 <option value="LI">Liechtenstein</option>
															 <option value="LT">Lithuania</option>
															 <option value="LU">Luxembourg</option>
															 <option value="MO">Macau</option>
															 <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
															 <option value="MG">Madagascar</option>
															 <option value="MW">Malawi</option>
															 <option value="MY">Malaysia</option>
															 <option value="MV">Maldives</option>
															 <option value="ML">Mali</option>
															 <option value="MT">Malta</option>
															 <option value="MH">Marshall Islands</option>
															 <option value="MQ">Martinique</option>
															 <option value="MR">Mauritania</option>
															 <option value="MU">Mauritius</option>
															 <option value="YT">Mayotte</option>
															 <option value="MX">Mexico</option>
															 <option value="FM">Micronesia, Federated States of</option>
															 <option value="MD">Moldova, Republic of</option>
															 <option value="MC">Monaco</option>
															 <option value="MN">Mongolia</option>
															 <option value="MS">Montserrat</option>
															 <option value="MA">Morocco</option>
															 <option value="MZ">Mozambique</option>
															 <option value="MM">Myanmar</option>
															 <option value="NA">Namibia</option>
															 <option value="NR">Nauru</option>
															 <option value="NP">Nepal</option>
															 <option value="NL">Netherlands</option>
															 <option value="AN">Netherlands Antilles</option>
															 <option value="NC">New Caledonia</option>
															 <option value="NZ">New Zealand</option>
															 <option value="NI">Nicaragua</option>
															 <option value="NE">Niger</option>
															 <option value="NG">Nigeria</option>
															 <option value="NU">Niue</option>
															 <option value="NF">Norfolk Island</option>
															 <option value="MP">Northern Mariana Islands</option>
															 <option value="NO">Norway</option>
															 <option value="OM">Oman</option>
															 <option value="PK">Pakistan</option>
															 <option value="PW">Palau</option>
															 <option value="PA">Panama</option>
															 <option value="PG">Papua New Guinea</option>
															 <option value="PY">Paraguay</option>
															 <option value="PE">Peru</option>
															 <option value="PH">Philippines</option>
															 <option value="PN">Pitcairn</option>
															 <option value="PL">Poland</option>
															 <option value="PT">Portugal</option>
															 <option value="PR">Puerto Rico</option>
															 <option value="QA">Qatar</option>
															 <option value="RE">Reunion</option>
															 <option value="RO">Romania</option>
															 <option value="RU">Russian Federation</option>
															 <option value="RW">Rwanda</option>
															 <option value="KN">Saint Kitts and Nevis</option>
															 <option value="LC">Saint LUCIA</option>
															 <option value="VC">Saint Vincent and the Grenadines</option>
															 <option value="WS">Samoa</option>
															 <option value="SM">San Marino</option>
															 <option value="ST">Sao Tome and Principe</option>
															 <option value="SA">Saudi Arabia</option>
															 <option value="SN">Senegal</option>
															 <option value="SC">Seychelles</option>
															 <option value="SL">Sierra Leone</option>
															 <option value="SG">Singapore</option>
															 <option value="SK">Slovakia (Slovak Republic)</option>
															 <option value="SI">Slovenia</option>
															 <option value="SB">Solomon Islands</option>
															 <option value="SO">Somalia</option>
															 <option value="ZA">South Africa</option>
															 <option value="GS">South Georgia and the South Sandwich Islands</option>
															 <option value="ES">Spain</option>
															 <option value="LK">Sri Lanka</option>
															 <option value="SH">St. Helena</option>
															 <option value="PM">St. Pierre and Miquelon</option>
															 <option value="SD">Sudan</option>
															 <option value="SR">Suriname</option>
															 <option value="SJ">Svalbard and Jan Mayen Islands</option>
															 <option value="SZ">Swaziland</option>
															 <option value="SE">Sweden</option>
															 <option value="CH">Switzerland</option>
															 <option value="SY">Syrian Arab Republic</option>
															 <option value="TW">Taiwan, Province of China</option>
															 <option value="TJ">Tajikistan</option>
															 <option value="TZ">Tanzania, United Republic of</option>
															 <option value="TH">Thailand</option>
															 <option value="TG">Togo</option>
															 <option value="TK">Tokelau</option>
															 <option value="TO">Tonga</option>
															 <option value="TT">Trinidad and Tobago</option>
															 <option value="TN">Tunisia</option>
															 <option value="TR">Turkey</option>
															 <option value="TM">Turkmenistan</option>
															 <option value="TC">Turks and Caicos Islands</option>
															 <option value="TV">Tuvalu</option>
															 <option value="UG">Uganda</option>
															 <option value="UA">Ukraine</option>
															 <option value="AE">United Arab Emirates</option>
															 <option value="GB">United Kingdom</option>
															 <option value="US">United States</option>
															 <option value="UM">United States Minor Outlying Islands</option>
															 <option value="UY">Uruguay</option>
															 <option value="UZ">Uzbekistan</option>
															 <option value="VU">Vanuatu</option>
															 <option value="VE">Venezuela</option>
															 <option value="VN">Viet Nam</option>
															 <option value="VG">Virgin Islands (British)</option>
															 <option value="VI">Virgin Islands (U.S.)</option>
															 <option value="WF">Wallis and Futuna Islands</option>
															 <option value="EH">Western Sahara</option>
															 <option value="YE">Yemen</option>
															 <option value="ZM">Zambia</option>
															 <option value="ZW">Zimbabwe</option>
														  </select>
													   </div>													
													</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Upload Foto Kandidat</label>
													   <div class="col-md-4">
													   <input class="form-control" name="gambar" type="file" >

														
														  <span class="error-span"></span>
													   </div>
												</div>
												</div>

												 <div class="tab-pane" id="payment">
												 <div class="col-md-6">
												 <div class="box border orange">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>Riwayat Pendidikan</h4>
												<div class="tools hidden-xs">
													<a href="#box-config" data-toggle="modal" class="config">
														<i class="fa fa-cog"></i>
													</a>
													<a href="javascript:;" class="reload">
														<i class="fa fa-refresh"></i>
													</a>
													
												</div>
											</div>
											<div class="box-body big">
												 <div class="form-group">
													   <label class="control-label col-md-4">Pendidikan<span class="required">*</span></label>
													   <div class="col-md-8">
														  <select class="form-control" id="mySelect" name="pendidikan">
															   <option value="" disabled="" selected="" style="display:none" ;="">Pilih Pendidikan Terakhir</option>
															   <option value="S3">S3</option>
															   <option value="S2">S2</option>
															   <option value="S1">S1</option>
															   <option value="D3">D3</option>
															   <option value="D1">D1</option>
															   <option value="SMK">SMK</option>
															   <option value="SMA">SMA</option>
															   <option value="SMP">SMP</option>
														   </select>	
														  <span class="error-span"></span>
														  
													   </div>

												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Nama Sekolah<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="nama_sekolah" placeholder="Nama Sekolah" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Jurusan<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="jurusan" placeholder="Isikan Jurusan" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Tahun Lulus<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="thn_lulus" placeholder="Isikan Tahun Lulus" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">IPK<span class="required"></span></label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="ipk" placeholder="Isikan IPK"/>
														  <span class="error-span"></span>
													   </div>
												</div>
											</div>
										</div>
										</div>

												
												
											<div class="col-md-6">
												<div class="box border blue">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>Pengalaman Kerja</h4>
												<div class="tools hidden-xs">
													<a href="#box-config" data-toggle="modal" class="config">
														<i class="fa fa-cog"></i>
													</a>
													<a href="javascript:;" class="reload">
														<i class="fa fa-refresh"></i>
													</a>
													
												</div>
											</div>
											<div class="box-body" id="riwayat">
											<div class="form-group">
													   <label class="control-label col-md-3"></label>
													   <div class="col-md-4">
															 <label class="radio">
																<input type="radio" name="nana" id="pernah" value="" class="uniform" onchange="myMethod()"/>
															 Pernah Bekerja
															 </label>
														</div>
														<div class="col-md-4">
															 <label class="radio">
																<input type="radio" name="nana" id="fresh" value="Freshgraduate" class="uniform" onchange="myFungsi()"/>
															 FreshGraduate
															 </label>	
															 
													   </div>
													
													</div>
											</div>
											<div class="box-body big" id="perusahaan" style="display: none">
											
												<div class="form-group">
													   <label class="control-label col-md-4" id="lblpershn">Nama Perusahaan<span class="required">*</span></label>
													   <label class="control-label col-md-4" id="lblfresh" style="display: none">FreshGraduate<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" id="nm_perusahaan" name="perusahaan" placeholder="Isikan Nama Perusahaan" required/>

														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group" id="jns">
													   <label class="control-label col-md-4">Jenis Perusahaan</label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" name="jns_perusahaan" placeholder="Isikan Jenis Perusahaan"  />
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group" id="posisi">
													   <label class="control-label col-md-4">Posisi<span class="required">*</span></label>
													   <div class="col-md-8">
													    <input type="text" class="form-control" name="posisi" placeholder="Isikan Jabatan Lama"  />
														 
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group" id="periode">
													   <label class="control-label col-md-4">Periode<span class="required">*</span></label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" placeholder="Periode Awal Kerja" id="datep1" required/>   to 
														   <input type="text" class="form-control" placeholder="Periode Akhir Kerja" id="datep2" onchange="myPeriod()" />
														   <label class="checkbox"> <div class="checker"><span><input id="datep3" type="checkbox" class="uniform" name="sekarang" value="Sekarang"></span></div> Sekarang</label>
														   <input type="hidden" name="periode" id="v_periode" value="">
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group" id="d1">
													   <label class="control-label col-md-4">Deskripsi Pekerjaan 1<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="deskripsi1" placeholder="Isikan Deskripsi Pekerjaan" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group" id="d2">
													   <label class="control-label col-md-4">Deskripsi Pekerjaan 2<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="deskripsi2" placeholder="Isikan Deskripsi Pekerjaan" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group" id="d3">
													   <label class="control-label col-md-4">Deskripsi Pekerjaan 3<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="deskripsi3" placeholder="Isikan Deskripsi Pekerjaan" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group" id="gaji">
													   <label class="control-label col-md-4">Gaji Terakhir</label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" name="gaji_terakhir" placeholder="Isikan Gaji Terakhir" />
														  <span class="error-span"></span>
													   </div>
												</div>
												<a id="btnplus" class="btn btn-success"><B>+</B></a>
											</div>
										</div>
										</div>
												 
										<div class="col-md-6" id="pengalaman2" style="display: none">
												<div class="box border blue">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>Pengalaman Kerja 2</h4>
												<div class="tools hidden-xs">
													<a href="#box-config" data-toggle="modal" class="config">
														<i class="fa fa-cog"></i>
													</a>
													<a href="javascript:;" class="reload">
											 			<i class="fa fa-refresh"></i>
													</a>
													
												</div>
											</div>
											<div class="box-body big">
												<div class="form-group">
													   <label class="control-label col-md-4">Nama Perusahaan</label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="perusahaan_1" placeholder="Isikan Nama Perusahaan" required/>

														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Jenis Perusahaan</label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" name="jns_perusahaan_1" placeholder="Isikan Jenis Perusahaan" />
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Posisi</label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="posisi_1" placeholder="Isikan Jabatan Lama"  />
														 
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group" id="periode">
													   <label class="control-label col-md-4">Periode<span class="required">*</span></label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" placeholder="Periode Awal Kerja" id="datep1_2" required/>   to 
														   <input type="text" class="form-control" placeholder="Periode Akhir Kerja" id="datep2_2" onchange="myPeriod2()" required/>

														   <input type="hidden" name="periode_1" id="v_periode_2" value="">
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Deskripsi Pekerjaan 1<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="deskripsi1_1" placeholder="Isikan Deskripsi Pekerjaan" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Deskripsi Pekerjaan 2<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="deskripsi2_1" placeholder="Isikan Deskripsi Pekerjaan" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Deskripsi Pekerjaan 3<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="deskripsi3_1" placeholder="Isikan Deskripsi Pekerjaan" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Gaji Terakhir</label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" name="gaji_terakhir_1" placeholder="Isikan Gaji Terakhir" />
														  <span class="error-span"></span>
													   </div>
												</div>
												<a id="btnplus2" class="btn btn-success"><B>+</B></a>
												<a id="btnminus1" class="btn btn-warning"><B>-</B></a>
											</div>
										</div>
										</div>
										<div class="col-md-6" id="pengalaman3" style="display: none">
											<div class="box border blue">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>Pengalaman Kerja 3</h4>
												<div class="tools hidden-xs">
													<a href="#box-config" data-toggle="modal" class="config">
														<i class="fa fa-cog"></i>
													</a>
													<a href="javascript:;" class="reload">
														<i class="fa fa-refresh"></i>
													</a>
												</div>
											</div>
											<div class="box-body big">
												<div class="form-group">
													   <label class="control-label col-md-4">Nama Perusahaan</label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="perusahaan_2" placeholder="Isikan Nama Perusahaan"/>

														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Jenis Perusahaan</label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" name="jns_perusahaan_2" placeholder="Isikan Jenis Perusahaan" />
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Posisi</label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="posisi_2" placeholder="Isikan Jabatan Lama"  />
														 
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group" id="periode">
													   <label class="control-label col-md-4">Periode<span class="required">*</span></label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" placeholder="Periode Awal Kerja" id="datep1_3" required/>   to 
														   <input type="text" class="form-control" placeholder="Periode Akhir Kerja" id="datep2_3" onchange="myPeriod3()" required/>
														   <input type="hidden" name="periode_2" id="v_periode_3" value="">
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Deskripsi Pekerjaan 1</label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="deskripsi1_2" placeholder="Isikan Deskripsi Pekerjaan" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Deskripsi Pekerjaan 2</label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="deskripsi2_2" placeholder="Isikan Deskripsi Pekerjaan" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Deskripsi Pekerjaan 3</label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="deskripsi3_2" placeholder="Isikan Deskripsi Pekerjaan" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Gaji Terakhir</label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" name="gaji_terakhir_2" placeholder="Isikan Gaji Terakhir" />
														  <span class="error-span"></span>
													   </div>
												</div>
												
												
												<a id="btnminus2" class="btn btn-warning"><B>-</B></a>
											</div>
										</div>
										</div>
												
											<div class="col-md-10">
												<div class="box border purple">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>Kualifikasi & Lainnya</h4>
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
												
												  <div class="form-group">
													   <label class="col-md-4 control-label" for="e2">Gaji yang Diharapkan</label>
													   <div class="col-md-6">
														  <select class="form-control" id="gaji_hrp" name="gaji_diinginkan">
															   <option value="" disabled="" selected="" style="display:none" ;="">Pilih Range Gaji yang Diharapkan</option>
															   <option value="UMR">UMR</option>
															   <option value=" <= 2.000.000"> <= 2 Jt</option>
															   <option value="2.000.000 - 3.000.000">2 Jt - 3 Jt</option>
															   <option value="3.000.000 - 4.000.000">3 Jt - 4 Jt</option>
															   <option value="4.500.000 - 5.000.000">4.5 Jt - 5 Jt</option>
															   <option value="5.000.000 - 6.000.000">5 Jt - 6 Jt</option>
															   <option value="6.000.000 - 7.000.000">6 Jt - 7 Jt</option>
															   <option value="7.000.000 - 8.000.000">7 Jt - 8 Jt</option>
															   <option value="8.000.000 - 9.000.000">8 Jt - 9 Jt</option>
															   <option value="9.000.000 - 10.000.000">9 Jt - 10 Jt</option>
															   <option value=" >= 10.000.000"> >= 10 Jt</option>
															   <option value="Sesuai dengan standart perusahaan">Sesuai dengan standart perusahaan</option>
															   
														   </select>	
														 <!--  <input type="checkbox" id="lainnya2" >*Lainnya
														  <input type="text" id="lain2" placeholder="Isikan Gaji Lainnya..?" onchange="myGaji()" style="display: none"/>
														  -->
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="col-md-4 control-label" for="e2">Keterampilan dan Keahlian yang dimiliki<span class="required">*</span></label>
													   <div class="col-md-6">
												<input type="text" class="form-control" name="kualifikasi1" required>
												<span class="error-span"></span>
											</div>
											</div>
											<div class="form-group">
											<label class="col-md-4 control-label" for="e2"></label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="kualifikasi2">
												<span class="error-span"></span>
											</div>
											</div>
											<div class="form-group">
											<label class="col-md-4 control-label" for="e2"></label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="kualifikasi3">
												<span class="error-span"></span>
											</div>
											</div>

														 
												
											</div>
										</div>

								<div class="col-md-12">
											<div class="box border pink">
									<div class="box-title">
										<h4><i class="fa fa-bars"></i>Kelengkapan Data</h4>
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
										
										  <div class="form-group">
											
											 <div class="col-md-6"> 
												 <label class="checkbox"> <input name="ijazah" type="checkbox" class="uniform" value="1"> Ijazah</label> 
												 <label class="checkbox"> <input name="transkrip" type="checkbox" class="uniform" value="1"> Transkrip Nilai</label> 
												 <label class="checkbox"> <input name="sertifikat" type="checkbox" class="uniform" value="1"> Sertifikat Lainya</label> 
												 <label class="checkbox"> <input name="surat_ket_kerja" type="checkbox" class="uniform" value="1" > Surat Keterangan Kerja</label> 
												  <label class="checkbox"> <input name="skkb" type="checkbox" class="uniform" value="1"> SKKB</label> 
												  <label class="checkbox"> <input name="skck" type="checkbox" class="uniform" value="1"> SKCK</label> 
												 <label class="checkbox"> <input name="surat_ket_sehat" type="checkbox" class="uniform" value="1"> Surat Keterangan Sehat</label> 
												 </div>
												 <div class="col-md-6"> 
												 <label class="checkbox"> <input name="photo" type="checkbox" class="uniform" value="1" > Photo</label> 
												  <label class="checkbox"> <input name="tes_kepribadian" type="checkbox" class="uniform" value="1"> Test Kepribadian</label> 
												 <label class="checkbox"> <input name="tes_iq" type="checkbox" class="uniform" value="1"> Test Pengetahuan Umum</label> 
												 <label class="checkbox"> <input name="tes_eq" type="checkbox" class="uniform" value="1" > Tes Logika</label> 
												  <label class="checkbox"> <input name="tes_disk" type="checkbox" class="uniform" value="1"> Test Disk</label> 
												  <label class="checkbox"> <input name="tes_tiu" type="checkbox" class="uniform" value="1"> Test TIU</label> 
												   <label class="checkbox"> <input name="lain" type="checkbox" class="uniform" value="1"> Lainnya</label> 
												
											 </div>
										  </div>
										</div>
									</div>
									</div>
									</div>	 <!--
													<div class="form-group">
													   <label class="control-label col-md-3"><span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="card_number" placeholder="Please provide 16 digit card number"/>
														  <span class="error-span"></span>
													   </div>
													</div>
													<div class="form-group">
													   <label class="control-label col-md-3">CVC<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="text" placeholder="Please provide 3 digit CVC" class="form-control" name="card_cvc"/>
														  <span class="error-span"></span>
													   </div>
													</div>
													<div class="form-group">
													   <label class="control-label col-md-3">Card Expiry (MM/YYYY)<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="text" placeholder="Please provide card expiry date in MM/YYYY" maxlength="7" class="form-control" name="card_expirydate"/>
														  <span class="error-span">e.g 12/1985</span>
													   </div>
													</div>												 
													<div class="form-group">
													   <label class="control-label col-md-3">Card Holder Name<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="card_holder_name" placeholder="Please provide card holder name"/>
														  <span class="error-span"></span>
													   </div>
													</div>	
													-->												
												 </div>
												 <div class="tab-pane" id="penilaian">
												 <div class="col-md-7">
												 <div class="box border green">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>Penilaian Interview</h4>
												<div class="tools hidden-xs">
													<a href="#box-config" data-toggle="modal" class="config">
														<i class="fa fa-cog"></i>
													</a>
													<a href="javascript:;" class="reload">
														<i class="fa fa-refresh"></i>
													</a>
													
														
													
												</div>
											</div>
											<div class="box-body big">
												<div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Penampilan</label> 
											 <div class="col-md-6">
												<select class="form-control" name="penampilan" required>
												   <option></option>
												   <option value="5">5 - ( Sangat Baik )</option>
												   <option value="4">4 - ( Baik )</option>
												   <option value="3">3 - ( Cukup )</option>
												   <option value="2">2 - ( Kurang )</option>
												   <option value="1">1 - ( Sangat Kurang )</option>
												</select>												
											 </div>
										  </div>
										    <div class="form-group">
											 <label class="col-md-6 control-label" for="e2" >Keterampilan dan Komunikasi</label> 
											 <div class="col-md-6">
												<select class="form-control" name="komunikasi" required>
												   <option></option>
												   <option value="5">5 - ( Sangat Baik )</option>
												   <option value="4">4 - ( Baik )</option>
												   <option value="3">3 - ( Cukup )</option>
												   <option value="2">2 - ( Kurang )</option>
												   <option value="1">1 - ( Sangat Kurang )</option>
												</select>												
											 </div>
										  </div>
										  <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Sikap dan Motivasi</label> 
											 <div class="col-md-6">
												<select class="form-control" name="sikap" required>
												  <option></option>
												   <option value="5">5 - ( Sangat Baik )</option>
												   <option value="4">4 - ( Baik )</option>
												   <option value="3">3 - ( Cukup )</option>
												   <option value="2">2 - ( Kurang )</option>
												   <option value="1">1 - ( Sangat Kurang )</option>
												</select>												
											 </div>
										  </div>
										  <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Pemahaman Terhadap Pekerjaan</label> 
											 <div class="col-md-6">
												<select class="form-control" name="pemahaman" required>
												   <option></option>
												   <option value="5">5 - ( Sangat Baik )</option>
												   <option value="4">4 - ( Baik )</option>
												   <option value="3">3 - ( Cukup )</option>
												   <option value="2">2 - ( Kurang )</option>
												   <option value="1">1 - ( Sangat Kurang )</option>
												</select>												
											 </div>
										  </div>
										  <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Komitmen dalam Bekerja</label> 
											 <div class="col-md-6">
												<select class="form-control" name="komitmen" required>
												   <option></option>
												   <option value="5">5 - ( Sangat Baik )</option>
												   <option value="4">4 - ( Baik )</option>
												   <option value="3">3 - ( Cukup )</option>
												   <option value="2">2 - ( Kurang )</option>
												   <option value="1">1 - ( Sangat Kurang )</option>
												</select>												
											 </div>
										  </div>
										  
										  <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Pengalaman yang sesuai Pekerjaan</label> 
											 <div class="col-md-6">
												<select class="form-control" name="pengalaman" required>
												   <option></option>
												   <option value="5">5 - ( Sangat Baik )</option>
												   <option value="4">4 - ( Baik )</option>
												   <option value="3">3 - ( Cukup )</option>
												   <option value="2">2 - ( Kurang )</option>
												   <option value="1">1 - ( Sangat Kurang )</option>
												</select>												
											 </div>
										  </div>
										  <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Kemampuan Menggunakan Komputer</label> 
											 <div class="col-md-6">
												<select class="form-control" name="komputer" required>
												   <option></option>
												   <option value="Sangat Mahir">Sangat Mahir</option>
												   <option value="Cukup Mahir">Cukup Mahir</option>
												   <option value="Tidak Mahir">Tidak Mahir</option>
												   
												</select>												
											 </div>
										  </div>
										   <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Kemampuan Bahasa Inggris</label> 
											 <div class="col-md-6">
												<select class="form-control" name="inggris" required>
												   <option></option>
												   <option value="Baik">Baik</option>
												   <option value="Cukup Baik">Cukup Baik</option>
												   <option value="Kurang">Kurang</option>  
												   
												</select>												
											 </div>
										  </div>
											</div>
										</div>
										</div>

												
												
											<div class="col-md-5">
												<div class="box border blue">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>Tanggal Proses</h4>
												<div class="tools hidden-xs">
													<a href="#box-config" data-toggle="modal" class="config">
														<i class="fa fa-cog"></i>
													</a>
													<a href="javascript:;" class="reload">
														<i class="fa fa-refresh"></i>
													</a>
													
												</div>
											</div>
											<div class="box-body big">
												<div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Tanggal Pemeriksaan CV<span class="required">*</span></label> 
											 <div class="col-md-6">
												<input type="text" class="form-control" name="tgl_periksa" id="tgl_periksa" required/>											
											 </div>
										  </div>
										   <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Tanggal Interview</label> 
											 <div class="col-md-6">
												<input type="text" class="form-control" name="tgl_interview" id="tgl_interview" required/>											
											 </div>
										  </div>
										   <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Tanggal Psikotes</label> 
											 <div class="col-md-6">
												<input type="text" class="form-control" name="tgl_psikotes" id="tgl_psikotes" required />											
											 </div>
										  </div>
												
												
											</div>
										</div>
										</div>
												 
												
												
											<div class="col-md-12">
												<div class="box border red">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>Profil Kepribadian Berdasarkan Interview</h4>
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
												
											<div class="form-group">
												<label class="col-md-4 control-label" for="e2">Kelebihan</label>
												<div class="col-md-6">
												<input type="text" class="form-control" name="kl1" required>
												<span class="error-span"></span>
											</div>
											</div>
											<div class="form-group">
											<label class="col-md-4 control-label" for="e2"></label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="kl2" required>
												<span class="error-span"></span>
											</div>
											</div>
											<div class="form-group">
											<label class="col-md-4 control-label" for="e2"></label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="kl3">
												<span class="error-span"></span>
											</div>
											</div>
											<div class="form-group">
											<label class="col-md-4 control-label" for="e2"></label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="kl4" >
												<span class="error-span"></span>
											</div>
											</div>	
											<div class="form-group">
											<label class="col-md-4 control-label" for="e2"></label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="kl5">
											</div>
											</div>	
										  	<div class="form-group">
												<label class="col-md-4 control-label" for="e2">Kekurangan</label>
												<div class="col-md-6">
												<input type="text" class="form-control" name="kr1">
												<span class="error-span"></span>
										  	</div>
											</div>	
											<div class="form-group">
											<label class="col-md-4 control-label" for="e2"></label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="kr2">
												<span class="error-span"></span>
											</div>
											</div>
										  	<div class="form-group">
										  	<label class="col-md-4 control-label" for="e2"></label>
											<div class="col-md-6">
												<input type="text" name="kr3" class="form-control">
											</div>
											</div>
										  	<div class="form-group"> 
										  	<label class="col-md-4 control-label" for="e2"></label>
											<div class="col-md-6">
												<input type="text" name="kr4" class="form-control">
											</div>
											</div>
										  	<div class="form-group">
										  	<label class="col-md-4 control-label" for="e2"></label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="kr5">
											</div>
											</div>

										  	</div>
											</div>
												</div>
												</div>
												 <div class="tab-pane" id="pengiriman">
												<div class="form-group">
													   <label class="control-label col-md-3">Posisi Dilamar 1<span class="required">*</span></label>
													   <div class="col-md-6">
														  
														  <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="dilamar1" required>
													   
													   <option value="" disabled="" selected="" style="display:none" ;="">Pilih Posisi Yang dilamar 1</option>
													   <?php
													   $query = mysql_query("
										        SELECT * 
										        FROM posisi order by nama_posisi asc");
											
											
											while ($cs = mysql_fetch_array($query)) {
											?>
													   <option value="<?php echo $cs['nama_posisi']; ?>"><?php echo $cs['nama_posisi']; ?>
													   
											<?php } ?>		   
													</select>	
													<select class="selectpicker" data-show-subtext="true" data-live-search="true" name="sub_posisi1">
													   
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
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Posisi Dilamar 2</label>
													   <div class="col-md-6">
														  <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="dilamar2" >
													   
													   <option value="" disabled="" selected="" style="display:none" ;="">Pilih Posisi Yang dilamar 2</option>
													   <?php
													   $query = mysql_query("
										        SELECT * 
										        FROM posisi order by nama_posisi asc");
											
											
											while ($cs = mysql_fetch_array($query)) {
											?>
													   <option value="<?php echo $cs['nama_posisi']; ?>"><?php echo $cs['nama_posisi']; ?>
													   
											<?php } ?>		   
													</select>	
													<select class="selectpicker" data-show-subtext="true" data-live-search="true" name="sub_posisi2">
													   
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
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Posisi Dilamar 3</label>
													   <div class="col-md-6">
														  
														    <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="dilamar3">
													   
													   <option value="" disabled="" selected="" style="display:none" ;="">Pilih Posisi Yang dilamar 3</option>
													   <?php
													   $query = mysql_query("
										        SELECT * 
										        FROM posisi order by nama_posisi asc");
											
											
											while ($cs = mysql_fetch_array($query)) {
											?>
													   <option value="<?php echo $cs['nama_posisi']; ?>"><?php echo $cs['nama_posisi']; ?>
													   
											<?php } ?>		   
													</select>	
													<select class="selectpicker" data-show-subtext="true" data-live-search="true" name="sub_posisi3">
													   
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
														  <span class="error-span"></span>
													   </div>
												</div>
														
														  <input type="hidden" name="status" value="0" />
														  
												
												
												<div class="form-group">
													   <label class="control-label col-md-3">Interviewer</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="interviewer" placeholder="Isikan Nama Interviewer"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Sumber</label>
													   <div class="col-md-4">
														  
														  <select class="form-control" name="sumber" id="sumber" placeholder="Isikan Sumber Info Lowongan">
														   <option ></option>
														   <option value="Koran">Koran</option>
														   <option value="JobStreet">JobStreet</option>
														   <option value="Media Sosial Lainnya">Media Sosial</option>  
														   <option value="Teman">Teman</option>
														   <option value="Referensi Customer">Referensi Customer</option>
														   <option value="Job Fair">Job Fair</option>
														   <option value="Sekolah">Sekolah</option>
														    <option value="Sms Center">Sms Center</option>
														  </select>	
														  <input type="checkbox" id="lainnya3" >*Lainnya
														  <input type="text" id="lain3" placeholder="Isikan Sumber Lainnya..?" onchange="mySumber()" style="display: none"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Keterangan</label>
													   <div class="col-md-4">
													   <textarea name="keterangan" data-provide="markdown" rows="5" cols="60"></textarea>
														<span class="error-span"></span>
													   </div>
												</div>
												</div>
												 <div class="tab-pane" id="confirm">
													<h3 class="block">Submit account details</h3>
													<h4 class="form-section">Account Information</h4>
													<div class="well">
														<div class="form-group">
														   <label class="control-label col-md-3">Email:</label>
														   <div class="col-md-4">
															  <p class="form-control-static" data-display="email"></p>
														   </div>
														</div>
														<div class="form-group">
														   <label class="control-label col-md-3">Fullname:</label>
														   <div class="col-md-4">
															  <p class="form-control-static" data-display="fullname"></p>
														   </div>
														</div>
														<div class="form-group">
														   <label class="control-label col-md-3">Gender:</label>
														   <div class="col-md-4">
															  <p class="form-control-static" data-display="gender"></p>
														   </div>
														</div>
														<div class="form-group">
														   <label class="control-label col-md-3">Phone:</label>
														   <div class="col-md-4">
															  <p class="form-control-static" data-display="phone"></p>
														   </div>
														</div>
														<div class="form-group">
														   <label class="control-label col-md-3">Address:</label>
														   <div class="col-md-4">
															  <p class="form-control-static" data-display="address"></p>
														   </div>
														</div>
														<div class="form-group">
														   <label class="control-label col-md-3">Country:</label>
														   <div class="col-md-4">
															  <p class="form-control-static" data-display="country"></p>
														   </div>
														</div>
													</div>
													<h4 class="form-section">Payment Information</h4>
													<div class="well">														
														<div class="form-group">
														   <label class="control-label col-md-3">Card Number:</label>
														   <div class="col-md-4">
															  <p class="form-control-static" data-display="card_number"></p>
														   </div>
														</div>
														<div class="form-group">
														   <label class="control-label col-md-3">CVC:</label>
														   <div class="col-md-4">
															  <p class="form-control-static" data-display="card_cvc"></p>
														   </div>
														</div>
														<div class="form-group">
														   <label class="control-label col-md-3">Expiration:</label>
														   <div class="col-md-4">
															  <p class="form-control-static" data-display="card_expiry_date"></p>
														   </div>
														</div>
														<div class="form-group">
														   <label class="control-label col-md-3">Card Holder Name:</label>
														   <div class="col-md-4">
															  <p class="form-control-static" data-display="card_name"></p>
														   </div>
														</div>
													</div>
												 </div>
											  </div>
										   </div>
										   <div class="wizard-buttons">
											  <div class="row">
												 <div class="col-md-12">
													<div class="col-md-offset-3 col-md-9">
													   <a href="javascript:;" class="btn btn-default prevBtn">
														<i class="fa fa-arrow-circle-left"></i> Back 
													   </a>
													   <a href="javascript:;" class="btn btn-primary nextBtn">
														Continue <i class="fa fa-arrow-circle-right"></i>
													   </a>

													   <input type="hidden" name="id_kandidat" value="1">
														<input class="btn btn-success submitBtn" type="submit" name="submit" value="Simpan" /> 
													                            
													</div>
												 </div>
											  </div>
										   </div>
										</div>
									 </form>
									</div>
								</div>
								<!-- /BOX -->
							</div>
						</div>
						<!-- /SAMPLE -->
						<div class="footer-tools">
							<span class="go-top">
								 Top
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
	<!-- MARKDOWN -->
	<script type="text/javascript" src="js/bootstrap-markdown/js/markdown.js"></script>
	<script type="text/javascript" src="js/bootstrap-markdown/js/to-markdown.js"></script>
	<script type="text/javascript" src="js/bootstrap-markdown/js/bootstrap-markdown.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<script src="js/script.js"></script>
	<script src="js/bootstrap-wizard/form-wizard.min.js"></script>
	<script>
  $(function() {
    $( "#datep1" ).datepicker({
    	altField: "#datep1",
      altFormat: "MM yy",
      changeMonth: true,
      changeYear: true
    });
    
  });
  $(function() {
    $( "#datep2" ).datepicker({
    	altField: "#datep2",
      altFormat: "MM yy",
      changeMonth: true,
      changeYear: true
    });
    
  });
  $(function() {
    $( "#datep1_2" ).datepicker({
    	altField: "#datep1_2",
      altFormat: "MM yy",
      changeMonth: true,
      changeYear: true
    });
    
  });
  $(function() {
    $( "#datep2_2" ).datepicker({
    	altField: "#datep2_2",
      altFormat: "MM yy",
      changeMonth: true,
      changeYear: true
    });
    
  });
  $(function() {
    $( "#datep1_3" ).datepicker({
    	altField: "#datep1_3",
      altFormat: "MM yy",
      changeMonth: true,
      changeYear: true
    });
    
  });
  $(function() {
    $( "#datep2_3" ).datepicker({
    	altField: "#datep2_3",
      altFormat: "MM yy",
      changeMonth: true,
      changeYear: true
    });
    
  });
  $(function() {
    $( "#tgl_periksa" ).datepicker({
    	dateFormat: "dd/mm/yy",
      changeMonth: true,
      changeYear: true
    });
    
  });
  $(function() {
    $( "#tgl_periksa" ).datepicker({
    	dateFormat: "dd/mm/yy",
      changeMonth: true,
      changeYear: true
    });
    
  });
  $(function() {
    $( "#tgl_interview" ).datepicker({
    	dateFormat: "dd/mm/yy",
      changeMonth: true,
      changeYear: true
    });
    
  });
  $(function() {
    $( "#tgl_interview" ).datepicker({
    	dateFormat: "dd/mm/yy",
      changeMonth: true,
      changeYear: true
    });
    
  });
  $(function() {
    $( "#tgl_psikotes" ).datepicker({
    	dateFormat: "dd/mm/yy",
      changeMonth: true,
      changeYear: true
    });
    
  });
  $(function() {
    $( "#tgl_psikotes" ).datepicker({
    	dateFormat: "dd/mm/yy",
      changeMonth: true,
      changeYear: true
    });
    
  });
  $(function() {
    $( "#tgl_pengiriman" ).datepicker({
    	dateFormat: "dd/mm/yy",
      changeMonth: true,
      changeYear: true
    });
    
  });
  $(function() {
    $( "#tgl_pengiriman" ).datepicker({
    	dateFormat: "dd/mm/yy",
      changeMonth: true,
      changeYear: true
    });
    
  });
  </script>
  <script>
        $(function() {
            $( "#datelhr" ).datepicker({
     numberOfMonths: 2,
      showButtonPanel: true,
      changeMonth: true,
      changeYear: true,
      yearRange: '1950:2026',
      dateFormat: "yy-mm-dd"
    });
        });
 
        window.onload=function(){
            $('#datelhr').on('change', function() {
                var dob = new Date(this.value);
                var today = new Date();
                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('#usia').val(age);
            });
        }
 
    </script>
  
	<script>
		jQuery(document).ready(function() {		
			App.setPage("wizards_validations");  //Set current page
			App.init(); //Initialise plugins and elements
			FormWizard.init();
		});
	</script>
	<!-- DROPZONE -->
	<script type="text/javascript" src="js/dropzone/dropzone.min.js"></script>
	
	<script>
		jQuery(document).ready(function() {		
			App.setPage("dropzone_file_upload");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	<!-- /JAVASCRIPTS -->
	 <script type="text/javascript">
	$(function(){
  // cache these!
 
  var radioButton = $("#jenkel"),
      hijab = $("#hijab");
      nohijab = $("#nohijab");
      lb = $("#lb");
      sp = $("#sp");
      lbb = $("#lbb");
  radioButton.change(function () { // listen for change - not click
    if( this.checked ) { // use the "raw" DOM property `checked`
      hijab.show();
  	  lb.show();
  	  sp.show();
  	  nohijab.show();
  	   lbb.show();
  }
      });
  var radioButtonm = $("#jenkelm"),
      hijab = $("#hijab");
      nohijab = $("#nohijab");
      lb = $("#lb");
      sp = $("#sp");
      lbb = $("#lbb");
  radioButtonm.change(function () { // listen for change - not click
    if( this.checked ) { // use the "raw" DOM property `checked`
      hijab.hide();
  	  lb.hide();
  	  sp.hide();
  	  nohijab.hide();
  	   lbb.hide();
  }
      });
  var lainnya = $("#lainnya"),
      lain = $("#lain");
     
  lainnya.change(function () { // listen for change - not click
    // use the "raw" DOM property `checked`
      lain.show();
  	  
  
      });
  var cbg = $("#cbg"),
      cabang = $("#cabang");
     
  cbg.change(function () { // listen for change - not click
    // use the "raw" DOM property `checked`
      cabang.show();
  	  
  
      });

  var lainnya2 = $("#lainnya2"),
      lain2 = $("#lain2");
      
     
  lainnya2.change(function () { // listen for change - not click
    // use the "raw" DOM property `checked`
      lain2.show();
  	  
  
      });
  var lainnya3 = $("#lainnya3"),
      lain3 = $("#lain3");
      
     
  lainnya3.change(function () { // listen for change - not click
    // use the "raw" DOM property `checked`
      lain3.show();
  	  
  
      });
  var btnplus = $("#btnplus"),
      pengalaman2 = $("#pengalaman2");
     
  btnplus.click(function () { // listen for change - not click
    // use the "raw" DOM property `checked`
      pengalaman2.show();
  	  
  
      });



  var fresh = $("#fresh"),
  	  lblfresh = $("#lblfresh"),
  	  lblpershn = $("#lblpershn"),
      jns = $("#jns"),
      posisi = $("#posisi"),
      periode = $("#periode"),
      d1 = $("#d1"),
      d2 = $("#d2"),
      d3 = $("#d3"),
      pengalaman2 = $("#pengalaman2"),
      pengalaman3 = $("#pengalaman3"),
      gaji = $("#gaji");
      btnplus = $("#btnplus");

     
  fresh.change(function () { // listen for change - not click
    // use the "raw" DOM property `checked`
      lblpershn.hide();
      pengalaman2.hide();
      pengalaman3.hide();
      jns.hide();
      posisi.hide();
  	  periode.hide();
  	  gaji.hide();
  	  d1.hide();
  	  d2.hide();
  	  d3.hide();
  	  btnplus.hide();
  	  lblfresh.show();


      });

var 
      perusahaan = $("#perusahaan"),
      lblfresh = $("#lblfresh"),
      datep1 = $("#datep1"),
      datep2 = $("#datep2"),
      v_periode = $("#v_periode"),
      btnplus = $("#btnplus"),
      pernah = $("#pernah");

     
  pernah.change(function () { // listen for change - not click
    // use the "raw" DOM property `checked`
      perusahaan.show();
      lblpershn.show();
      jns.show();
      posisi.show();
  	  periode.show();
  	  datep1.show();
  	  datep2.show();
  	  v_periode.show();
  	  gaji.show();
  	  d1.show();
  	  d2.show();
  	  d3.show();
  	  btnplus.show();
      lblfresh.hide();

      });
 

  var btnplus = $("#btnplus"),
      pengalaman2 = $("#pengalaman2");
     
  btnplus.click(function () { // listen for change - not click
    // use the "raw" DOM property `checked`
      pengalaman2.show();
  	  
  
      });

   var btnplus2 = $("#btnplus2"),
      pengalaman3 = $("#pengalaman3");
     
  btnplus2.click(function () { // listen for change - not click
    // use the "raw" DOM property `checked`
      pengalaman3.show();
  	  
  
      });

  var btnminus1 = $("#btnminus1"),
      pengalaman2 = $("#pengalaman2");
     
  btnminus1.click(function () { // listen for change - not click
    // use the "raw" DOM property `checked`
      pengalaman2.hide();
  	  
  
      });
  var btnminus2 = $("#btnminus2"),
      pengalaman3 = $("#pengalaman3");
     
  btnminus2.click(function () { // listen for change - not click
    // use the "raw" DOM property `checked`
      pengalaman3.hide();
      });

 
    });
	 </script>


<script>
function myFunction() {
    var x = document.getElementById("mySelect");
    var y = document.getElementById("lain").value;
    var option = document.createElement("option");
    option.text = y;
    x.add(option);
}
function myGaji() {
    var a = document.getElementById("gaji_hrp");
    var b = document.getElementById("lain2").value;
    var option = document.createElement("option");
    option.text = b;
    a.add(option);
}
function mySumber() {
    var c = document.getElementById("sumber");
    var d = document.getElementById("lain3").value;
    var option = document.createElement("option");
    option.text = d;
    c.add(option);
}
function myFungsi() {
    
    var fresh = document.getElementById("fresh").value;
    document.getElementById("nm_perusahaan").value = fresh;
}
function myMethod() {
    
    var pernah = document.getElementById("pernah").value;

    document.getElementById("nm_perusahaan").value = pernah;
}

function myPeriod() {
    
    var datep2 = document.getElementById("datep2").value;
    var datep1 = document.getElementById("datep1").value;
    
    var pl = " - ";
    document.getElementById("v_periode").value = datep1+pl+datep2;
}
function myPeriod2() {
    
    var datep2_2 = document.getElementById("datep2_2").value;
    var datep1_2 = document.getElementById("datep1_2").value;
    var p = " - ";
    document.getElementById("v_periode_2").value = datep1_2+p+datep2_2;
}
function myPeriod3() {
    
    var datep2_3 = document.getElementById("datep2_3").value;
    var datep1_3 = document.getElementById("datep1_3").value;
    var l = " - ";
    document.getElementById("v_periode_3").value = datep1_3+l+datep2_3;
}
function f_cabang() {
    
    var cb = document.getElementById("cabang").value;
    document.getElementById("cbn").value = cb;
}


</script>

</body>
</html>
