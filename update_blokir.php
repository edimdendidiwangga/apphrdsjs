<?php
include('config.php');

//tangkap data dari form
$id = $_GET['id_kandidat'];
$blokir = "0";


//update data di database sesuai user_id
$query = mysql_query("update kandidat set status='$blokir' where id_kandidat='$id'") or die(mysql_error());


if ($query) {
	echo "<script>
		alert('DATA BERHASIL DISIMPAN');
		window.location='index.php';
		</script>";
}else{
echo "<script>
		alert('GAGAL MENYIMPAN DATA');
		window.location='index.php';
		</script>";
}
?>