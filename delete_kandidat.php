<?php 
include('config.php');

$id = $_GET['id_kandidat'];

$query = mysql_query("delete from kandidat where id_kandidat='$id'") or die(mysql_error());


if ($query) {
	echo "<script>
	alert('Data berhasil Dihapus');
	window.location='index.php';
	</script>";
}else {
	echo "<script>
	alert('Data GAGAL Dihapus !');
	window.location='index.php';
	</script>";
}

?>