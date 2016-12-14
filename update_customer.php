<?php
include('config.php');

//tangkap data dari form
$id = $_POST['id_kandidat'];
$customer = $_POST['customer'];
$cabang = $_POST['cabang'];
$tgl_pengiriman = $_POST['tgl_pengiriman'];
$position = $_POST['position'];
$status = "Menunggu";
//tmp
$nama_customer = $_POST['nama_customer'];
$cabang_t = $_POST['cabang_t'];
$position_t = $_POST['position_t'];
$tgl_pengiriman_t = $_POST['tgl_pengiriman_t'];




//update data di database sesuai user_id
if(!empty($tgl_pengiriman_t)){
$query = mysql_query("insert into tmp_customer (id_tmp_customer, id_kandidat, nama_customer, cabang, position, tgl_pengiriman)values('', '$id', '$nama_customer', '$cabang_t', '$position_t', '$tgl_pengiriman_t')") or die(mysql_error());
}
//update data di database sesuai user_id
$query = mysql_query("update kandidat set status_pengiriman='$customer', cabang='$cabang', position='$position', status='$status', tgl_pengiriman='$tgl_pengiriman' where id_kandidat='$id'") or die(mysql_error());

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