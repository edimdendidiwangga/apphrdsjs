<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$nama_tes = $_POST['nama_tes'];
$kunci = $_POST['kunci_jawaban'];


//simpan data ke database
$query = mysql_query("insert into kunci (id_kunci, nama_tes, kunci_jawaban) values('', '$nama_tes', '$kunci')") or die(mysql_error());


if ($query) {
	echo "<script>
		alert('DATA BERHASIL DITAMBAHKAN');
		window.location='kunci.php';
		</script>";
}else{
echo "<script>
		alert('GAGAL MENYIMPAN DATA');
		window.location='kunci.php';
		</script>";
}
?>