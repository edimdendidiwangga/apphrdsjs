<?php 
include('config.php');

$id = $_GET['user_id'];

$query = mysql_query("delete from user where user_id='$id'") or die(mysql_error());


if ($query) {
	echo "<script>
	alert('Data berhasil Dihapus');
	window.location='admin.php';
	</script>";
}else {
	echo "<script>
	alert('Data GAGAL Dihapus !');
	window.location='admin.php';
	</script>";
}
?>