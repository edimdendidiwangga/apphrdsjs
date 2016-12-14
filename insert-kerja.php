<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$id_kandidat = $_POST['id_kandidat'];
$perusahaan = $_POST['perusahaan'];
$jns_perusahaan = $_POST['jns_perusahaan'];
$posisi = $_POST['posisi'];
$periode = $_POST['periode'];
$gaji_terakhir = $_POST['gaji_terakhir'];

//simpan data ke database
$query = mysql_query("insert into kerja (id_kerja, id_kandidat, perusahaan, jns_perusahaan, posisi, periode, gaji_terakhir) values('', '$id_kandidat', '$perusahaan', '$jns_perusahaan', '$posisi', '$periode', '$gaji_terakhir')") or die(mysql_error());


if ($query) {
	echo "<script>
	alert('Data berhasil Disimpan');
	window.location='index.php';
	</script>";
}else {
	echo "<script>
	alert('Data GAGAL Disimpan !');
	window.location='index.php';
	</script>";
}
?>
