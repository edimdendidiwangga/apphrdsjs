<?php
include('config.php');

//tangkap data dari form
$id = $_POST['id_kandidat'];
$tgl_efektif = $_POST['tgl_efektif'];
$status = "Diterima";


//update data di database sesuai user_id
$query = mysql_query("update kandidat set tgl_efektif='$tgl_efektif', status='$status' where id_kandidat='$id'") or die(mysql_error());

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