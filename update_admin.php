<?php
include('config.php');

//tangkap data dari form
$id = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];


//update data di database sesuai user_id
$query = mysql_query("update user set username='$username', password='$password' where user_id='$id'") or die(mysql_error());


if ($query) {
	echo "<script>
		alert('DATA BERHASIL DITAMBAHKAN');
		window.location='admin.php';
		</script>";
}else{
echo "<script>
		alert('GAGAL MENYIMPAN DATA');
		window.location='admin.php';
		</script>";
}
?>