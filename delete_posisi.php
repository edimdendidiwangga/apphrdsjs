<?php 
include('config.php');

$id = $_GET['id_posisi'];

$query = mysql_query("delete from posisi where id_posisi='$id'") or die(mysql_error());


if ($query) {
	echo "<script>
	alert('Data berhasil Dihapus');
	window.location='posisi.php';
	</script>";
}else {
	echo "<script>
	alert('Data GAGAL Dihapus !');
	window.location='posisi.php';
	</script>";
}
?>