<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$nama_customer = $_POST['nama_customer'];
$keterangan = $_POST['keterangan'];


//simpan data ke database
$query = mysql_query("insert into customer (id_customer, customer, daerah) values('', '$nama_customer', '$keterangan')") or die(mysql_error());



if ($query) {
	echo "<script>
	alert('Data berhasil Disimpan');
	window.location='customer.php';
	</script>";
}else {
	echo "<script>
	alert('Data GAGAL Disimpan !');
	window.location='customer.php';
	</script>";
}
?>