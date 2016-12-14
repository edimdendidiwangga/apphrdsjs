<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$nama_posisi = $_POST['nama_posisi'];

//simpan data ke database
$query = mysql_query("insert into posisi (id_posisi, nama_posisi) values('', '$nama_posisi')") or die(mysql_error());


if ($query) {
	echo "<script>
	alert('Data berhasil Disimpan');
	window.location='posisi.php';
	</script>";
}else {
	echo "<script>
	alert('Data GAGAL Disimpan !');
	window.location='posisi.php';
	</script>";
}
?>