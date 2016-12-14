<?php 
include('config.php');

$id = $_GET['id_customer'];

$query = mysql_query("delete from customer where id_customer='$id'") or die(mysql_error());

if ($query) {
	echo "<script>
	alert('Data berhasil Dihapus');
	window.location='customer.php';
	</script>";
}else {
	echo "<script>
	alert('Data GAGAL Dihapus !');
	window.location='customer.php';
	</script>";
}

?>