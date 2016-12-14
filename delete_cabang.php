<?php 
include('config.php');

$id = $_GET['id_cabang'];

$query = mysql_query("delete from sub_cabang where id_cabang='$id'") or die(mysql_error());


if ($query) {
	echo "<script>
	alert('Data berhasil Dihapus');
	window.location='cabang.php';
	</script>";
}else {
	echo "<script>
	alert('Data GAGAL Dihapus !');
	window.location='cabang.php';
	</script>";
}
?>