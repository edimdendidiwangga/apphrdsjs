<?php
include('config.php');

//tangkap data dari form
$id = $_GET['id_kandidat'];
$blokir = "Blokir";


//update data di database sesuai user_id
$query = mysql_query("update kandidat set status='$blokir' where id_kandidat='$id'") or die(mysql_error());

if ($query) {
	echo "<script>
	alert('Data berhasil Diblokir');
	window.location='index.php';
	</script>";
}else {
	echo "<script>
	alert('Data GAGAL Diblokir');
	window.location='index.php';
	</script>";
}
?>