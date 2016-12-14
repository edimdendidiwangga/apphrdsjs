<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$nama_cabang = $_POST['nama_cabang'];
$id_customer = $_POST['id_customer'];


//simpan data ke database
$query = mysql_query("insert into sub_cabang (id_cabang, id_customer, nama_cabang) values('', '$id_customer', '$nama_cabang')") or die(mysql_error());
if ($query) {
	echo "<script>
	alert('Data berhasil Disimpan');
	window.location='cabang.php';
	</script>";
}else {
	echo "<script>
	alert('Data GAGAL Disimpan !');
	window.location='cabang.php';
	</script>";
}

?>