<?php
//panggil file config.php untuk menghubung ke server
error_reporting(0);
include "config.php";

//tangkap data dari form
$id_kandidat = $_POST['id_kandidat'];
$no_absensi = $_POST['no_absensi'];
$nama = mysql_real_escape_string(ucwords($_POST['nama']));
$tempat_lahir = ucfirst($_POST['tempat_lahir']);
$tgl_lahir = $_POST['tgl_lahir'];
$usia = $_POST['usia'];
$alamat = mysql_real_escape_string(ucfirst($_POST['alamat']));
$kota = $_POST['kota'];
$no_telp = $_POST['no_telp'];
$no_hp = $_POST['no_hp'];
$jenkel = $_POST['jenkel'];
$hijab = $_POST['hijab'];
$agama = ucfirst($_POST['agama']);
$status_kawin = $_POST['status_kawin'];
$t_bdn = $_POST['t_bdn'];
$b_bdn = $_POST['b_bdn'];
$kebangsaan = $_POST['kebangsaan'];
$perusahaan = $_POST['perusahaan'];
$jns_perusahaan = ucwords($_POST['jns_perusahaan']);
$posisi = $_POST['posisi'];
if (isset($_GET['sekarang'])) {
	$sekarang = 'Sekarang';
}else{
	$sekarang = '';
}
/*$posisi_0 = $_POST['posisi_0'];
$position = trim($posisi." ".$posisi_0);*/
$peri = $_POST['periode'];
$periode = $peri."".$sekarang;
$deskripsi1 = ucfirst($_POST['deskripsi1']);
$deskripsi2 = ucfirst($_POST['deskripsi2']);
$deskripsi3 = ucfirst($_POST['deskripsi3']);
$gaji_terakhir = $_POST['gaji_terakhir'];
$gaji_diinginkan = $_POST['gaji_diinginkan'];
$kualifikasi1 = rtrim($_POST['kualifikasi1']);
$kualifikasi2 = rtrim($_POST['kualifikasi2']);
$kualifikasi3 = rtrim($_POST['kualifikasi3']);
$kualifikasi = rtrim($kualifikasi1.", ".$kualifikasi2.", ".$kualifikasi3);
$nama_sekolah = mysql_real_escape_string(ucwords($_POST['nama_sekolah']));
$thn_lulus = $_POST['thn_lulus'];
$ipk = $_POST['ipk'];
$pendidikan = $_POST['pendidikan'];
$jurusan = ucwords($_POST['jurusan']);
$dilamar1 = ltrim($_POST['dilamar1']);
$dilamar2 = ltrim($_POST['dilamar2']);
$dilamar3 = ltrim($_POST['dilamar3']);

$sub_posisi1 = rtrim($_POST['sub_posisi1']);
$sub_posisi2 = rtrim($_POST['sub_posisi2']);
$sub_posisi3 = rtrim($_POST['sub_posisi3']);

$dilamar = trim($dilamar1.". ".$sub_posisi1.", ".$dilamar2.". ".$sub_posisi2.", ".$dilamar3.". ".$sub_posisi3.".");
/*$year = date("y");
$mon = date("m");
$no_aplikasi = strtoupper($year.$mon.$no_absensi);*/
$interviewer = $_POST['interviewer'];
$sumber = ucfirst($_POST['sumber']);
$status = ucfirst($_POST['status']);
$ket = ucfirst($_POST['keterangan']);
$date = date("Y-m-d");
//penilaian
$tgl_periksa = $_POST['tgl_periksa'];
$tgl_interview = $_POST['tgl_interview'];
$tgl_psikotes = $_POST['tgl_psikotes'];
$penampilan = $_POST['penampilan'];
$komunikasi = $_POST['komunikasi'];
$sikap = $_POST['sikap'];
$pemahaman = $_POST['pemahaman'];
$komitmen = $_POST['komitmen'];
$pengalaman = $_POST['pengalaman'];
$komputer = $_POST['komputer'];
$inggris = $_POST['inggris'];
$kl1 = ucfirst($_POST['kl1']);
$kl2 = ucfirst($_POST['kl2']);
$kl3 = ucfirst($_POST['kl3']);
$kl4 = ucfirst($_POST['kl4']);
$kl5 = ucfirst($_POST['kl5']);
$kr1 = ucfirst($_POST['kr1']);
$kr2 = ucfirst($_POST['kr2']);
$kr3 = ucfirst($_POST['kr3']);
$kr4 = ucfirst($_POST['kr4']);
$kr5 = ucfirst($_POST['kr5']);
//kelengkapan
$ijazah = $_POST['ijazah'];
$transkrip = $_POST['transkrip'];
$sertifikat = $_POST['sertifikat'];
$surat_ket_kerja = $_POST['surat_ket_kerja'];
$skkb = $_POST['skkb'];
$skck = $_POST['skck'];
$surat_ket_sehat = $_POST['surat_ket_sehat'];
$photo = $_POST['photo'];
$tes_kepribadian = $_POST['tes_kepribadian'];
$tes_iq = $_POST['tes_iq'];
$tes_eq = $_POST['tes_eq'];
$tes_disk = $_POST['tes_disk'];
$tes_tiu = $_POST['tes_tiu'];
$lain = $_POST['lain'];
//
$perusahaan_1 = $_POST['perusahaan_1'];
$jns_perusahaan_1 = ucwords($_POST['jns_perusahaan_1']);
$posisi_1 = $_POST['posisi_1'];
$periode_1 = $_POST['periode_1'];/*
$posisi_11 = $_POST['posisi_11'];*/
$deskripsi1_1 = ucfirst($_POST['deskripsi1_1']);
$deskripsi2_1 = ucfirst($_POST['deskripsi2_1']);
$deskripsi3_1 = ucfirst($_POST['deskripsi3_1']);
$gaji_terakhir_1 = $_POST['gaji_terakhir_1'];
//
$perusahaan_2 = $_POST['perusahaan_2'];
$jns_perusahaan_2 = $_POST['jns_perusahaan_2'];
$posisi_2 = $_POST['posisi_2'];
/*$posisi_22 = $_POST['posisi_22'];*/
$periode_2 = $_POST['periode_2'];
$deskripsi1_2 = ucfirst($_POST['deskripsi1_2']);
$deskripsi2_2 = ucfirst($_POST['deskripsi2_2']);
$deskripsi3_2 = ucfirst($_POST['deskripsi3_2']);
$gaji_terakhir_2 = $_POST['gaji_terakhir_2'];


//simpan data ke database
$query = mysql_query("insert into kandidat(id_kandidat, nama, tempat_lahir, tgl_lahir, usia, alamat, kota, no_telp, no_hp, jenkel, hijab, agama, status_kawin, t_bdn, b_bdn, kebangsaan, perusahaan, jns_perusahaan, posisi, periode, deskripsi1, deskripsi2, deskripsi3, gaji_terakhir, gaji_diinginkan, kualifikasi, pendidikan, jurusan, nama_sekolah, thn_lulus, ipk, dilamar, no_aplikasi, interviewer, sumber, ket, date, status_pengiriman, cabang, tgl_pengiriman, status, tgl_efektif) 
	values('', '$nama', '$tempat_lahir', '$tgl_lahir', '$usia', '$alamat', '$kota', '$no_telp', '$no_hp', '$jenkel', '$hijab', '$agama', '$status_kawin', '$t_bdn cm', '$b_bdn kg', '$kebangsaan', '$perusahaan', '$jns_perusahaan', '$posisi', '$periode', '$deskripsi1', '$deskripsi2', '$deskripsi3', '$gaji_terakhir', '$gaji_diinginkan', '$kualifikasi', '$pendidikan', '$jurusan', '$nama_sekolah', '$thn_lulus', '$ipk', '$dilamar', '$no_absensi', '$interviewer', '$sumber', '$ket', '$date', '$status_pengiriman', '$cabang', '$tgl_pengiriman', '$status', '$tgl_efektif')") or die(mysql_error());
	

//simpan data ke database 
$sql = "select max(id_kandidat) as last_id from kandidat limit 1";
 $hasil = mysql_query($sql);
 $row = mysql_fetch_array($hasil);
 $lastt = $row['last_id'];
if(!empty($perusahaan_1)){
$query = mysql_query("insert into kerja (id_kerja, id_kandidat, perusahaan, jns_perusahaan, posisi, periode, deskripsi1, deskripsi2, deskripsi3, gaji_terakhir) 
	values('', '$lastt', '$perusahaan_1', '$jns_perusahaan_1', '$posisi_1', '$periode_1', '$deskripsi1_1', '$deskripsi2_1', '$deskripsi3_1', '$gaji_terakhir_1')") or die(mysql_error());
}
//simpan data ke database 
$sql = "select max(id_kandidat) as last_id from kandidat limit 1";
 $hasil = mysql_query($sql);
 $row = mysql_fetch_array($hasil);
 $lastz = $row['last_id'];
if(!empty($perusahaan_2)){
$query = mysql_query("insert into kerja (id_kerja, id_kandidat, perusahaan, jns_perusahaan, posisi, periode, deskripsi1, deskripsi2, deskripsi3, gaji_terakhir) 
	values('', '$lastz', '$perusahaan_2', '$jns_perusahaan_2', '$posisi_2', '$periode_2', '$deskripsi1_2', '$deskripsi2_2', '$deskripsi3_2', '$gaji_terakhir_2')") or die(mysql_error());
}
//simpan data ke database
$sql = "select max(id_kandidat) as last_id from kandidat limit 1";
 $hasil = mysql_query($sql);
 $row = mysql_fetch_array($hasil);
 $lastd = $row['last_id'];

$query = mysql_query("insert into penilaian (id_nilai, id_kandidat,tgl_periksa,tgl_interview,tgl_psikotes,penampilan,komunikasi,sikap,pemahaman,komitmen,pengalaman,komputer,inggris,kl1,kl2,kl3,kl4,kl5,kr1,kr2,kr3,kr4,kr5) 
	values('', '$lastd', '$tgl_periksa', '$tgl_interview', '$tgl_psikotes', '$penampilan', '$komunikasi', '$sikap', '$pemahaman', '$komitmen', '$pengalaman', '$komputer', '$inggris', '$kl1', '$kl2', '$kl3', '$kl4', '$kl5', '$kr1', '$kr2', '$kr3', '$kr4', '$kr5')") or die(mysql_error());

$sql = "select max(id_kandidat) as last_id from kandidat limit 1";
 $hasil = mysql_query($sql);
 $row = mysql_fetch_array($hasil);
 $lastId2 = $row['last_id'];
 
$query = mysql_query("insert into kelengkapan (id_lengkap, id_kandidat, ijazah, transkrip, sertifikat, surat_ket_kerja, skkb, skck, surat_ket_sehat, photo, tes_kepribadian, tes_iq, tes_eq, tes_disk, tes_tiu, lain) 
	values('', '$lastId2', '$ijazah', '$transkrip', '$sertifikat', '$surat_ket_kerja', '$skkb', '$skck', '$surat_ket_sehat', '$photo', '$tes_kepribadian', '$tes_iq', '$tes_eq', '$tes_disk', '$tes_tiu', '$lain')") or die(mysql_error());

$sql = "select max(id_kandidat) as last_id from kandidat limit 1";
 $hasil = mysql_query($sql);
 $row = mysql_fetch_array($hasil);
 $lastIdd = $row['last_id'];
$query = mysql_query("insert into foto (id_foto, id_kandidat, gambar) 
	values('', '$lastIdd', 'user2.jpg')") or die(mysql_error());

$sql = "select max(id_kandidat) as last_id from kandidat limit 1";
$hasil = mysql_query($sql);
$row = mysql_fetch_array($hasil);
$lastIdf = $row['last_id'];

$time = time();
$name = $_FILES['gambar']['name'];
$error = $_FILES['gambar']['error'];
$size = $_FILES['gambar']['size'];
$asal = $_FILES['gambar']['tmp_name'];
$format = $_FILES['gambar']['type'];
$namafile = 'img/img-kandidat/'.$name;

if($error == 0){
	if($size < 1000000){
		
		if($format == 'image/jpg'||'image/jpeg'||'image/png'){
			if(file_exists($namafile)){
				$namafile = str_replace(".jpg", "", $namafile);
				$namafile = $namafile."_".$time.".jpg";
				$name = substr($namafile, 17);
				}
				//mengkompress imagejpeg(imagecreatefromjpeg($asal, $asal, 65)); 
			
				//mengupload
				move_uploaded_file($asal, $namafile);
				$query = mysql_query("update foto set gambar='$name' where foto.id_kandidat='$lastIdf'");
				echo "<script>
					alert('Foto Berhasil di Upload !');
				  </script>";
		}else{
			echo "<script>
					alert('Format/ekstensi file foto harus JPG !');
				  </script>";
		}
	}else{
			echo "<script>
					alert('Maaf ukuran file terlalu besar !');
				  </script>";
	}
}



if ($query) {
	echo "<script>
		alert('DATA BERHASIL DITAMBAHKAN');
		window.location='index.php';
		</script>";
}else{
echo "<script>
		alert('GAGAL MENYIMPAN DATA');
		window.location='index.php';
		</script>";
}

?>
