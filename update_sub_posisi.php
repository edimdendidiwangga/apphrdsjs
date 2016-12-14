<?php
include('config.php');

//tangkap data dari form
$id = $_POST['id_sub_posisi'];
$id_posisi = $_POST['id_posisi'];
$nama_sub_posisi = $_POST['nama_sub_posisi'];


//update data di database sesuai user_id
$query = mysql_query("update sub_posisi set id_posisi='$id_posisi', nama_sub_posisi='$nama_sub_posisi' where id_sub_posisi='$id'") or die(mysql_error());


if ($query) {
	echo "<script>
		alert('DATA BERHASIL DISIMPAN');
		window.location='sub-posisi.php';
		</script>";
}else{
echo "<script>
		alert('GAGAL MENYIMPAN DATA');
		window.location='sub-posisi.php';
		</script>";
}
?>