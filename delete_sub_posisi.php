<?php 
include('config.php');

$id = $_GET['id_sub_posisi'];

$query = mysql_query("delete from sub_posisi where id_sub_posisi='$id'") or die(mysql_error());


if ($query) {
	echo "<script>
	alert('Data berhasil Dihapus');
	window.location='sub-posisi.php';
	</script>";
}else {
	echo "<script>
	alert('Data GAGAL Dihapus !');
	window.location='sub-posisi.php';
	</script>";
}
?>