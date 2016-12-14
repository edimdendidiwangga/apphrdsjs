<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$id_kandidat = $_POST['id_kandidat'];
$kategori_tes = $_POST['kategori_tes'];
$jawaban_kandidat = $_POST['jawaban'];
//input kepribadian
$e = $_POST['e'];
$i = $_POST['i'];
$s = $_POST['s'];
$t = $_POST['t'];
$n = $_POST['n'];
$f = $_POST['f'];
$j = $_POST['j'];
$p = $_POST['p'];


	
		 $jml_e0 = 0*(substr_count($e, '0'));
         $jml_e1 = 1*(substr_count($e, '1'));
         $jml_e2 = 2*(substr_count($e, '2'));
         $jml_e = $jml_e0+$jml_e1+$jml_e2;
         
         $jml_i0 = 0*(substr_count($i, '0'));
         $jml_i1 = 1*(substr_count($i, '1'));
         $jml_i2 = 2*(substr_count($i, '2'));
         $jml_i = $jml_i0+$jml_i1+$jml_i2;

         $jml_s0 = 0*(substr_count($s, '0'));
         $jml_s1 = 1*(substr_count($s, '1'));
         $jml_s2 = 2*(substr_count($s, '2'));
         $jml_s = $jml_s0+$jml_s1+$jml_s2;

         $jml_n0 = 0*(substr_count($n, '0'));
         $jml_n1 = 1*(substr_count($n, '1'));
         $jml_n2 = 2*(substr_count($n, '2'));
         $jml_n = $jml_n0+$jml_n1+$jml_n2;

         $jml_t0 = 0*(substr_count($t, '0'));
         $jml_t1 = 1*(substr_count($t, '1'));
         $jml_t2 = 2*(substr_count($t, '2'));
         $jml_t = $jml_t0+$jml_t1+$jml_t2;

         $jml_f0 = 0*(substr_count($f, '0'));
         $jml_f1 = 1*(substr_count($f, '1'));
         $jml_f2 = 2*(substr_count($f, '2'));
         $jml_f = $jml_f0+$jml_f1+$jml_f2;

         $jml_j0 = 0*(substr_count($f, '0'));
         $jml_j1 = 1*(substr_count($f, '1'));
         $jml_j2 = 2*(substr_count($f, '2'));
         $jml_j = $jml_j0+$jml_j1+$jml_j2;

         $jml_p0 = 0*(substr_count($p, '0'));
         $jml_p1 = 1*(substr_count($p, '1'));
         $jml_p2 = 2*(substr_count($p, '2'));
         $jml_p = $jml_p0+$jml_p1+$jml_p2;

         if ($jml_e>=$jml_i) {
           $ei= 'E';
         }elseif ($jml_e<$jml_i) {
           $ei= 'I';
         }
         if ($jml_s>=$jml_n) {
           $sn= 'S';
         }elseif ($jml_s<$jml_n) {
           $sn= 'N';
         }
         if ($jml_t>=$jml_f) {
           $tf= 'T';
         }elseif ($jml_t<$jml_f) {
           $tf= 'F';
         }
         if ($jml_j>=$jml_p) {
           $jp= 'J';
         }elseif ($jml_j<$jml_p) {
           $jp= 'P';
         }
         
           $tot_nilai = ''.$ei.''.$sn.''.$tf.''.$jp.'';
	             
	
    //$total = number_format($nilai,)
//simpan data ke database

if(!empty($e)){
	$query = mysql_query("insert into nilai (id_biji, id_kandidat, kategori_tes, jawaban, nilai) values('', '$id_kandidat', '$kategori_tes', 'e:$e i:$i s:$s t:$t n:$n f:$f j:$j p:$p', '$tot_nilai')") or die(mysql_error());
}elseif(!empty($jawaban_kandidat)){


 $hasil = mysql_query("SELECT * FROM kunci WHERE kunci.nama_tes = '".
mysql_real_escape_string($kategori_tes)."'");
 $row = mysql_fetch_array($hasil);
 
    $nilai = 0; // inisialisasi nilai dengan nilai 0
    $jawaban = $row['kunci_jawaban'];

    // pengecekan jawaban, diulang dari 0 hingga 22 karena termasuk tanda koma
    for($i=0; $i<=34; $i++){
    if($jawaban[$i]==$jawaban_kandidat[$i]){ // mengecek apakah jawaban sama dengan kunci
    if($jawaban[$i]!=","){ // mengecek apakah yang sama merupakan koma atau bukan
    $nilai++; // jika bukan koma dan jawaban benar, maka nilai bertambah 1.
      }
        }
          
    } 
       $tot = $nilai/30*100;
       $total = number_format($tot);

	$query = mysql_query("insert into nilai (id_biji, id_kandidat, kategori_tes, jawaban, nilai) values('', '$id_kandidat', '$kategori_tes', '$jawaban_kandidat', '$total')") or die(mysql_error());
}
if ($query) {
    echo "<script>
    alert('Data berhasil Disimpan');
    window.location='jawaban.php';
    </script>";
}else {
    echo "<script>
    alert('Data GAGAL Disimpan !');
    window.location='jawaban.php';
    </script>";
}






?>