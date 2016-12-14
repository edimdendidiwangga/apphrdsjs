<?php 
include('config.php');
include('cek-login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Cloud Admin | Wizards & Validations</title>
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
</head>
<body>
	<!-- HEADER -->
	<?php include'header.php';?>
	<!--/HEADER -->
	
	<!-- PAGE -->
	<section id="page">
				<?php include 'menu.php';?>
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
											<a href="#">Form Edit Kandidat</a>
										</li>
										
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Form Edit Data Kandidat</h3>
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
											<a href="javascript:;" class="collapse">
												<i class="fa fa-chevron-up"></i>
											</a>
											<a href="javascript:;" class="remove">
												<i class="fa fa-times"></i>
											</a>
										</div>
									</div>
									<div class="box-body form">
										<form id="wizForm" name="update_data" action="update-kandidat.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
										
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
													<span class="step-name"><i class="fa fa-check"></i> Pengiriman </span>   
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
													<?php 
														$id = $_GET['id_kandidat'];

														$query = mysql_query("select * from kandidat where id_kandidat='$id'") or die(mysql_error());

														$query = mysql_query("
										        SELECT * 

										        FROM kandidat inner join penilaian on kandidat.id_kandidat = penilaian.id_kandidat 

										        inner join kelengkapan on kandidat.id_kandidat =  kelengkapan.id_kandidat 
										        inner join foto on kandidat.id_kandidat=foto.id_kandidat
										        where kandidat.id_kandidat='$id'") or die(mysql_error());

														$data = mysql_fetch_array($query);
														?>

													<div class="form-group">
													   <label class="control-label col-md-3">Nomor</label>
													   <div class="col-md-4">

														<input type="hidden" name="id_kandidat" value="<?php echo $id; ?>" />
														  <input type="text" class="form-control" name="nik" placeholder="Isikan NIK" value="<?php echo $data['nik']; ?>"/>
														  <span class="error-span"></span>
													   </div>
													</div>
													<div class="form-group">
													   <label class="control-label col-md-3">Nama</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="nama" placeholder="Isikan nama lengkap" value="<?php echo $data['nama']; ?>" required>
														  <span class="error-span"></span>
													   </div>
													</div>
													
													<div class="form-group">
													   <label class="control-label col-md-3">Tempat Lahir</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="tempat_lahir" placeholder="Isikan Tempat Lahir" value="<?php echo $data['tempat_lahir']; ?>" required/>
														  <span class="error-span"></span>
													   </div>
													</div>
													
													<div class="form-group">
													   <label class="control-label col-md-3">Tanggal Lahir</label>
													   <div class="col-md-4">
														<input  class="form-control datepicker" name="tgl_lahir" type="text" placeholder="dd/mm/yyyy" value="<?php echo $data['tgl_lahir']; ?>" required>
														</div>
													</div>
													<div class="form-group">
													   <label class="control-label col-md-3">Gender</label>
													   <div class="col-md-4">
															 <label class="radio">
																<input type="radio" name="jenkel" id="jenkelm" value="L" data-title="Male" class="uniform" <?php if($data['jenkel']=="L"){echo "checked";}elseif ($data['jenkel']!="L"){echo "id";}?>/>
															 Pria
															 </label>
															 <label class="radio">
																<input type="radio" name="jenkel" id="jenkel" value="P" data-title="Female" class="uniform" <?php if($data['jenkel']=="P"){echo "checked";}elseif ($data['jenkel']!="P"){echo "id";}?>/>
															 Wanita
															 </label>	
															 <span class="help-block" id="sp" style="display: none">Jika Wanita, Pilih Berhijab / Tidak :</span>
															 <label class="radio" id="lb" style="display: none">
															 <input type="radio" name="hijab" id="hijab" value="Hijab" data-title=" Berhijab" style="display: none" <?php if($data['hijab']=="Hijab"){echo "checked";}elseif ($data['hijab']!="Hijab"){echo "id";}?>/>		
															 Hijab
															 </label>	
															 <label class="radio" id="lbb" style="display: none">
																<input type="radio" name="hijab" id="nohijab" value="Tidak" data-title="Tidak Berhijab" style="display: none"/ <?php if($data['hijab']=="Tidak"){echo "checked";}elseif ($data['hijab']!="Tidak"){echo "id";}?>>
															 Tidak Berhijab
															 </label>	
													   </div>
													
													</div>
													<div class="form-group">
													   <label class="control-label col-md-3">Alamat</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="alamat" placeholder="Isikan Alamat" value="<?php echo $data['alamat']; ?>" required/>
														  <span class="error-span"></span>
													   </div>
													</div>
													
													<div class="form-group">
													   <label class="control-label col-md-3">No. Telp</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="no_telp" placeholder="Isikan Nomor Telephone" value="<?php echo $data['no_telp']; ?>"/>
														  <span class="error-span"></span>
													   </div>
													</div>
												
												 <div class="form-group">
													   <label class="control-label col-md-3">No. HP</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="no_hp" placeholder="Isikan Nomor Handphone" value="<?php echo $data['no_hp']; ?>" required/>
														  <span class="error-span"></span>
													   </div>
												 </div>
												 <div class="form-group">
													   <label class="control-label col-md-3">Agama</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="agama" placeholder="Isikan Agama" value="<?php echo $data['agama']; ?>" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Tinggi Badan</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="t_bdn" placeholder="Isikan Tinggi Badan" value="<?php echo $data['t_bdn']; ?>"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Berat Badan</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="b_bdn" placeholder="Isikan Berat Badan" value="<?php echo $data['b_bdn']; ?>"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Status Perkawinan<span class="required">*</span></label>
													   <div class="col-md-4">
														  <select name="status_kawin" class="form-control" required>
															 <option value="<?php echo $data['status_kawin']; ?>"><?php echo $data['status_kawin']; ?></option>
															 <option value="lajang">Belum Menikah</option>
															 <option value="menikah">Menikah</option>
															 <option value="duda">Duda</option>
															 <option value="Janda">Janda</option>
															</select>
														  <span class="error-span"></span>
													   </div>
												</div>

												<div class="form-group">
													  <label class="control-label col-md-3">Kebangsaan</label>
													   <div class="col-md-4">
														  <select name="kebangsaan" id="country_select" class="col-md-12 full-width-fix"  required>
															 <option value="<?php echo $data['kebangsaan']; ?>"><?php echo $data['kebangsaan']; ?></option>
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
															 <option value="ID">Indonesia</option>
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
													   <label class="control-label col-md-3">Upload Foto Kandidat<span class="required">*</span></label>
													   <div class="col-md-4"><?php echo $data['gambar']; ?>
													   <input class="form-control" type="file" >
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
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
													<a href="javascript:;" class="remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
											<div class="box-body big">
												 <div class="form-group">
													   <label class="control-label col-md-4">Pendidikan<span class="required">*</span></label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" name="pendidikan" placeholder="Isikan Jenjang Pendidikan" value="<?php echo $data['pendidikan']; ?>" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Nama Sekolah<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="nama_sekolah" placeholder="Nama Sekolah" value="<?php echo $data['nama_sekolah']; ?>" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Jurusan<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="jurusan" placeholder="Isikan Jurusan" value="<?php echo $data['jurusan']; ?>" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Tahun Lulus<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="thn_lulus" placeholder="Isikan Tahun Lulus" value="<?php echo $data['thn_lulus']; ?>" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">IPK<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="ipk" placeholder="Isikan IPK" value="<?php echo $data['ipk']; ?>" required/>
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
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
													<a href="javascript:;" class="remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
											<div class="box-body big">
												<div class="form-group">
													   <label class="control-label col-md-4">Nama Perusahaan<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="perusahaan" placeholder="Isikan Nama Perusahaan" value="<?php echo $data['perusahaan']; ?>" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Jenis Perusahaan</label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" name="jns_perusahaan" placeholder="Isikan Jenis Perusahaan" value="<?php echo $data['jns_perusahaan']; ?>" />
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Posisi<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="posisi" placeholder="Isikan Posisi " value="<?php echo $data['posisi']; ?>" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Periode<span class="required">*</span></label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" name="periode" placeholder="Isikan Lama Periode Bekerja" value="<?php echo $data['periode']; ?>"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Gaji Terakhir</label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" name="gaji_terakhir" placeholder="Isikan Lama Periode Bekerja" value="<?php echo $data['gaji_terakhir']; ?>"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												
											</div>
										</div>
										</div>
											<?php 
														$id = $_GET['id_kandidat'];

														$q = mysql_query("select * from kerja where id_kandidat='$id'") or die(mysql_error());

														$d = mysql_fetch_array($q);
														?>
											<div class="col-md-6">
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
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
													<a href="javascript:;" class="remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
											<div class="box-body big">
												<div class="form-group">
													   <label class="control-label col-md-4">Nama Perusahaan<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="perusahaan" placeholder="Isikan Nama Perusahaan" value="<?php echo $d['perusahaan']; ?>"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Jenis Perusahaan</label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" name="jns_perusahaan" placeholder="Isikan Jenis Perusahaan" value="<?php echo $d['jns_perusahaan']; ?>" />
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Posisi<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="posisi" placeholder="Isikan Posisi " value="<?php echo $d['posisi']; ?>"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Periode<span class="required">*</span></label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" name="periode" placeholder="Isikan Lama Periode Bekerja" value="<?php echo $d['periode']; ?>"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Gaji Terakhir</label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" name="gaji_terakhir" placeholder="Isikan Lama Periode Bekerja" value="<?php echo $d['gaji_terakhir']; ?>"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												
											</div>
										</div>
										</div>

										<div class="col-md-6">
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
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
													<a href="javascript:;" class="remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
											<div class="box-body big">
												<div class="form-group">
													   <label class="control-label col-md-4">Nama Perusahaan<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="perusahaan" placeholder="Isikan Nama Perusahaan" value="<?php echo $d['perusahaan']; ?>"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Jenis Perusahaan</label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" name="jns_perusahaan" placeholder="Isikan Jenis Perusahaan" value="<?php echo $d['jns_perusahaan']; ?>" />
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Posisi<span class="required">*</span></label>
													   <div class="col-md-8">
														  <input type="text" class="form-control" name="posisi" placeholder="Isikan Posisi " value="<?php echo $d['posisi']; ?>"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Periode<span class="required">*</span></label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" name="periode" placeholder="Isikan Lama Periode Bekerja" value="<?php echo $d['periode']; ?>"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-4">Gaji Terakhir</label>
													   <div class="col-md-6">
														  <input type="text" class="form-control" name="gaji_terakhir" placeholder="Isikan Lama Periode Bekerja" value="<?php echo $d['gaji_terakhir']; ?>"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												
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
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
													<a href="javascript:;" class="remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
											<div class="box-body">
												
												  <div class="form-group">
													   <label class="control-label col-md-3">Gaji yang Diharapkan</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="gaji_diinginkan" placeholder="Isikan Gaji yang Diharapkan" value="<?php echo $data['gaji_diinginkan']; ?>"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Kualifikasi</label>
													   <div class="col-md-6">
													   
														  <textarea name="kualifikasi" value="<?php echo $data['kualifikasi']; ?>" data-provide="markdown" rows="5" cols="60"><?php echo $data['kualifikasi']; ?></textarea>
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
											<a href="javascript:;" class="collapse">
												<i class="fa fa-chevron-up"></i>
											</a>
											<a href="javascript:;" class="remove">
												<i class="fa fa-times"></i>
											</a>
										</div>
									</div>
									<div class="box-body">
										
										  <div class="form-group">
											
											 <div class="col-md-6"> 
											 <input type="hidden" name="id_lengkap" value="<?php echo $data['id_lengkap']; ?>">
												 <label class="checkbox"> <input name="ijazah" type="checkbox" class="uniform" value="1" <?php if($data['ijazah']==""){echo "id";}elseif($data['ijazah']=="1"){echo "checked";}?>> Ijazah D3</label> 
												 <label class="checkbox"> <input name="sertifikat" type="checkbox" class="uniform" value="1" <?php if($data['sertifikat']==""){echo "id";}elseif($data['sertifikat']=="1"){echo "checked";};?>> Sertifikat Lainya</label> 
												 <label class="checkbox"> <input name="surat_ket_kerja" type="checkbox" class="uniform" value="1" <?php if($data['surat_ket_kerja']==""){echo "id";}elseif($data['surat_ket_kerja']=="1"){echo "checked";};?>> Surat Keterangan Kerja</label> 
												  <label class="checkbox"> <input name="skkb" type="checkbox" class="uniform" value="1" <?php if($data['skkb']==""){echo "id";}elseif($data['skkb']=="1"){echo "checked";};?>> SKKB</label> 
												 <label class="checkbox"> <input name="surat_ket_sehat" type="checkbox" class="uniform" value="1" <?php if($data['surat_ket_sehat']==""){echo "id";}elseif($data['surat_ket_sehat']=="1"){echo "checked";};?>> Surat Keterangan Sehat</label> 
												 </div>
												 <div class="col-md-6"> 
												 <label class="checkbox"> <input name="photo" type="checkbox" class="uniform" value="1" <?php if($data['photo']==""){echo "id";}elseif($data['photo']=="1"){echo "checked";};?>> Photo</label> 
												  <label class="checkbox"> <input name="tes_kepribadian" type="checkbox" class="uniform" value="1" <?php if($data['tes_kepribadian']==""){echo "id";}elseif($data['tes_kepribadian']=="1"){echo "checked";};?>> Test Kepribadian</label> 
												 <label class="checkbox"> <input name="tes_iq" type="checkbox" class="uniform" value="1" <?php if($data['tes_iq']==""){echo "id";}elseif($data['tes_iq']=="1"){echo "checked";};?>> Test IQ</label> 
												 <label class="checkbox"> <input name="tes_eq" type="checkbox" class="uniform" value="1" <?php if($data['tes_eq']==""){echo "id";}elseif($data['tes_eq']=="1"){echo "checked";};?>> Tes EQ</label> 
												  <label class="checkbox"> <input name="lain" type="checkbox" class="uniform" value="1" <?php if($data['lain']==""){echo "id";}elseif($data['lain']=="1"){echo "checked";};?>> Lainnya</label> 
												
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
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
													<a href="javascript:;" class="remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
											<div class="box-body big">
												<div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Penampilan</label> 
											 <div class="col-md-6">
												<select class="form-control" name="penampilan" >
												   <option value="<?php echo $data['penampilan']; ?>"><?php echo $data['penampilan']; ?></option>
												   <option value="5">Sangat Baik</option>
												   <option value="4">Baik</option>
												   <option value="3">Cukup</option>
												   <option value="2">Kurang</option>
												   <option value="1">Sangat Kurang</option>
												</select>												
											 </div>
										  </div>
										    <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Keterampilan dan Komunikasi</label> 
											 <div class="col-md-6">
												<select class="form-control" name="komunikasi">
												   <option value="<?php echo $data['komunikasi']; ?>"><?php echo $data['komunikasi']; ?></option>
												   <option value="5">Sangat Baik</option>
												   <option value="4">Baik</option>
												   <option value="3">Cukup</option>
												   <option value="2">Kurang</option>
												   <option value="1">Sangat Kurang</option>
												</select>												
											 </div>
										  </div>
										  <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Sikap dan Motivasi</label> 
											 <div class="col-md-6">
												<select class="form-control" name="sikap">
												   <option value="<?php echo $data['sikap']; ?>"><?php echo $data['sikap']; ?></option>
												   <option value="5">Sangat Baik</option>
												   <option value="4">Baik</option>
												   <option value="3">Cukup</option>
												   <option value="2">Kurang</option>
												   <option value="1">Sangat Kurang</option>
												</select>												
											 </div>
										  </div>
										  <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Pemahaman Terhadap Pekerjaan</label> 
											 <div class="col-md-6">
												<select class="form-control" name="pemahaman">
												   <option value="<?php echo $data['pemahaman']; ?>"><?php echo $data['pemahaman']; ?></option>
												   <option value="5">Sangat Baik</option>
												   <option value="4">Baik</option>
												   <option value="3">Cukup</option>
												   <option value="2">Kurang</option>
												   <option value="1">Sangat Kurang</option>
												</select>												
											 </div>
										  </div>
										  <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Komitmen dalam Bekerja</label> 
											 <div class="col-md-6">
												<select class="form-control" name="komitmen" >
												  <option value="<?php echo $data['komitmen']; ?>"><?php echo $data['komitmen']; ?></option>
												   <option value="5">Sangat Baik</option>
												   <option value="4">Baik</option>
												   <option value="3">Cukup</option>
												   <option value="2">Kurang</option>
												   <option value="1">Sangat Kurang</option>
												</select>												
											 </div>
										  </div>
										  
										  <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Pengalaman yang sesuai Pekerjaan</label> 
											 <div class="col-md-6">
												<select class="form-control" name="pengalaman" >
												   <option value="<?php echo $data['pengalaman']; ?>"><?php echo $data['pengalaman']; ?></option>
												   <option value="5">Sangat Baik</option>
												   <option value="4">Baik</option>
												   <option value="3">Cukup</option>
												   <option value="2">Kurang</option>
												   <option value="1">Sangat Kurang</option>
												</select>												
											 </div>
										  </div>
										  <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Kemampuan Menggunakan Komputer</label> 
											 <div class="col-md-6">
												<select class="form-control" name="komputer" >
												   <option value="<?php echo $data['komputer']; ?>"><?php echo $data['komputer']; ?></option>
												   <option value="Baik">Baik</option>
												   <option value="Cukup Baik">Cukup Baik</option>
												   <option value="Kurang">Kurang</option>
												   
												</select>												
											 </div>
										  </div>
										   <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Kemampuan Bahasa Inggris</label> 
											 <div class="col-md-6">
												<select class="form-control" name="inggris">
												   <option value="<?php echo $data['inggris']; ?>"><?php echo $data['inggris']; ?></option>
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
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
													<a href="javascript:;" class="remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
											<div class="box-body big">
												<div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Tanggal Pemeriksaan CV</label> 
											 <div class="col-md-6">
												<input type="text" class="form-control" name="tgl_periksa" value="<?php echo $data['tgl_periksa']; ?>" />	
												<input type="hidden" name="id_nilai" value="<?php echo $data['id_nilai']; ?>">										
											 </div>
										  </div>
										   <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Tanggal Interview</label> 
											 <div class="col-md-6">
												<input type="text" class="form-control" name="tgl_interview" value="<?php echo $data['tgl_interview']; ?>"/>											
											 </div>
										  </div>
										   <div class="form-group">
											 <label class="col-md-6 control-label" for="e2">Tanggal Psikotes</label> 
											 <div class="col-md-6">
												<input type="text" class="form-control" name="tgl_psikotes" value="<?php echo $data['tgl_psikotes']; ?>"/>											
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
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
													<a href="javascript:;" class="remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
											<div class="box-body">
												
												  <div class="form-group">
											<label class="col-md-4 control-label" for="e2">Kelebihan</label>
												<div class="col-md-6">
												<textarea name="kelebihan" data-provide="markdown" rows="5" cols="60" ><?php echo $data['kelebihan']; ?></textarea>
												<span class="error-span"></span>
												</div>
										  </div>
										  <div class="form-group">
											<label class="col-md-4 control-label" for="e2">Kekurangan</label>
												<div class="col-md-6">
												<textarea name="kekurangan" data-provide="markdown" rows="5" cols="60"><?php echo $data['kekurangan']; ?></textarea>
												<span class="error-span"></span>
												</div>
										  </div>
											</div>
										</div>

												</div>
												</div>
												 <div class="tab-pane" id="pengiriman">
												 <div class="form-group">
													   <label class="control-label col-md-3">Status Pengiriman Customer<span class="required">*</span></label>
													   <div class="col-md-4">
														 <textarea name="status_pengiriman" data-provide="markdown" rows="3" cols="60"><?php echo $data['status_pengiriman']; ?></textarea>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Posisi Dilamar 1<span class="required">*</span></label>
													   <div class="col-md-4">
														  <input value="<?php echo $data['dilamar1']; ?>" type="text" class="form-control" name="dilamar1" placeholder="Isikan Posisi yang dilamar 1" required/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Posisi Dilamar 2</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="dilamar2" placeholder="Isikan Posisi yang dilamar 2" value="<?php echo $data['dilamar2']; ?>"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Posisi Dilamar 3</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="dilamar3" value="<?php echo $data['dilamar3']; ?>" placeholder="Isikan Posisi yang dilamar 3"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">No. Aplikasi</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="no_aplikasi" value="<?php echo $data['no_aplikasi']; ?>" placeholder="SJS/V/2016"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Tanggal Pengiriman</label>
													   <div class="col-md-4">
														<input value="<?php echo $data['tgl_pengiriman']; ?>" class="form-control datepicker" name="tgl_pengiriman" type="text" placeholder="dd/mm/yyyy">
														</div>
													   
													</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Status</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="status"  value="<?php echo $data['status']; ?>" placeholder="Isikan Status Diterima/Belum di user">
														 
													   </div>
													</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Tanggal Efektif</label>
													   <div class="col-md-4">
														<input  class="form-control datepicker" name="tgl_efektif" value="<?php echo $data['tgl_efektif']; ?>" type="text" placeholder="dd/mm/yyyy">
														</div>
													</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Interviewer</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="interviewer" value="<?php echo $data['interviewer']; ?>" placeholder="Isikan Nama Interviewer"/>
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Sumber</label>
													   <div class="col-md-4">
														  <input type="text" class="form-control" name="sumber" value="<?php echo $data['sumber']; ?>" placeholder="Isikan Sumber Info Lowongan" required />
														  <span class="error-span"></span>
													   </div>
												</div>
												<div class="form-group">
													   <label class="control-label col-md-3">Keterangan</label>
													   <div class="col-md-4">
													   <textarea name="ket" data-provide="markdown" rows="5" cols="60" ><?php echo $data['ket']; ?></textarea>
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
								<i class="fa fa-chevron-up"></i> Top
							</span>
						</div>
					</div><!-- /CONTENT-->
				</div>
			</div>
		</div>
	</section>


	<div class="modal fade" id="table-kerja" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content modal-table">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title"></h4>
								</div>
								<div class="modal-body">
								 <div class="box border primary">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>Tambah Data Pengalaman Kerja</h4>
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
												
												<form action="insert-kerja.php" method="post" class="form-horizontal" role="form">
												 <input type="hidden" name="id_kandidat" value="<?php echo $id; ?>" />
												  <div class="form-group">
													<label class="col-sm-4 control-label">Nama Perusahaan</label>
													<div class="col-sm-8">
													  <input name="perusahaan" type="text" class="form-control" placeholder="Text input">
													</div>
													</div>
													<div class="form-group">
													<label class="col-sm-4 control-label">Jenis Perusahaan</label>
													<div class="col-sm-8">
													  <input name="jns_perusahaan" type="text" class="form-control" placeholder="Text input">
													</div>
													</div>
													<div class="form-group">
													<label class="col-sm-4 control-label">Posisi</label>
													<div class="col-sm-8">
													  <input name="posisi" type="text" class="form-control" placeholder="Text input">
													</div>
													</div>
													<div class="form-group">
													<label class="col-sm-4 control-label">Periode</label>
													<div class="col-sm-8">
													  <input name="periode" type="text" class="form-control" placeholder="Text input">
													</div>
												  </div>
												 <div class="form-group">
													<label class="col-sm-4 control-label">Gaji Terakhir</label>
													<div class="col-sm-8">
													  <input name="gaji_terakhir" type="text" class="form-control" placeholder="Text input">
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
    });
	 </script>


</body>
</html>
