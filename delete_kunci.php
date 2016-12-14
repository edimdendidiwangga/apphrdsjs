<?php 
include('config.php');

$id = $_GET['id_kunci'];

$query = mysql_query("delete from kunci where id_kunci='$id'") or die(mysql_error());

if ($query) {
	echo "<script>
	alert('Data berhasil Dihapus');
	window.location='kunci.php';
	</script>";
}else {
	echo "<script>
	alert('Data GAGAL Dihapus !');
	window.location='kunci.php';
	</script>";
}
?>