<?php
include('config.php');

//tangkap data dari form
$id = $_POST['id_biji'];
$nilai = $_POST['nilai'];


//update data di database sesuai user_id
$query = mysql_query("update nilai set nilai='$nilai' where id_biji='$id'") or die(mysql_error());


if ($query) {
	echo "<script>
		alert('DATA BERHASIL DISIMPAN');
		window.location='jawaban.php';
		</script>";
}else{
echo "<script>
		alert('GAGAL MENYIMPAN DATA');
		window.location='jawaban.php';
		</script>";
}
?>