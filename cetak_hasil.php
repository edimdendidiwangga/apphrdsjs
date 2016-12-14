 <!-- <body bgcolor="#99CC00" onload="window.print();"> -->
<?php 
include('config.php');
include('cek-login.php');
?>
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
<script src="bootstrap-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap-dist/css/bootstrap.min.css"> 
<link href='css/style_print.css' rel='stylesheet' type='text/css'/>


<div class="col-sm-10"></div><div class="col-sm-2">
<img src="img/logo/logo.jpg" class="img-responsive " align="right"><!--img-bordered-->

             
</div>
<h2 align="center" >Laporan Hasil Tes</h2>


<hr style="border: solid 0.5px gray">
<div class="row invoice-info ">
        
                          <?php 
                          $id = $_GET['id_kandidat'];

                          $query = mysql_query("
                                SELECT *
                                FROM kandidat 
                                inner join foto on kandidat.id_kandidat = foto.id_kandidat
                                where kandidat.id_kandidat='$id'");
                          
                          $data = mysql_fetch_array($query);
                          ?>
    <div class="col-sm-4 invoice-col">
          
          <address>
          <?php if ($data['gambar']==""){
            echo'
                  <img src="img/img-kandidat/user2.jpg" class="profile-user-img img-responsive img-thumbnail" align="left">
                ';}
          else {
            echo'
                  <img src="img/img-kandidat/'.$data['gambar'].'" class="profile-user-img img-responsive img-thumbnail" align="left">
                ';}
                ?>

            <br><br><br><br>
          </address>
    </div>
     <!-- /.col -->
     <?php 
                          $id = $_GET['id_kandidat'];

                          $query = mysql_query("
                                SELECT *
                                FROM kandidat 
                              
                                where kandidat.id_kandidat='$id'");
                          
                          $data = mysql_fetch_array($query);
                          ?>
        <div class="col-sm-6 invoice-col">
          
          <address>
          <table>
          <tr>
          <td  width="30%"> 
          <b>Nama Peserta  </b></td><td>:<b> <?php echo $data['nama'];?></b><br /></td></tr>
          <tr><td width="30%"><b>Alamat </td><td>:</b>  <?php echo $data['alamat'];?><br></td></tr>
          <tr><td width="30%"><b>Pendidikan Terakhir </td><td>:</b>  <?php echo $data['pendidikan'];?><br></td></tr>
          <tr><td width="30%"> <b>Posisi Yang Dilamar </td><td>:</b>  <?php echo $data['position'];?><br></td></tr>
          </table>
          </address>
        </div>
    
    
         </div>

<hr>
     
          

  <div class="table-responsive">
<table class="table table-bordered">
  <thead>
    <tr>
    
      <th class="ctr" width="5%" bgcolor="#9E9E9E">No</th>
      <th class="ctr" width="50%" bgcolor="#9E9E9E">Tes Yang Diikuti</th>
     
      <th class="ctr" width="20%" bgcolor="#9E9E9E">Nilai</th>
      <th class="ctr" width="25%" bgcolor="#9E9E9E">Nilai Akhir</th>
    </tr>
  </thead>

  <tbody>
    <?php $id = $_GET['id_kandidat'];
                      
                      $query = mysql_query("
                            SELECT *
                            FROM kandidat inner join nilai on kandidat.id_kandidat = nilai.id_kandidat 
                            where kandidat.id_kandidat='$id'");
                      
                      $sum = 0;     
                      $no = 1;
                      while ($data = mysql_fetch_array($query)) {
                      
                            
                              ?>
              <tr>

                <td scope="row" class="ctr"><?php echo $no; ?></td>
                <td><?php echo $data['kategori_tes']; ?></td>
               <td class="ctr"><?php  if ($data['kategori_tes'] == "Kepribadian") {
                                     echo '';
                                   }else{
                                    echo $data['nilai']; } ?></td>

                <?php
                  if($data['kategori_tes'] == "Pengetahuan Umum"){ 
                        if ($data['nilai'] >=86 ) {
                         echo '<td class="ctr success">Amat Baik ( A )</td>';
                        }
                        elseif ($data['nilai'] >=70) {
                          echo '<td class="ctr success">Baik ( B )</td>';
                        }
                          elseif ($data['nilai'] >=53) {
                          echo '<td class="ctr warning">Cukup ( C )</td>';
                        }
                         elseif ($data['nilai'] >=36) {
                          echo '<td class="ctr danger">Kurang ( D )</td>';
                        }
                        elseif ($data['nilai']<=33) {
                          echo '<td class="ctr danger">Amat Kurang ( E )</td>';
                        
                        }
                       
                  }elseif ($data['kategori_tes'] == "Logika"){ 
                        if ($data['nilai'] >=81 ) {
                         echo '<td class="ctr success">Amat Baik ( A )</td>';
                        }
                        elseif ($data['nilai'] >=61) {
                          echo '<td class="ctr success">Baik ( B )</td>';
                        }
                          elseif ($data['nilai'] >=41) {
                          echo '<td class="ctr warning">Cukup ( C )</td>';
                        }
                         elseif ($data['nilai'] >=21) {
                          echo '<td class="ctr danger">Kurang ( D )</td>';
                        }
                        elseif ($data['nilai'] <=20) {
                          echo '<td class="ctr danger">Amat Kurang ( E )</td>';
                        
                        }
                       

                  }elseif ($data['kategori_tes'] == "Bahasa Inggris"){ 

                        if ($data['nilai'] >=86 ) {
                         echo '<td class="ctr success">Amat Baik ( A )</td>';
                        }
                        elseif ($data['nilai'] >=70) {
                          echo '<td class="ctr success">Baik ( B )</td>';
                        }
                          elseif ($data['nilai'] >=53) {
                          echo '<td class="ctr warning">Cukup ( C )</td>';
                        }
                         elseif ($data['nilai'] >=36) {
                          echo '<td class="ctr danger">Kurang ( D )</td>';
                        }
                        elseif ($data['nilai'] <=33) {
                          echo '<td class="ctr danger">Amat Kurang ( E )</td>';
                        
                        }
                  
               }elseif ($data['kategori_tes'] == "Kepribadian"){ 

                     
                         echo '<td class="ctr success">'.$data['nilai'].'</td>';
                        
               }
                  
                   
      ?>
         </tr> 
         <?php 
                         $no++;
                         $sum+= $data['nilai'];
        
        
                        }  
                        echo'<tr><td class="info"></td><td  class="info"><b>TOTAL</b></td><td class="ctr info">'.$sum.'</td><td class="info"></td></tr>';
                        ?>
  </tbody>
</table>
<br>


<div class="col-md-6"></div>
<div class="col-md-6">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-th-large"></i>

              <h3 class="box-title">Penilaian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <table class="table table-bordered table-hover table-responsive">
         <tr class="warning">
          <td ><b> Nilai Akhir </td><td>:</b>  <?php if($sum>=95){echo'Direkomendasikan';}elseif($sum < 100 && $sum >= 75){echo'Dipertimbangkan';}
          elseif($sum <= 75){echo'Tidak Direkomendasikan';}?><br></td></tr>
          <tr class="warning"><td ><b> Tindak Lanjut </td><td>:</b>  Proses Lanjut<br></td></tr>
          <tr class="warning"><td ><b> Interviewer </td><td>:</b> PT. Sinar Jernih Suksesindo<br></td></tr>
          </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

<br>
<div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Analisa Tes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php $id = $_GET['id_kandidat'];
                      
                      $query = mysql_query("
                            SELECT *
                            FROM kandidat inner join nilai on kandidat.id_kandidat = nilai.id_kandidat 
                            where kandidat.id_kandidat='$id'");
                      
                                
                      $no = 1;
                      while ($data = mysql_fetch_array($query)) {
                      
                                 
                              ?>
          <?php
          if($data['kategori_tes'] == "Pengetahuan Umum"){ 
                      if ($data['nilai'] >=86 ) {

                       echo '<div class="callout callout-success ">
                              <h4>'.$no.'. '.$data['kategori_tes'].'</a></h4>
                              <p><b> Amat Baik ( A ). </b> Memiliki pengetahuan dan wawasan yang amat baik terhadap hal-hal umum dan bersifat menyeluruh. Hal ini menunjukan bahwa yang bersangkutan memiliki keingintahuan terhadap yang tinggi terhadap pengetahuan dan pengembangan wawasan yang dimilikinya. </p></div>';
                      }
                      elseif ($data['nilai'] >=70) {
                        echo '<div class="callout callout-success ">
                              <h4>'.$no.'. '.$data['kategori_tes'].'</h4>
                              <p><b> Baik ( B ). </b> Memiliki pengetahuan dan wawasan yang baik terhadap hal-hal umum dan bersifat menyeluruh, namun perlu pengembangan dan pembelajaran lebih lanjut tetap diperlukan agar tetap memiliki wawasan dan pengetahuan yang lebih luas. </p></div>';
                      }
                        elseif ($data['nilai'] >=53) {
                        echo '<div class="callout callout-warning ">
                              <h4>'.$no.'. '.$data['kategori_tes'].'</h4>
                              <p><b> Cukup ( C ). </b>Cenderung memiliki pengetahuan dan wawasan yang cukup baik terhadap hal-hal umum dan bersifat menyeluruh, namun perlu melakukan pengembangan dan pembelajaran lebih lanjut agar memiliki wawasan lebih luas secara terus menerus. </p></div>';
                      }
                       elseif ($data['nilai'] >=36) {
                        echo '<div class="callout callout-danger ">
                              <h4>'.$no.'. '.$data['kategori_tes'].'</h4>
                              <p><b> Kurang ( D ). </b>Cenderung memiliki pengetahuan dan wawasan yang kurang terhadap hal-hal umum dan bersifat menyeluruh, Perlu diperhatikan untuk peningkatan mutu dan pengetahuan dengan banyak berlatih, membaca dan melakukan pembelajaran secara terus menerus. </p></div>';
                      }
                      elseif ($data['nilai'] <=33) {
                        echo '<div class="callout callout-danger">
                              <h4>'.$no.'. '.$data['kategori_tes'].'</h4>                  
                              <p><b> Amat Kurang ( E ). </b> Kurang pengetahuan dan wawasan terhadap hal-hal umum dan bersifat menyeluruh, Perlu diperhatikan untuk peningkatan mutu terhadap aspek-aspek terkait dengan pengetahuan, melakukan banyak latihan dan informasi edukasi, membaca hingga melakukan pembelajaran secara terus menerus agar dapat meningkatkan pengetahuan dan wawasan yang dimilikinya. </p></div>
                              ';
                      
                      }
                      

            }elseif ($data['kategori_tes'] == "Logika"){ 
                      
                      if ($data['nilai'] >=81) {

                       echo '<div class="callout callout-success ">
                              <h4>'.$no.'. '.$data['kategori_tes'].'</a></h4>
                              <p><b> Amat Baik ( A ). </b> Memiliki tingkat analisa yang baik,berpikir secara logis, cukup teliti dalam menyelesaikan pekerjaan,mampu menciptakan sinergi, ide kreatif dan realistis untuk menyelesaikan masalah dan mengambil tindakan. </p></div>';
                      }
                      elseif ($data['nilai'] >=61) {
                        echo '<div class="callout callout-success ">
                              <h4>'.$no.'. '.$data['kategori_tes'].'</h4>
                              <p><b> Baik ( B ). </b> Memiliki tingkat analisa yang cukup baik, berpikir secara logis. Perlu pengembangan untuk mengasah sikap dan daya analitis, dan peningkatan pada ketelitian. Memiliki ide untuk pemecahan masalah.  </p></div>';
                      }
                        elseif ($data['nilai'] >=41) {
                        echo '<div class="callout callout-warning ">
                              <h4>'.$no.'. '.$data['kategori_tes'].'</h4>
                              <p><b> Cukup ( C ). </b> Memiliki tingkat analisa yang cukup dapat dipertimbangkan, cukup berpikir secara logis. Perlu pengembangan dan peningkatan untuk mengasah sikap dan daya analitis, dan peningkatan pada ketelitian dalam kinerja. Cukup memiliki ide dalam pemecahan masalah.  </p></div>';
                      }
                       elseif ($data['nilai'] >=21) {
                        echo '<div class="callout callout-danger ">
                              <h4>'.$no.'. '.$data['kategori_tes'].'</h4>
                              <p><b> Kurang ( D ). </b> Memiliki tingkat analisa, daya tangkap dan logika yang rendah. Cenderung kurang memiliki inovasi untuk memecahkan suatu permasalahan. Perlu pengembangan dan peningkatan untuk mengasah sikap, daya analitis, ketelitian dalam menyelesaikan suatu pekerjaan.  </p></div>';
                      }
                      elseif ($data['nilai'] <=20) {
                        echo '<div class="callout callout-danger">
                              <h4>'.$no.'. '.$data['kategori_tes'].'</h4>                  
                              <p><b> Amat Kurang ( E ). </b> Kurang memiliki tingkat analisa, daya tangkap dan logika. Cenderung tidak memiliki inovasi untuk memecahkan suatu permasalahan. Perlu pengembangan dan peningkatan untuk mengasah sikap, daya analitis, ketelitian dalam menyelesaikan suatu pekerjaan. Disarankan untuk terus berlatih dan belajar untuk menganalisa suatu permasalahan secara sistemik, sesuai dengan kebutuhan dan pemikiran yang logis.  </p></div>
                              ';
                      
                      }
                      
                }elseif ($data['kategori_tes'] == "Bahasa Inggris"){ 
                      
                      if ($data['nilai'] >=90) {

                       echo '<div class="callout callout-success ">
                              <h4>'.$no.'. '.$data['kategori_tes'].'</a></h4>
                              <p><b> Amat Baik ( A ). </b> Memiliki kemampuan yang sangat baik terhadap grammar dan pemahaman terhadap pertanyaan tertulis. </p></div>';
                      }
                      elseif ($data['nilai'] >=80) {
                        echo '<div class="callout callout-success ">
                              <h4>'.$no.'. '.$data['kategori_tes'].'</h4>
                              <p><b> Baik ( B ). </b> Memiliki kemampuan yang baik terhadap grammar dan pemahaman terhadap pertanyaan tertulis. </p></div>';
                      }
                        elseif ($data['nilai'] >=60) {
                        echo '<div class="callout callout-warning ">
                              <h4>'.$no.'. '.$data['kategori_tes'].'</h4>
                              <p><b> Cukup ( C ). </b> Memiliki kemampuan yang cukup terhadap grammar dan pemahaman terhadap pertanyaan tertulis. </p></div>';
                      }
                       elseif ($data['nilai'] >=40) {
                        echo '<div class="callout callout-danger ">
                              <h4>'.$no.'. '.$data['kategori_tes'].'</h4>
                              <p><b> Kurang ( D ). </b> Memiliki kemampuan yang kurang baik terhadap grammar dan pemahaman terhadap pertanyaan tertulis. </p></div>';
                      }
                      elseif ($data['nilai'] <=39) {
                        echo '<div class="callout callout-danger">
                              <h4>'.$no.'. '.$data['kategori_tes'].'</h4>                  
                              <p><b> Amat Kurang ( E ). </b> Memiliki kemampuan yang sangat kurang terhadap grammar dan pemahaman terhadap pertanyaan tertulis. </p></div>
                              ';
                      } 
                }
                
               elseif ($data['kategori_tes'] == "Kepribadian"){ 
                      
                      if ($data['nilai'] ==0) {
                       echo '';
                      }
                }
                
                      
        ?>
        
         <?php 
                         $no++;
                        }  
                        ?>
      </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

                        
      </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
         <?php $id = $_GET['id_kandidat'];
                      
                      $query = mysql_query("
                            SELECT *
                            FROM kandidat inner join nilai on kandidat.id_kandidat = nilai.id_kandidat 
                            where kandidat.id_kandidat='$id'");
                      
                                
                      
                   while($data = mysql_fetch_array($query)){
                      
                            
                              ?>
                   
<?php
if($data['kategori_tes']=='Kepribadian'){
 
                      echo '
                      <!-- /.box -->
          <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Hasil Tes Kepribadian</h3>
            </div>
            <!-- /.box-header -->
            
                        
            <div class="box-body">
              <table class="table table-striped table-hover table-condensed table-responsive">
                
             
                <tr>
                      <th class="success ctr" colspan="2">'.$data['nilai'].'<br>( '; 
                       if ($data['nilai'] =='ESTJ') {
                               echo 'Pemikir yang Extrovert dengan Indra';
                             }elseif ($data['nilai'] =='INFP') {
                               echo 'Perasa yang Introvert dengan Intuisi';
                             }elseif ($data['nilai'] =='ENFP') {
                               echo 'Intuitif yang Extrovert dengan Perasaan';
                             }elseif ($data['nilai'] =='ISTJ') {
                               echo 'Pengindra yang Introvert dengan Pikiran';
                             }elseif ($data['nilai'] =='INTP') {
                               echo 'Pemikir yang Introvert dengan Intuisi';
                             }elseif ($data['nilai'] =='ESFJ') {
                               echo 'Perasa yang Extrovert dengan Indra';
                             }elseif ($data['nilai'] =='ENTP') {
                               echo 'Intuitif yang Extrovert dengan Pemikiran';
                             }elseif ($data['nilai'] =='ISFJ') {
                               echo 'Pengindra yang Introvert dengan Perasaan';
                             }elseif ($data['nilai'] =='INFJ') {
                               echo 'Intuitif yang Introvert dengan Perasaan';
                             }elseif ($data['nilai'] =='ESTP') {
                               echo 'Pengindra yang Extrovert dengan Pemikiran';
                             }elseif ($data['nilai'] =='ENFJ') {
                               echo 'Perasaan yang Extrovert dengan Perasaan';
                             }elseif ($data['nilai'] =='ISTP') {
                               echo 'Pemikir yang Introvert dengan Indra';
                             }elseif ($data['nilai']=='ESFP') {
                               echo 'Pengindra yang Introvert dengan Perasaan';
                             }elseif ($data['nilai']=='INTJ') {
                               echo 'Intuitif yang Introvert dengan Pemikiran';
                             }elseif ($data['nilai']=='ENTJ') {
                               echo 'Pemikir yang Extrovert dengan Intuisi';
                             }elseif ($data['nilai']=='ISFP') {
                               echo 'Perasa yang Introvert dengan Pengindra';
                             }
             
 echo' )</th>
                </tr>
               <td>
                 <div class="alert alert-success">
                <h4><i class="glyphicon glyphicon-plus-sign"></i> Kelebihan</h4><br>
                ';
                if ($data['nilai']=='ESTJ') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-success">
                                  <td>1. </td>
                                  <td>Praktis, realistis, berpegang pada
                                  fakta, dengan dorongan alamiah
                                  untuk bisnis dan mekanisme.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>2. </td>
                                  <td>Bisa diandalkan, bertanggung
                                  jawab, dan taat pada ketentuan
                                  dan aturan.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>3. </td>
                                  <td>Suka diberi wewenang untuk
                                  mengatur.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>4. </td>
                                  <td>Besifat logis, analitis, dan kritis
                                  secara objektif.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>5. </td>
                                  <td>Fokus pada pekerjaan,bukan 
                                  orang dibalik pekerjaan.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>6. </td>
                                  <td>Mengorganisasi fakta-fakta,situasi
                                  dan operasi yang berhubungan
                                  dengan suatu proyek.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>7. </td>
                                  <td>Membuat usaha sistematis untuk
                                  mencapai sasaran mereka pada
                                  waktunya.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>8. </td>
                                  <td>Kepercayaan bahwa perilaku harus
                                  dikendalikan oleh logika.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>9. </td>
                                  <td>Hidup dengan serangkaian aturan
                                  tertentu yang merangkum penilaian
                                  dasar mereka mengenai dunia.</td>
                                </tr>
                              </table>
                                
                               ';
                             }elseif ($data['nilai']=='INFP') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-success">
                                  <td>1. </td>
                                  <td>Kesetiaan terhadap tugas dan kewajiban
                                yang berhubungan dengan gagasan atau
                                orang yang mereka pedulikan.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>2. </td>
                                  <td>Mengambil pendekatan yang sangat
                                pribadi terhadap hidup.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>3. </td>
                                  <td>Menilai segala sesuatu dengan cita-cita
                                batiniah dan nilai-nilai pribadi.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>4. </td>
                                  <td>Berpegang teguh pada impian ideal
                                mereka dengan keyakinan yang
                                bersemangat.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>5. </td>
                                  <td>Toleransi, fleksibilitas, dan kemampuan
                                beradaptasi dalam masalah-masalah
                                sehari-hari.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>6. </td>
                                  <td>Penuh dengan antusiasme dan kesetiaan
                                tetapi jarang mengungkapkannya
                                sampai mengenal betul orang yang
                                diajak bicara.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>7. </td>
                                  <td>Peduli pada proses belajar,ide,bahasa
                                 dan pekerjaan mandiri.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>8. </td>
                                  <td>Peduli pada proses belajar,ide,bahasa
                                 dan pekerjaan mandiri.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>9. </td>
                                  <td>Cenderung untuk mengambil terlalu
                                banyak, tetapi menyelesaikannya
                                sebagian.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>10. </td>
                                  <td>Bersahabat,tetapi sering terlalu
                                terlibat pada apa yang dilakukannya.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>10. </td>
                                  <td>Perhatian sedikit pada miliknya dan
                                lingkungan sekitar.</td>
                                </tr>
                              </table>
                              

                              

                               ';
                             }elseif ($data['nilai']=='ENFP') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-success">
                                  <td>1. </td>
                                  <td>Mencari kemungkinan-kemungkinan
                                dan cara-cara baru melakukan 
                                berbagai hal.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>2. </td>
                                  <td>Memecahkan masalah-masalah sulit
                                dengan cara-cara yang sederhana.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>3. </td>
                                  <td>Mengubah proyek dan peluang-
                                peluang baru demi kreativitas.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>4. </td>
                                  <td>Memberi kesempatan untuk 
                                mengembangkan dan mengilhami
                                potensi dalam diri orang-orang lain.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>5. </td>
                                  <td>Menciptakan lingkungan yang penuh
                                semangat dan motivasi.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>6. </td>
                                  <td>Mengkaji berbagai hal dan terus
                                mempertimbangkan pemecahannya.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>7. </td>
                                  <td>Hangat,antusias tinggi,imajinatif,dan
                                pandai menemukan hal-hal baru.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>8. </td>
                                  <td>Mampu melakukan apapun yang
                                menarik baginya. Cepat memberikan
                                solusi dan cepat membantu orang
                                yang punya masalah.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>9. </td>
                                  <td>Sering mengandalkan kemampuan-
                                nya untuk improvisasi daripada
                                menyiapkannya terlebih dahulu.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>10. </td>
                                  <td>Sering menemukan alasan yang 
                                menarik untuk meyakinkan orang lain
                                tentang apa yang diinginkannya.</td>
                                </tr>
                                
                              </table>
                              
                               ';
                             }elseif ($data['nilai']=='ISTJ') {
                               echo '
                              
                              <table class="table ">
                                <tr class="alert alert-success">
                                  <td>1. </td>
                                  <td> Dapat diandalkan, akurat.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>2. </td>
                                  <td>Penghargaan yang lengkap,realistis,
                                  dan praktis terhadap fakta.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>3. </td>
                                  <td>Menerima tanggung jawab melampaui
                                  panggilan tugas.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>4. </td>
                                  <td>Tampil tenang dan tegar dalam suatu
                                  krisis.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>5. </td>
                                  <td>Mendalam, bekerja keras dan stabil.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>6. </td>
                                  <td>Pilihan yang berhati-hati terhadap
                                  pekerjaan.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>7. </td>
                                  <td>Kemampuan berorganisasi tinggi.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>8. </td>
                                  <td>Serius, tenang, serta mencapai sukses
                                  dengan konsentrasi dan ketelitian.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>9. </td>
                                  <td>Praktis, teratur, senang pada fakta,
                                  logis,realistis, dan dapat diandalkan.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>10. </td>
                                  <td>Melihat segala sesuatu dapat
                                  diorganisasikan dengan baik.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>11. </td>
                                  <td>Bertanggung jawab.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>12. </td>
                                  <td>Punya pendirian sendiri tentang apa
                                  yang harus di capai, dan mengerjakannya
                                  dengan mantap tanpa peduli pada protes
                                  atau gangguan.</td>
                                </tr>
                              </table>
                              

                               ';
                             }elseif ($data['nilai']=='INTP') {
                               echo '
                                <table class="table ">
                                <tr class="alert alert-success">
                                  <td>1. </td>
                                  <td>Senang memecahkan masalah dengan
                                  logika dan analisis.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>2. </td>
                                  <td>Biasanya tertarik pada ide-ide dengan
                                  hubungan sedikit dalam diskusi.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>3. </td>
                                  <td>Cenderung memiliki minat yang
                                  jelas.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>4. </td>
                                  <td>Membuat penilaian logis tentang
                                  kemungkinan-kemungkinan
                                  nonpersonal.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>5. </td>
                                  <td>Kritis secara objektif.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>6. </td>
                                  <td>Lingkaran kecil sahabat-sahabat
                                  dekat.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>7. </td>
                                  <td>Pendiam dan penyegan.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>8. </td>
                                  <td>Sangat ingin tahu mengenai gagasan-
                                  gagasan baru.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>9. </td>
                                  <td>Kerinduan untuk memahami misteri
                                  kompleks dari hal-hal yang bukan
                                  pribadi.</td>
                                </tr>
                                
                                
                              </table>
                               
                               ';
                             }elseif ($data['nilai']=='ESFJ') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-success">
                                  <td>1. </td>
                                  <td>Hati yang hangat,banyak bicara,populer,
                                  punya hati nurani kuat,dilahirkan untuk
                                  bekerjasama,dan anggota kelompok
                                  yang aktif.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>2. </td>
                                  <td>Selalu melakukan sesuatu yang manis
                                  bagi orang lain.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>3. </td>
                                  <td>Kerja dengan baik dalam situasi yang
                                  mendukung dan memujinya.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>4. </td>
                                  <td>Minat utamanya ada dalam bidang-
                                  bidang yang secara langsung atau jelas.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>5. </td>
                                  <td>Memancarkan simpati dan persekutuan.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>6. </td>
                                  <td>Hubungan manusiawi yang harmonis.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>7. </td>
                                  <td>Bersahabat, bijaksana dan simpatik.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>8. </td>
                                  <td>Tekun, teliti, dan teratur.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>9. </td>
                                  <td>Berkonsentrasi pada sifat-sifat orang
                                  lain yang patut di puji.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>10. </td>
                                  <td>Belas kasihan dan kesadaran akan
                                  kondisi fisik.</td>
                                </tr>
                                
                              </table>
                              

                               ';
                             }elseif ($data['nilai']=='ENTP') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-success">
                                  <td>1. </td>
                                  <td>Gesit,inovatif,dan baik dalam banyak
                                  hal.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>2. </td>
                                  <td>Menstimulasi orang lain,serta
                                  waspada dan banyak bicara.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>3. </td>
                                  <td>Punya banyak cara untuk memecah-
                                  kan masalah dan tantangan, tetapi
                                  bisa mengabaikan tugas-tugas rutin.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>4. </td>
                                  <td>Cenderung melakukan hal baru yang 
                                  menarik hati setelah melakukan
                                  sesuatu yang lain.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>5. </td>
                                  <td>Terampil untuk menemukan alasan 
                                  yang tepat tentang apa yang
                                  diinginkannya.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>6. </td>
                                  <td>Mahir berurusan dengan teori dan
                                  hal-hal abstrak.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>7. </td>
                                  <td>Mencari kemungkinan dan cara-cara
                                  baru melakukan banyak hal.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>8. </td>
                                  <td>Imajinasi dan inisiatif memulai 
                                  pekerjaan.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>9. </td>
                                  <td>Bertujuan memahami daripada
                                  menghakimi orang.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>10. </td>
                                  <td>Membangkitkan semangat dan
                                  efektif dalam memotivasi orang lain</td>
                                </tr>
                                
                              </table>
                              
                               ';
                             }elseif ($data['nilai']=='ISFJ') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-success">
                                  <td>1. </td>
                                  <td>Tenang, ramah, dan teliti.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>2. </td>
                                  <td>Bekerja untuk memenuhi kewajiban.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>3. </td>
                                  <td>Memberikan stabilitas dalam pekerjaan 
                                  dan proyek.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>4. </td>
                                  <td>Mendasarkan keputusan pada nilai-nilai
                                  pribadi.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>5. </td>
                                  <td>Penghargaan yang lengkap,realistik,
                                  dan praktis terhadap fakta.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>6. </td>
                                  <td>Menerima tanggung jawab melampaui
                                  panggilan tugas.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>7. </td>
                                  <td>Terampil, tenang, dan tegar dalam suatu
                                  krisis.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>8. </td>
                                  <td>Mendalam, bekerja keras, dan stabil.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>9. </td>
                                  <td>Kemampuan berorganisasi tinggi.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>10. </td>
                                  <td>Ramah, simpatik, banyak akal, dan
                                  terbeban dengan tulus.</td>
                                </tr>
                                
                              </table>
                              
                               ';
                             }elseif ($data['nilai']=='INFJ') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-success">
                                  <td>1. </td>
                                  <td>Sukses karena ketekunan,originalitas,
                                  dan keinginan kuat untuk melakukan
                                  apa saja yang diperlukan.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>2. </td>
                                  <td>Memberikan yang terbaik dalam
                                  pekerjaan.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>3. </td>
                                  <td>Dihormati karena keteguhan hati
                                  pada prinsip.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>4. </td>
                                  <td>Biasanya,diikuti dan dihormati karena
                                  kejelasan visi,serta dedikasi pada 
                                  hal-hal baik.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>5. </td>
                                  <td>Memiliki intuisi dan pemahaman.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>6. </td>
                                  <td>Kesempatan untuk bersikap inovatif
                                  dengan gagasan baru.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>7. </td>
                                  <td>Keharmonisan dan persekutuan.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>8. </td>
                                  <td>Mahir membujuk orang-orang lain
                                  untuk menyetujui dan bekerjasama.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>9. </td>
                                  <td>Subjektif dalam menimbang dan
                                  menerapkan nilai-nilai.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>10. </td>
                                  <td>Sensitif dan peka, serta percaya
                                  pada keyakinan dan nilai pribadi.</td>
                                </tr>
                                
                              </table>
                              
                               ';
                             }elseif ($data['nilai']=='ESTP') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-success">
                                  <td>1. </td>
                                  <td>Cenderung menyukai sesuatu yang
                                  mekanistis dan olahraga,dengan teman
                                  berada di sampingnya.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>2. </td>
                                  <td>Mudah beradaptasi,toleran,dan pada
                                  umumnya konservatif tentang nilai-nilai.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>3. </td>
                                  <td>Tidak suka penjelasan terlalu panjang.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>4. </td>
                                  <td>Paling baik dalam hal-hal nyata yang
                                  dapat dilakukan.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>5. </td>
                                  <td>Menghadapi hidup secara realistis dan
                                  tidak subjektif.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>6. </td>
                                  <td>Bersandar pada apa yang dilihat,dengar,
                                  dan ketahui dari tangan pertama.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>7. </td>
                                  <td>Mencari solusi-solusi yang memuaskan.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>8. </td>
                                  <td>Kemampuan beradaptasi dengan pikiran 
                                  terbuka dan sikap toleran.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>9. </td>
                                  <td>Memiliki keterampilan dalam
                                  pemecahan masalah.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>10. </td>
                                  <td>Membuat keputusan berdasarkan
                                  analisis logis pikiran,bukan pada bukan
                                  nilai-nilai perasaan pribadi.</td>
                                </tr>
                                
                              </table>
                              
                               ';
                             }elseif ($data['nilai']=='ENFJ') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-success">
                                  <td>1. </td>
                                  <td>Responsif dan bertanggung jawab.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>2. </td>
                                  <td>Pada umumnya peduli dengan 
                                  perkataan atau keinginan orang lain.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>3. </td>
                                  <td>Cenderung melakukan sesuatu
                                  dengan memperhatikan perasaan 
                                  orang lain.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>4. </td>
                                  <td>Memimpin diskusi dengan cepat dan
                                  taktis.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>5. </td>
                                  <td>Pandai bergaul,populer,simpatik.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>6. </td>
                                  <td>Responsif pada kritik dan pujian.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>7. </td>
                                  <td>Menjalin hubungan manusiawi yang
                                  harmonis,bersahabat,bijaksana dan
                                  simpatik.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>8. </td>
                                  <td>Tekun,teliti dan teratur.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>9. </td>
                                  <td>Mengidealkan apa yang dikagumi.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>10. </td>
                                  <td>Kemampuan melihat nilai dari
                                  pendapat orang lain.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>11. </td>
                                  <td>Mudah setuju terhadap pendapat
                                  orang lain,dalam batas-batas yang
                                  masuk akal.</td>
                                </tr>
                                
                              </table>
                               
                               ';
                             }elseif ($data['nilai']=='ISTP') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-success">
                                  <td>1. </td>
                                  <td> Biasanya, tertarik dengan hubungan
                                      sebab akibat,bagaimana, dan mengapa
                                      sesuatu terjadi.
                                      </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>2. </td>
                                  <td> Ketika mengorganisasi sesuatu,
                                biasanya menggnakan prinsip-prinsip
                                logis.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>3. </td>
                                  <td> Senang mengorganisasi fakta dan data.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>4. </td>
                                  <td> Keinginantahuan besar,tetapi secara
                                diam-diam.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>5. </td>
                                  <td> Mudah beradaptasi, kecuali jika salah
                                satu prinsip penting dilanggar.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>6. </td>
                                  <td> Terampil.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>7. </td>
                                  <td> Menyukai segala sesuatu yang
                                  memberikan banyak informasi bagi indra
                                  </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>8. </td>
                                  <td> Tertarik pada bagaimana dan mengapa
                                hal-hal bekerja.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>9. </td>
                                  <td> Biasanya gampangan (easy going),
                                menyukai kesenangan (fun), dan mudah
                                beradaptasi.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>10. </td>
                                  <td>Kemampuan berorganisasi tinggi.
                                 </td>
                                </tr>
                                
                              </table>
                               ';
                             }elseif ($data['nilai']=='ESFP') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-success">
                                  <td>1. </td>
                                  <td> Outgoing,easygoing,mudah 
                                berteman dan bersahabat.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>2. </td>
                                  <td> Mengetahui apa yang terjadi di
                                sekelilingnya dan ikut serta dalam kegiatan tersebut.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>3. </td>
                                  <td>Lebih cepat ingat pada kejadian-
                                kejadian daripada teori-teori.
                                 </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>4. </td>
                                  <td> Bersandar pada apa yang mereka
                                lihat,dengar,dan ketahui dari tangan 
                                pertama.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>5. </td>
                                  <td> Menerima dan menggunakan fakta 
                                di sekitar mereka.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>6. </td>
                                  <td>Mencari solusi-solusi yang
                                memuaskan.
                                 </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>7. </td>
                                  <td> Kemampuan beradaptasi tinggi.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>8. </td>
                                  <td> Berpikiran terbuka dan toleransi.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>9. </td>
                                  <td> Menggunakan aturan-aturan, sistem
                                atau situasi pada saat ini sebagai 
                                penolong, bukan penghalang.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>10. </td>
                                  <td>Membuat keputusan berdasarkan
                                  nilai-nilai perasaan pribadi, bukan
                                  berdasarkan analisis logis.
                                  </td>
                                </tr>
                                
                              </table>
                               ';
                             }elseif ($data['nilai']=='INTJ') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-success">
                                  <td>1. </td>
                                  <td> Biasanya, memiliki ide-ide original, dan
                                punya dorongan kuat untuk mencapai
                                ide dan tujuan-tujuannya.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>2. </td>
                                  <td> Dibidang yang cocok,memiliki kekuatan
                                untuk mengorganisasi pekerjaan dan
                                melakukannya dengan atau tanpa
                                bantuan.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>3. </td>
                                  <td> Kritis,mandiri, dan lebih suka melakukan
                                sesuatu dengan caranya sendiri.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>4. </td>
                                  <td>Pikiran-pikiran dan juga tindakan-
                                tindakanya inovatif.
                                 </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>5. </td>
                                  <td>Memercayai pemahaman intuitif  
                                terhadap hubungan sejati dan makna
                                dari hal-hal.
                                 </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>6. </td>
                                  <td> Kerinduan untuk menghabiskan waktu
                                berusaha untuk melihat inspirasi mereka
                                dilaksanakan dalam praktik.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>7. </td>
                                  <td> Mendorong orang lain hampir sekeras
                                mereka mendorong diri sendiri.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>8. </td>
                                  <td> Menganalisis berbagai alternatif 
                                pemecahan masalah.
                                </td>
                                </tr>
                                
                                
                                
                              </table>
                               ';
                             }elseif ($data['nilai']=='ENTJ') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-success">
                                  <td>1. </td>
                                  <td>Jujur dan terus terang,kuat 
                              kemauannya,dan dapat menjadi
                              pemimpin dalam kegiatan-kegiatan.
                               </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>2. </td>
                                  <td>Biasanya cepat mendapat informasi
                                dan menikmati informasi tersebut 
                                karena kesukaannya membaca.
                                 </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>3. </td>
                                  <td> Melakukan tindakan eksekutif dan
                                perencanaan jangka panjang.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>4. </td>
                                  <td>Bersifat logis,analitis, dan kritis
                                secara objektif.
                                 </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>5. </td>
                                  <td> Bersandar pada pemikiran.</td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>6. </td>
                                  <td> Fokus pada gagasan,bukan orang
                                  di balik gagasan.
                                  </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>7. </td>
                                  <td>Berpikir lebih dulu, mengatur 
                                perencanaan,situasi,dan operasi
                                yang berhubungan dengan suatu
                                proyek.
                                 </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>8. </td>
                                  <td>Membuat usaha sistematis untuk 
                                mencapai sasaran tepat pada
                                waktunya.
                                 </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>9. </td>
                                  <td> Kepercayaan bahwa perilaku harus
                                dikendalikan oleh logika.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>10. </td>
                                  <td>Hidup dengan serangkaian aturan
                                tertentu yang merangkum penilaian
                                dasar mereka mengenai dunia.
                                 </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>11. </td>
                                  <td>Memandang apa yang tidak logis
                                    dan tidak konsisten.
                                     </td>
                                </tr>
                                
                              </table>
                               ';
                             }elseif ($data['nilai']=='ISFP') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-success">
                                  <td>1. </td>
                                  <td>Sensitif, ramah, tidak menonjolkan diri,
                                rendah hati pada kemampuannya.
                                 </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>2. </td>
                                  <td>Menghindari konflik, tidak memaksakan
                              pendapat atau nilai-nilainya pada orang
                              lain.
                               </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>3. </td>
                                  <td> Biasanya tidak mau memimpin, tetapi
                                menjadi pengikut yang setia.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>4. </td>
                                  <td>Sering kali santai menyelesaikan sesuatu
                                karena sangat menikmati apa yang
                                terjadi saat ini.
                                 </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>5. </td>
                                  <td>Menilai hidup dengan impian ideal
                              batiniah dan nilai-nilai pribadinya.
                               </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>6. </td>
                                  <td> Setia kepada tugas,dapat diandalkan ,
                                dan akurat.
                                </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>7. </td>
                                  <td>Toleran,berpikiran terbuka,fleksibel,
                              dan mampu beradaptasi.
                               </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>8. </td>
                                  <td>Tampil tenang dan tegar dalam suatu
                                krisis.
                                 </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>9. </td>
                                  <td>Ketekunan yang menstabilkan. </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>10. </td>
                                  <td>Ramah,simpatik, banyak akal,dan mau
                              dibebani dengan tulus.
                               </td>
                                </tr>
                                <tr class="alert alert-success">
                                  <td>11. </td>
                                  <td>Perfeksionis jika menyukai sesuatu
                                  secara Mendalam.

                               </td>
                                </tr>
                              </table>
                               ';
                             }
      echo'   </div>
              
               </td>
               <td>
                <div class="alert alert-danger">
                <h4><i class="glyphicon glyphicon-minus-sign"></i> Kekurangan</h4><BR>';
                if ($data['nilai']=='ESTJ') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-danger">
                                  <td>1. </td>
                                  <td>Mengukur orang dengan standar atau
                                kacamata dirinya.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>2. </td>
                                  <td> Kurang memikirkan dampak terhadap
                                orang lain.
                                </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>3. </td>
                                  <td> Tergesa-gesa mengambil kesimpulan,
                                tanpa dukungan informasi yang
                                banyak.
                                </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>4. </td>
                                  <td>Kurang peduli dengan pendapat dan
                                perasaan orang lain.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>5. </td>
                                  <td> Resisten dengan perubahan.
                                  </td>
                                </tr>
                              </table>
                               ';
                             }elseif ($data['nilai']=='INFP') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-danger">
                                  <td>1. </td>
                                  <td>Sensitif terhadap kritikan.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>2. </td>
                                  <td> Tidak sabar dengan hal detail dan rutin</td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>3. </td>
                                  <td> Menghindar dari konflik yang mungkin
                                saja dinamis dan produktif.
                                </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>4. </td>
                                  <td>Enggan melemparkan kritikan kepada
                                  orang lain.
                                   </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>5. </td>
                                  <td>Terkesan menyendiri dan kurang
                                bersahabat.
                                 </td>
                                </tr>
                              </table>
                               ';
                             }elseif ($data['nilai']=='ENFP') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-danger">
                                  <td>1. </td>
                                  <td>Karena kebebasannya, kurang patuh
                                  pada aturan dan kurang disiplin
                                  dengan waktu.

                                </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>2. </td>
                                  <td>Bekerja tidak terencana dan
                                  melompat-lompat,terkadang keluar
                                  jalur.

                                </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>3. </td>
                                  <td>Banyak pekerjaan tetapi hanya
                                        sedikit yang selesai.

                                   </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>4. </td>
                                  <td>Abai dengan fakta,data-data detail.
                                   </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>5. </td>
                                  <td>Lambat dan sulit mengambil 
                                  keputusan dan kesimpulan karena
                                  terlalu banyak informasi.

                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>6. </td>
                                  <td>Cenderung tidak logis karena meng-
                                      utamakan menjaga perasaan semua
                                      pihak.

                                 </td>
                                </tr>
                              </table>
                               ';
                             }elseif ($data['nilai']=='ISTJ') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-danger">
                                  <td>1. </td>
                                  <td>Kurang kreatif dan inovatif karena sangat
                                  fokus pada tugas.
                                   </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>2. </td>
                                  <td>Kurang peduli dengan kebutuhan orang
                                lain,terutama dengan orang yang
                                berbeda ide dengannya.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>3. </td>
                                  <td>Ragu dengan hal-hal atau ide yang baru
                                jika tidak melihat atau mengalaminya.
                                Dapat mengabaikan pendapat orang lain.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>4. </td>
                                  <td>Jarang mengapresiasi orang lain.
                               </td>
                                </tr>
                                
                              </table>
                               ';
                             }elseif ($data['nilai']=='INTP') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-danger">
                                  <td>1. </td>
                                  <td> Cermat dalam melihat kelemahan,
                                tetapi segan mengutarakannya.
                                </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>2. </td>
                                  <td>Bisa muncul sikap arogan, kurang
                                komunikatif, dan tidak mau
                                mendengarkan orang lain.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>3. </td>
                                  <td>Dapat melukai perasaan orang lain. </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>4. </td>
                                  <td>Enggan dengan pekerjaan yang detail,
                                kurang dengan tindakan yang nyata.
                                 </td>
                                </tr>
                                
                              </table>
                               ';
                             }elseif ($data['nilai']=='ESFJ') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-danger">
                                  <td>1. </td>
                                  <td>Kurang begitu tinggi perhatiannya
                                terhadap orang,terkadang kurang
                                memperhatikan diri sendiri.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>2. </td>
                                  <td>Kesulitan meminta pertolongan,khawatir
                                mengecewakan orang lain.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>3. </td>
                                  <td> Susah melemparkan dan menerima kritik</td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>4. </td>
                                  <td> Keputusan atau kesimpulan terkadang
                                  subjektif dan tidak logis,dengan 
                                  pertimbangan perasaan.
                                  </td>
                                </tr>
                                
                              </table>
                               ';
                             }elseif ($data['nilai']=='ENTP') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-danger">
                                  <td>1. </td>
                                  <td>Tidak cermat dengan hal-hal yang
                                    detail.
                                     </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>2. </td>
                                  <td>Kurang praktis dalam menyikapi hal
                                yang sederhana.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>3. </td>
                                  <td>Tidak suka diberi tahu apa yang harus 
                                dilakukan.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>4. </td>
                                  <td>Tidak betah dengan hal yang rutin
                                dan detail.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>5. </td>
                                  <td>Dapat menjadi arogan karena merasa
                                banyak tahu.
                                 </td>
                                </tr>
                              </table>
                                ';
                             }elseif ($data['nilai']=='ISFJ') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-danger">
                                  <td>1. </td>
                                  <td> Tidak felksibel dengan perubahan
                                situasi di tengah jalan.
                                </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>2. </td>
                                  <td> Kurang berani menympaikan pendapat.</td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>3. </td>
                                  <td> Tidak senang dengan obrolan abstrak
                                  dan imajinatif.
                                  </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>4. </td>
                                  <td>Sensitif dengan kritik. </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>5. </td>
                                  <td>Banyak pertimbangan, tidak spontan. </td>
                                </tr>
                              </table>
                               ';
                             }elseif ($data['nilai']=='INFJ') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-danger">
                                  <td>1. </td>
                                  <td>Takut dan menjauhi konflik. </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>2. </td>
                                  <td>Tidak percaya pada informasi yang
                                belum terbukti.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>3. </td>
                                  <td>Dapat terlalu memaksa membuat
                                orang senang.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>4. </td>
                                  <td> Terlalu mengatur dan perfeksionis.</td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>5. </td>
                                  <td>Mengabaikan bukti atau fakta yang
                                    tidak mendukung pendapatnya.
                                     </td>
                                </tr>
                              </table>
                               ';
                             }elseif ($data['nilai']=='ESTP') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-danger">
                                  <td>1. </td>
                                  <td>Tidak memiliki prioritas.</td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>2. </td>
                                  <td>Pemecahan masalah tidak sistematis.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>3. </td>
                                  <td>Kurang peduli dengan perasaan orang
                                  lain.

                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>4. </td>
                                  <td>Tidak memiliki rencana yang matang,
                                  sesuatunya disiapkan secara mendadak.
                                  </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>5. </td>
                                  <td>Kurang menganggap penting persoalan
                                      yang detail.

                                     </td>
                                </tr>
                              </table>
                               ';
                             }elseif ($data['nilai']=='ENFJ') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-danger">
                                  <td>1. </td>
                                  <td>Menanggapi kritik terlalu berlebihan.</td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>2. </td>
                                  <td>Demi menghindari konflik,hubungan
                                  dengan orang lain terkadang kurang
                                  jujur.</td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>3. </td>
                                  <td>Terlena dengan misi pribadi demi
                                  menjunjung keselarasan.</td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>4. </td>
                                  <td>Empati yang berlebihan, dapat 
                                  mencampuri urusan pribadi orang
                                  lain.</td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>5. </td>
                                  <td>Lupa dengan fakta yang penting.</td>
                                </tr>
                              </table>
                               
                               ';
                             }elseif ($data['nilai']=='ISTP') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-danger">
                                  <td>1. </td>
                                  <td> Menyikapi persoalan terkadang
                                memulai tidak dari awal (dari tengah)
                                </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>2. </td>
                                  <td>Lebih tertarik menampung pilihan yang
                                ada sehingga menjadi ragu.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>3. </td>
                                  <td>Sulit memperlihatkan reaksi emosi,
                              perasaan, dan perhatiannya karena
                              dianggap tidak penting.
                               </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>4. </td>
                                  <td> Kurang ada tindak lanjut sampai selesai.</td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>5. </td>
                                  <td>Kurang komunikatif. </td>
                                </tr>
                              </table>
                               ';
                             }elseif ($data['nilai']=='ESFP') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-danger">
                                  <td>1. </td>
                                  <td> Menggampangkan menyikapi situasi,
                                sehingga terkadang terlihat santai.
                                </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>2. </td>
                                  <td>Tidak suka diberi pentunjuk
                                bagaimana seharusnya bekerja,
                                dapat bermasalah dengan aturan dan
                                batasan.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>3. </td>
                                  <td>Mudah tergoda dan sulit 
                                mendisiplinkan diri.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>4. </td>
                                  <td>Terkadang,mengorbankan tugas dan 
                                      membebani orang lain karena 
                                      menempatkan prioritas pada
                                      pengalaman dan mencoba 
                                      menikmati hidup.
                                       </td>
                                </tr>
                               
                              </table>
                               ';
                             }elseif ($data['nilai']=='INTJ') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-danger">
                                  <td>1. </td>
                                  <td>Terkadang, keras kepala.
                                </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>2. </td>
                                  <td>Dapat menjadi skeptis yang berlebihan.
                                  </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>3. </td>
                                  <td> Terkadang, arogan</td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>4. </td>
                                  <td>Kurang melibatkan orang lain dalam
                              kegiatannya.
                               </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>5. </td>
                                  <td>Terkadang,kurang memedulikan standar
                                orang lain.
                                 </td>
                                </tr>
                              </table>
                               ';
                             }elseif ($data['nilai']=='ENTJ') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-danger">
                                  <td>1. </td>
                                  <td>Kurang kesabaran terhadap situasi
                                yang tidak efisien.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>2. </td>
                                  <td>Dingin dengan perasaan orang lain. </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>3. </td>
                                  <td> Tegas dengan aturan dan mengabai-
                                  kan sisi manusiawi.
                                  </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>4. </td>
                                  <td>Terlalu percaya diri dan fokus pada
                                dirinya sendiri.
                                 </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>5. </td>
                                  <td>Tampak arogan dengan pengetahuan-
                                      nya.
                                       </td>
                                </tr>
                              </table>
                               ';
                             }elseif ($data['nilai']=='ISFP') {
                               echo '
                               <table class="table ">
                                <tr class="alert alert-danger">
                                  <td>1. </td>
                                  <td>Terlalu santai menyelesaikan pekerjaan.
                                </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>2. </td>
                                  <td>Kurang mampu menampilkan diri.
                                  </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>3. </td>
                                  <td> Kepemimpinan kurang.</td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>4. </td>
                                  <td>Karena hidupnya sepenuhnya unutk hari
                                      ini, cenderung tidak menyiapkan visi 
                                      jangka panjang.

                               </td>
                                </tr>
                                <tr class="alert alert-danger">
                                  <td>5. </td>
                                  <td>Sensitif dengan kritik sehingga mudah 
                                      terluka dan kecil hati.

                                 </td>
                                </tr>
                              </table>
                               ';
                             }
    echo'     
               </td>
                </tr>
                </div>
              </table>
            
';
 }
      ?>
          </div>
        
<?php 
                         
                        }  
                        ?>