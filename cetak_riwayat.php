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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/u/dt/dt-1.10.12/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/u/dt/dt-1.10.12/datatables.min.js"></script>
<?php 
                          $id = $_GET['id_kandidat'];

                          $query = mysql_query("
                                SELECT *
                                FROM kandidat 
                                inner join penilaian on kandidat.id_kandidat = penilaian.id_kandidat
                                inner join kelengkapan on kandidat.id_kandidat = kelengkapan.id_kandidat
                                where kandidat.id_kandidat='$id'");
                          
                          $data = mysql_fetch_array($query);
                          ?>

<div class="col-sm-4">
  <table>
         <tr >
          <td width="40%"><b> No. Aplikasi </td><td>:</b> <?php echo $data['no_aplikasi'];?></td></tr>
          <tr><td width="40%"><b> Klien </td><td>:</b>  <?php echo $data['status_pengiriman'];?></td></tr>
          <tr><td width="40%"><b> Jabatan Dilamar </td><td>:</b>  <?php echo $data['position'];?></td></tr>
          
          
          </table>
</div>
<div class="col-sm-6"></div><div class="col-sm-2">
<img src="img/logo/logo.jpg" class="img-responsive " align="right"><!--img-bordered-->

             
</div>
<div class="col-sm-12">
<h3 align="center">DAFTAR RIWAYAT HIDUP</h3>
<hr style="border: solid 0.5px gray">
</div>

         
     <!-- /.col -->
     <div class="col-sm-7 invoice-col">

       <address>
          <table class="table table-hover table-responsive">
          
          <tr>
          <th colspan="2"><b>A. Data Pribadi </b></th></tr>
          <tr><td width="40%">1. Nama </td><td>: <?php echo $data['nama']; ?></td></tr>
          <tr><td width="40%">2. Tempat & Tanggal Lahir </td><td>:  <?php echo $data['tempat_lahir']; ?>, <?php echo $data['tgl_lahir']; ?></td></tr>
          <tr><td width="40%">3. Alamat </td><td>:  <?php echo $data['alamat']; ?></td></tr>
          <tr><td width="40%">4. Jenis Kelamin </td><td>:  <?php echo $data['jenkel']; ?></td></tr>
          <tr><td width="40%">5. Kebangsaan </td><td>:  <?php echo $data['kebangsaan']; ?></td></tr>
          <tr><td width="40%">6. Agama </td><td>:  <?php echo $data['agama']; ?></td></tr>
          <tr><td width="40%">7. Status </td><td>:  <?php echo $data['status_kawin']; ?></td></tr>
          <tr><td width="40%">8. Tinggi/Berat Badan </td><td>:  <?php echo $data['t_bdn']; ?> / <?php echo $data['b_bdn']; ?></td></tr>
          </table>
          </address>
      
    </div>
    <div class="col-sm-2"></div>
  
<?php 
                          $id = $_GET['id_kandidat'];

                          $quer = mysql_query("
                                SELECT *
                                FROM kandidat 
                                
                                inner join foto on kandidat.id_kandidat = foto.id_kandidat
                                where kandidat.id_kandidat='$id'");
                          
                          $dat = mysql_fetch_array($quer);
                          ?>
        <div class="col-sm-3">
          <address>

          <?php if ($dat['gambar']==""){
            echo'
                  <img src="img/img-kandidat/user2.jpg" class="profile-user-img img-responsive img-thumbnail" align="left">
                ';}
          else {
            echo'
                  <img src="img/img-kandidat/'.$dat['gambar'].'" class=" img-responsive img-thumbnail" align="left">
                ';}
                ?>

          
          </address>
         </div>
         


     
           <div class="col-sm-12">
            <div class="box box-default">
            <div class="box-header with-border">
             
             
              <h3 class="box-title">B. Latar Belakang Pendidikan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <table class="table table-striped table-bordered table-hover table-responsive">
  <thead>
    <tr>
      <th>
        No.
      </th>
      <th>
        Pendidikan
      </th>
      <th>
        Nama Sekolah
      </th>
      <th>
        Jurusan
      </th>
      <th>
        Tahun Lulus
      </th>
      <th>
        IPK
      </th>
      
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <td>
        1.
      </td>
      <td>
        <?php echo $data['pendidikan'];?>
      </td>
      <td>
        <?php echo $data['nama_sekolah'];?>
      </td>
      <td>
        <?php echo $data['jurusan'];?>
      </td>
      <td>
        <?php echo $data['thn_lulus'];?>
      </td>
      <td>
        <?php echo $data['ipk'];?>
      </td>
    </tr>
  </tbody>
</table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
  
</div>

<div class="col-sm-12">
            <div class="box box-default">
            <div class="box-header with-border">
             

              <h3 class="box-title">C. Pengalaman Kerja</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <table class="table table-bordered table-hover table-responsive ">
  <thead>
    <tr>
      <th>
        No.
      </th>
      <th>
        Nama Perusahaan
      </th>
      <th>
        Jenis Peusahaan
      </th>
      <th>
        Posisi
      </th>
      <th>
       Periode
      </th>
      <th>
        Gaji Terakhir
      </th>
      
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <td>
        1
      </td>
      <td>
        <?php echo $data['perusahaan'];?>
      </td>
      <td>
        <?php echo $data['jns_perusahaan'];?>
      </td>
      <td>
        <?php echo $data['posisi'];?>
      </td>
      <td>
        <?php echo $data['periode'];?>
      </td>
      <td>
        <?php echo $data['gaji_terakhir'];?>
      </td>
      </tr>
      <?php 
                          $id = $_GET['id_kandidat'];

                          $query = mysql_query("
                                SELECT *
                                FROM kandidat 
                                inner join kerja on kandidat.id_kandidat = kerja.id_kandidat
                                
                                where kandidat.id_kandidat='$id'");
                          $no = 2;
                          while ($row = mysql_fetch_array($query)) {
                          ?>
        <tr>
        <td>
        <?php echo $no; ?>
      </td>
      <td>
        <?php echo $row['perusahaan'];?>
      </td>
      <td>
        <?php echo $row['jns_perusahaan'];?>
      </td>
      <td>
        <?php echo $row['posisi'];?>
      </td>
      <td>
        <?php echo $row['periode'];?>
      </td>
      <td>
        <?php echo $row['gaji_terakhir'];?>
      </td>
     
    </tr>
    <?php 
    $no++;
  } 
  ?>
  </tbody>
</table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
  
</div>

<div class="col-sm-6">
          <div class="box box-default">
            <div class="box-header with-border">
              

              <h3 class="box-title">E. Lainnya</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table class="table table-bordered table-hover table-responsive">
          <tr class="success">
          <td><b> Harapan Gaji </td><td>:</b> <?php echo $data['gaji_diinginkan'];?><br></td></tr>
          </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

      
        <div class="col-sm-8">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">F. Kualifikasi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <div class="box-body">
              <table class="table table-bordered table-hover table-responsive">
              <tr class="success">
              <td> <?php 
                $kualifikasi = $data['kualifikasi'];
                $array = explode(',', $kualifikasi);

                $arrlength = count($array);

                    for($x = 0; $x < $arrlength; $x++) {
                    echo '- '.$array[$x].'</br>';
                    }
                      ?></td></tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>

  <div class="col-sm-12">
          <div class="box box-default">
            <div class="box-header with-border">
              

              <h3 class="box-title">H. Kelengkapan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-hover table-responsive ">
            <tr class="warning">
                    <?php if ($data['ijazah']=='1'){
                      echo '<td><li class="glyphicon glyphicon-check"></li> Ijazah</td><td>';
                      }elseif ($data['ijazah']==''){
                      echo '<td><li class="glyphicon glyphicon-unchecked"></li> Ijazah</td><td>';
                      } ?>

                      <?php if ($data['skkb']=='1'){
                      echo '<td><li class="glyphicon glyphicon-check"></li> SKKB</td><td>';
                      }elseif ($data['skkb']==''){
                      echo '<td><li class="glyphicon glyphicon-unchecked"></li> SKKB</td><td>';
                      } ?>
                      <?php if ($data['tes_kepribadian']=='1'){
                      echo '<td><li class="glyphicon glyphicon-check"></li> Test Kepribadian</td><td>';
                      }elseif ($data['tes_disk']=='1'){
                      echo '<td><li class="glyphicon glyphicon-unchecked"></li> Test Disk</td><td>';
                      } ?>
            </tr>
            <tr class="warning">
                      <?php if ($data['transkrip']=='1'){
                      echo '<td><li class="glyphicon glyphicon-check"></li> Transkrip Nilai</td><td>';
                      }elseif ($data['transkrip']==''){
                      echo '<td><li class="glyphicon glyphicon-unchecked"></li> Transkrip Nilai</td><td>';
                      } ?>

                      <?php if ($data['skck']=='1'){
                      echo '<td><li class="glyphicon glyphicon-check"></li> SKCK</td><td>';
                      }elseif ($data['skck']==''){
                      echo '<td><li class="glyphicon glyphicon-unchecked"></li> SKCK</td><td>';
                      } ?>

                      <?php if ($data['tes_eq']=='1'){
                      echo '<td><li class="glyphicon glyphicon-check"></li> Test Logika</td><td>';
                      }elseif ($data['tes_tiu']=='1'){
                      echo '<td><li class="glyphicon glyphicon-unchecked"></li> Test Tiu</td><td>';
                      } ?>
                      
            </tr>
            <tr class="warning">
                    <?php if ($data['sertifikat']=='1'){
                      echo '<td><li class="glyphicon glyphicon-check"></li> Sertifikat Lainnya</td><td>';
                      }elseif ($data['sertifikat']==''){
                      echo '<td><li class="glyphicon glyphicon-unchecked"></li> Sertifikat Lainnya</td><td>';
                      } ?>

                      <?php if ($data['surat_ket_sehat']=='1'){
                      echo '<td><li class="glyphicon glyphicon-check"></li> Surat Keterangan Sehat</td><td>';
                      }elseif ($data['surat_ket_sehat']==''){
                      echo '<td><li class="glyphicon glyphicon-unchecked"></li> Surat Keterangan Sehat</td><td>';
                      } ?>

                      <?php if ($data['tes_iq']=='1'){
                      echo '<td><li class="glyphicon glyphicon-check"></li> Test Pengetahuan Umum</td><td>';
                      }elseif ($data['tes_iq']==''){
                      echo '<td><li class="glyphicon glyphicon-unchecked"></li> Test Pengetahuan Umum</td><td>';
                      } ?>

            <td></td></tr>
            <tr class="warning">
                    <?php if ($data['photo']=='1'){
                      echo '<td><li class="glyphicon glyphicon-check"></li> Photo</td><td>';
                      }elseif ($data['photo']==''){
                      echo '<td><li class="glyphicon glyphicon-unchecked"></li> Photo</td><td>';
                      } ?>
                    <?php if ($data['surat_ket_kerja']=='1'){
                      echo '<td><li class="glyphicon glyphicon-check"></li> Surat Keterangan Kerja</td><td>';
                      }elseif ($data['surat_ket_kerja']==''){
                      echo '<td><li class="glyphicon glyphicon-unchecked"></li> Surat Keterangan Kerja</td><td>';
                      } ?>

                      <?php if ($data['lain']=='1'){
                      echo '<td><li class="glyphicon glyphicon-check"></li> Lainnya</td><td>';
                      }elseif ($data['lain']==''){
                      echo '<td><li class="glyphicon glyphicon-unchecked"></li> Lainnya</td><td>';
                      } ?>
            <td></td></tr>
          
          </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
