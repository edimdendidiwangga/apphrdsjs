<?php 
include('cek-login.php');
include('config.php');
?>
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan-diterima.xls");
?>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<table class="table table-bordered table-striped table-hover table-condensed table-responsive">
	
											<thead>
												<tr>
													<th>NIK</th>
													<th>TANGGAL</th>
													<th>NAMA</th>
													<th>TEMPAT LAHIR</th>
													<th class="hidden-xs">TANGGAL LAHIR</th>
													<th>USIA</th>
													<th>ALAMAT</th>
													<th>Kota</th>
													<th class="hidden-xs">NO TELEPON</th>
													<th>NO HP</th>
													<th>P/L</th>
													<th>HIJAB</th>
													<th>AGAMA</th>
													<th>STATUS PERKAWINAN</th>
													<th>TINGGI</th>
													<th>BERAT</th>
													<th>KEBANGSAAN</th>
													<th>NAMA PERUSAHAAN</th>
													<th>POSISI</th>
													<th>PERIODE</th>
													<th>PENDIDIKAN</th>
													<th>JURUSAN</th>
													<th>NAMA SEKOLAH</th>
													<th>TAHUN LULUS</th>
													<th>POSISI DILAMAR </th>
													<th>Status Pengiriman</th>
													<th>TANGGAL PENGIRIMAN</th>
													<th>STATUS</th>
													<th>TANGGAL EFEKTIF</th>
													<th>INTERVIEWER</th>
													<th>SUMBER</th>
													<th>KET</th>
												</tr>
											</thead>
											<tbody>
											<?php 
											$from = $_POST['from'];
											$to = $_POST['to'];
											$query_term = mysql_query("SELECT *

										        FROM kandidat where kandidat.status = 'Diterima' AND
										        (kandidat.date BETWEEN '$from' AND '$to') 
										        Order by kandidat.id_kandidat Desc");
											if ($query_term === FALSE) {
											    die(mysql_error());
											}
											
										
											while ($data = mysql_fetch_array($query_term)) {
											?>
												<tr class="gradeX">
													<td><?php echo $data['no_aplikasi']; ?></td>
													<td><?php echo $data['date']; ?></td>
													<td class="hidden-xs"><?php echo $data['nama']; ?></td>
													<td class="center"><?php echo $data['tempat_lahir']; ?></td>
													<td class="center hidden-xs"><?php echo $data['tgl_lahir']; ?></td>
													<td><?php echo $data['usia']; ?></td>
													<td><?php echo $data['alamat']; ?></td>
													<td><?php echo $data['kota']; ?></td>
													<td><?php echo $data['no_telp']; ?></td>
													<td><?php echo $data['no_hp']; ?></td>
													<td><?php echo $data['jenkel']; ?></td>
													<td><?php echo $data['hijab']; ?></td>
													<td><?php echo $data['agama']; ?></td>
													<td><?php echo $data['status_kawin']; ?></td>
													<td><?php echo $data['t_bdn']; ?></td>
													<td><?php echo $data['b_bdn']; ?></td>
													<td><?php echo $data['kebangsaan']; ?></td>
													<td><?php echo $data['perusahaan']; ?></td>
													<td><?php echo $data['posisi']; ?></td>
													<td><?php echo $data['periode']; ?></td>
													<td><?php echo $data['pendidikan']; ?></td>
													<td><?php echo $data['jurusan']; ?></td>
													<td><?php echo $data['nama_sekolah']; ?></td>
													<td><?php echo $data['thn_lulus']; ?></td>
													<td><?php echo $data['dilamar']; ?></td>
													<td><?php echo $data['status_pengiriman']; ?></td>
													<td><?php echo $data['tgl_pengiriman']; ?></td>
													<td><?php echo $data['status']; ?></td>
													<td><?php echo $data['tgl_efektif']; ?></td>
													<td><?php echo $data['interviewer']; ?></td>
													<td><?php echo $data['sumber']; ?></td>
													<td><?php echo $data['ket']; ?></td>
													<td>
												
												</tr>
												<?php 
												
												} 
												?>
												
											</tbody>
											
										</table>