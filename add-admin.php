<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];
//simpan data ke database
$query = mysql_query("insert into user (user_id, username, password) values('', '$username', '$password')") or die(mysql_error());

if ($query) {
	echo "<script>
	alert('Data berhasil Disimpan');
	window.location='admin.php';
	</script>";
}else {
	echo "<script>
	alert('Data GAGAL Disimpan !');
	window.location='admin.php';
	</script>";
}

?>