<?php
include('config.php');

//tangkap data dari form
$id = $_POST['id_posisi'];
$posisi = $_POST['posisi'];


//update data di database sesuai user_id
$query = mysql_query("update posisi set nama_posisi='$posisi' where id_posisi='$id'") or die(mysql_error());


if ($query) {
	echo "<script>
		alert('DATA BERHASIL DISIMPAN');
		window.location='posisi.php';
		</script>";
}else{
echo "<script>
		alert('GAGAL MENYIMPAN DATA');
		window.location='posisi.php';
		</script>";
}
?>