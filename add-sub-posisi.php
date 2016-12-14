<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$nama_sub_posisi = $_POST['nama_sub_posisi'];
$id_posisi = $_POST['id_posisi'];


//simpan data ke database
$query = mysql_query("insert into sub_posisi (id_sub_posisi, id_posisi, nama_sub_posisi) values('', '$id_posisi', '$nama_sub_posisi')") or die(mysql_error());


if ($query) {
	echo "<script>
	alert('Data berhasil Disimpan');
	window.location='sub-posisi.php';
	</script>";
}else {
	echo "<script>
	alert('Data GAGAL Disimpan !');
	window.location='sub-posisi.php';
	</script>";
}
?>