<?php error_reporting(0);
//panggil file config.php untuk menghubung ke server

include "config.php";

//tangkap data dari form
$id = $_POST['id_kandidat'];
$nama = ucwords($_POST['nama']);
$tempat_lahir = ucfirst($_POST['tempat_lahir']);
$tgl_lahir = $_POST['tgl_lahir'];
$usia = $_POST['usia'];
$alamat = ucfirst($_POST['alamat']);
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
$periode = $_POST['periode'];
$deskripsi1 = ucfirst($_POST['deskripsi1']);
$deskripsi2 = ucfirst($_POST['deskripsi2']);
$deskripsi3 = ucfirst($_POST['deskripsi3']);
$gaji_terakhir = $_POST['gaji_terakhir'];
$gaji_diinginkan = $_POST['gaji_diinginkan'];
$kualifikasi1 = rtrim($_POST['kualifikasi1']);
$kualifikasi2 = rtrim($_POST['kualifikasi2']);
$kualifikasi3 = rtrim($_POST['kualifikasi3']);
$kualifikasi = rtrim($kualifikasi1.", ".$kualifikasi2.", ".$kualifikasi3);
$nama_sekolah = ucwords($_POST['nama_sekolah']);
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
$no_aplikasi = $_POST['no_aplikasi'];
$interviewer = $_POST['interviewer'];
$sumber = ucfirst($_POST['sumber']);
$status = ucfirst($_POST['status']);
$ket = ucfirst($_POST['keterangan']);
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
$id_kerja_1 = $_POST['id_kerja_1'];
$perusahaan_1 = $_POST['perusahaan_1'];
$jns_perusahaan_1 = ucwords($_POST['jns_perusahaan_1']);
$posisi_1 = $_POST['posisi_1'];
$periode_1 = $_POST['periode_1'];
$deskripsi1_1 = ucfirst($_POST['deskripsi1_1']);
$deskripsi2_1 = ucfirst($_POST['deskripsi2_1']);
$deskripsi3_1 = ucfirst($_POST['deskripsi3_1']);
$gaji_terakhir_1 = $_POST['gaji_terakhir_1'];
//
$id_kerja_2 = $_POST['id_kerja_2'];
$perusahaan_2 = $_POST['perusahaan_2'];
$jns_perusahaan_2 = $_POST['jns_perusahaan_2'];
$posisi_2 = $_POST['posisi_2'];
$periode_2 = $_POST['periode_2'];
$deskripsi1_2 = ucfirst($_POST['deskripsi1_2']);
$deskripsi2_2 = ucfirst($_POST['deskripsi2_2']);
$deskripsi3_2 = ucfirst($_POST['deskripsi3_2']);
$gaji_terakhir_2 = $_POST['gaji_terakhir_2'];
//
//
$perusahaan_a = $_POST['perusahaan_a'];
$jns_perusahaan_a = ucwords($_POST['jns_perusahaan_a']);
$posisi_a = $_POST['posisi_a'];
$periode_a = $_POST['periode_a'];
$posisi_1a = $_POST['posisi_1a'];
$deskripsi1_a = ucfirst($_POST['deskripsi1_a']);
$deskripsi2_a = ucfirst($_POST['deskripsi2_a']);
$deskripsi3_a = ucfirst($_POST['deskripsi3_a']);
$gaji_terakhir_a = $_POST['gaji_terakhir_a'];
//
$perusahaan_b = $_POST['perusahaan_b'];
$jns_perusahaan_b = $_POST['jns_perusahaan_b'];
$posisi_b = $_POST['posisi_b'];
$posisi_2b = $_POST['posisi_2b'];
$periode_b = $_POST['periode_b'];
$deskripsi1_b = ucfirst($_POST['deskripsi1_b']);
$deskripsi2_b = ucfirst($_POST['deskripsi2_b']);
$deskripsi3_b = ucfirst($_POST['deskripsi3_b']);
$gaji_terakhir_b = $_POST['gaji_terakhir_b'];

//simpan data ke database
$query = mysql_query("update kandidat set nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', usia='$usia', alamat='$alamat', kota='$kota', no_telp='$no_telp', no_hp='$no_hp', jenkel='$jenkel', hijab='$hijab', agama='$agama', status_kawin='$status_kawin', t_bdn='$t_bdn', b_bdn='$b_bdn', kebangsaan='$kebangsaan', perusahaan='$perusahaan', jns_perusahaan='$jns_perusahaan', posisi='$posisi', periode='$periode', deskripsi1='$deskripsi1', deskripsi2='$deskripsi2', deskripsi3='$deskripsi3', gaji_terakhir='$gaji_terakhir', gaji_diinginkan='$gaji_diinginkan', kualifikasi='$kualifikasi', pendidikan='$pendidikan', jurusan='$jurusan', nama_sekolah='$nama_sekolah', thn_lulus='$thn_lulus', ipk='$ipk', dilamar='$dilamar', status='$status', no_aplikasi='$no_aplikasi', interviewer='$interviewer', sumber='$sumber', ket='$ket'
	where kandidat.id_kandidat='$id'") or die(mysql_error());

$query = mysql_query("update penilaian set tgl_periksa='$tgl_periksa', tgl_interview='$tgl_interview', tgl_psikotes='$tgl_psikotes', penampilan='$penampilan', komunikasi='$komunikasi', sikap='$sikap', pemahaman='$pemahaman', komitmen='$komitmen', pengalaman='$pengalaman', komputer='$komputer', inggris='$inggris', kl1='$kl1', kl2='$kl2', kl3='$kl3', kl4='$kl4', kl5='$kl5', kr1='$kr1', kr2='$kr2', kr3='$kr3', kr4='$kr4', kr5='$kr5' where penilaian.id_kandidat='$id'") or die(mysql_error());

if(isset($perusahaan_1)){
$query = mysql_query("update kerja set perusahaan='$perusahaan_1', jns_perusahaan='$jns_perusahaan_1', posisi='$posisi_1', periode='$periode_1', deskripsi1='$deskripsi1_1', deskripsi2='$deskripsi2_1', deskripsi3='$deskripsi3_1', gaji_terakhir='$gaji_terakhir_1' 
	where id_kerja ='$id_kerja_1'") or die(mysql_error());
}

if(isset($perusahaan_2)){
$query = mysql_query("update kerja set perusahaan='$perusahaan_2', jns_perusahaan='$jns_perusahaan_2', posisi='$posisi_2', periode='$periode_2', deskripsi1='$deskripsi1_2', deskripsi2='$deskripsi2_2', deskripsi3='$deskripsi3_2', gaji_terakhir='$gaji_terakhir_2' 
	where id_kerja ='$id_kerja_2'") or die(mysql_error());
}
if(!empty($perusahaan_a)){
$query = mysql_query("insert into kerja (id_kerja, id_kandidat, perusahaan, jns_perusahaan, posisi, periode, deskripsi1, deskripsi2, deskripsi3, gaji_terakhir) 
	values('', '$id', '$perusahaan_a', '$jns_perusahaan_a', '$posisi_a $posisi_1a', '$periode_a', '$deskripsi1_a', '$deskripsi2_a', '$deskripsi3_a', '$gaji_terakhir_a')") or die(mysql_error());
}
if(!empty($perusahaan_b)){
$query = mysql_query("insert into kerja (id_kerja, id_kandidat, perusahaan, jns_perusahaan, posisi, periode, deskripsi1, deskripsi2, deskripsi3, gaji_terakhir) 
	values('', '$id', '$perusahaan_b', '$jns_perusahaan_b', '$posisi_b $posisi_2b', '$periode_b', '$deskripsi1_b', '$deskripsi2_b', '$deskripsi3_b', '$gaji_terakhir_b')") or die(mysql_error());
}
$query = mysql_query("update kelengkapan set ijazah='$ijazah', transkrip='$transkrip', sertifikat='$sertifikat', surat_ket_kerja='$surat_ket_kerja', skkb='$skkb', skck='$skck', surat_ket_sehat='$surat_ket_sehat', photo='$photo', tes_kepribadian='$tes_kepribadian', tes_iq='$tes_iq', tes_eq='$tes_eq', tes_disk='$tes_disk', tes_tiu='$tes_tiu', lain='$lain' where kelengkapan.id_kandidat='$id'") or die(mysql_error());

if(isset($_FILES['img'])){
$time = time();
$name = $_FILES['img']['name'];
$error = $_FILES['img']['error'];
$size = $_FILES['img']['size'];
$asal = $_FILES['img']['tmp_name'];
$format = $_FILES['img']['type'];
$namafile = 'img/img-kandidat/'.$name;

/*$target = 'img/img-kandidat/'.$gambar;
if(file_exists($target)){
	unlink($target);
}*/

if($error == 0){
	if($size < 1000000){
		if($format == 'image/jpg'||'image/jpeg'||'image/png'){
			if(file_exists($namafile)){
				$namafile = str_replace(".jpg", "", $namafile);
				$namafile = $namafile."_".$time.".jpg";
				$name = substr($namafile, 17);
			}
				//mengupload imagejpeg(imagecreatefromjpeg($asal, $asal, 75));
			
			move_uploaded_file($asal, $namafile);
			$query = mysql_query("update foto set gambar='$name' where foto.id_kandidat='$id'");
			
			if($query){
					echo "<script>
					alert('Foto Berhasil di Upload !');
				  		</script>";
				  	}
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
}


elseif(isset($_FILES['image'])){
$time = time();
$name = $_FILES['image']['name'];
$error = $_FILES['image']['error'];
$size = $_FILES['image']['size'];
$asal = $_FILES['image']['tmp_name'];
$format = $_FILES['image']['type'];
$namafile = 'img/img-kandidat/'.$name;

if($error == 0){
	if($size < 1000000){
		if($format == 'image/jpg'||'image/jpeg'||'image/png'){
			if(file_exists($namafile)){
				$namafile = str_replace(".jpg", "", $namafile);
				$namafile = $namafile."_".$time.".jpg";
				$name = substr($namafile, 17);
			}
				//mengupload imagejpeg(imagecreatefromjpeg($asal, $asal, 75));
			
			move_uploaded_file($asal, $namafile);
			$query = mysql_query("insert into foto (id_foto, id_kandidat, gambar) 
									values('', '$id', '$name')") or die(mysql_error());
			
			if($query){
					echo "<script>
					alert('Foto Berhasil di Upload !');
				  		</script>";
				  	}
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