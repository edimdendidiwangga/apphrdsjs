<?php 
include('config.php');

$id = $_GET['id_biji'];

$query = mysql_query("delete from nilai where id_biji='$id'") or die(mysql_error());


if ($query) {
	echo "<script>
	alert('Data berhasil Dihapus');
	window.location='jawaban.php';
	</script>";
}else {
	echo "<script>
	alert('Data GAGAL Dihapus !');
	window.location='jawaban.php';
	</script>";
}
?>