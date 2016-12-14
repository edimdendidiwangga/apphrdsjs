 <!-- <body bgcolor="#99CC00" onload="window.print();"> -->
<?php 
include('config.php');
include('cek-login.php');
?>

<link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
<script src="bootstrap-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap-dist/css/bootstrap.min.css"> 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href='css/style_print.css' rel='stylesheet' type='text/css'/>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aabcfe;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#669;background-color:#e8edff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#039;background-color:#b9c9fe;}
.tg .tg-davt{font-weight:bold;font-family:Arial, Helvetica, sans-serif !important;;background-color:#b9c9fe;color:#000000;text-align:center;vertical-align:top}
.tg .tg-f8tx{color:#000000;text-align:center;vertical-align:top}
.tg .tg-h1da{background-color:#e8edff;color:#000000;vertical-align:top}
.tg .tg-nrcg{background-color:#e8edff;color:#000000;text-align:center;vertical-align:top}
.tg .tg-fefd{color:#000000;vertical-align:top}
.tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:top}
.tg .tg-yw4l{vertical-align:top}
</style>

<div class="col-sm-10"></div><div class="col-sm-2">
<img src="img/logo/logo.jpg" class="img-responsive " align="right"><!--img-bordered-->

             
</div>
<h3 align="center">TAHAP SELEKSI KARYAWAN PT. SJS</h3>


<hr style="border: solid 0.5px gray">
<div class="row invoice-info ">
        
                          <?php 
                          $id = $_GET['id_kandidat'];

                          $query = mysql_query("
                                SELECT *
                                FROM kandidat 
                                inner join penilaian on kandidat.id_kandidat = penilaian.id_kandidat
                                where kandidat.id_kandidat='$id'");
                          
                          $data = mysql_fetch_array($query);
                          ?>
    <div class="col-sm-6 invoice-col">
     <table class="table table-bordered table-hover table-responsive">
     <tr class="warning"><td width="40%"><b> No. </td><td>:</b>  <?php echo $data['no_aplikasi'];?><br></td></tr>
         <tr class="warning"><td width="40%"><b> Nama Kandidat </td><td>:</b>  <?php echo $data['nama'];?><br></td></tr>
          <tr class="warning"><td width="40%"><b> Tanggal Pengiriman </td><td>:</b>  <?php echo $data['tgl_pengiriman'];?><br></td></tr>
          
          </table>
      </div>
         
     <!-- /.col -->
     
        <div class="col-sm-6 invoice-col">
           <address>

          <table class="table table-bordered table-hover table-responsive">
          <tr class="success"><th> 
          <b>MELENGKAPI :</b></td><th width="30%"><b> TANGGAL PROSES</b></th></tr>
          <tr>
          <td width="30%">
          <li class="glyphicon glyphicon-check"></li><b> Pemeriksaan CV </td><td>:</b>  <?php echo $data['tgl_periksa'];?><br></td></tr>
          <tr><td width="30%"> <li class="glyphicon glyphicon-check"></li><b> Interview </td><td>:</b>  <?php echo $data['tgl_interview'];?><br></td></tr>
          <tr><td width="30%">  <li class="glyphicon glyphicon-check"></li> <b> Psikotes </td><td>:</b>  <?php echo $data['tgl_psikotes'];?><br></td></tr>
          </table>

          </address>
         </div>
         <hr style="border: solid 0.5px gray">
<div class="col-sm-8 invoice-col">

       <address>
          <table class="table table-hover table-responsive">
          
          <tr class="danger">
          <th colspan="2"><i class="fa fa-th-large"></i><b> Interview :</th></tr>
          <tr><td colspan="2">Meringkas 5 Skor dari setiap bagian ( Setiap bagian hanya memiliki 1 score ) </td></tr>
          <tr ><td> Diatas 18 Point </td><td>: Direkomendasikan<br></td></tr>
          <tr ><td> Dibawah 16-17 Point </td><td>: Dipertimbangkan<br></td></tr>
          <tr ><td> Dibawah 16 Point </td><td>:  Tidak Direkomendasikan<br></td></tr>
          
          </table>
          </address>
      
    </div>

     
          

  <div class="table-responsive">
  <table class="table table-bordered table-hover table-responsive tg" >
<colgroup>
<col style="width: 301px">
<col style="width: 143px">
<col style="width: 106px">
<col style="width: 104px">
<col style="width: 103px">
<col style="width: 125px">
</colgroup>
  <tr>
    <th class="tg-davt" rowspan="2"><br>Sesi / Bagian</th>
    <th class="tg-davt" colspan="5">Nilai</th>
  </tr>
  <tr>
    <td class="tg-davt">Sangat Kurang</td>
    <td class="tg-davt">Kurang</td>
    <td class="tg-davt">Cukup</td>
    <td class="tg-davt">Baik</td>
    <td class="tg-davt">Sangat Baik</td>
  </tr>
  <tr>
    <td class="tg-h1da">Penampilan</td>
    <?php if($data['penampilan']=='5'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg"><span class="badge bg-blue">5</span></td>
    ';}elseif($data['penampilan']=='4'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg"><span class="badge bg-green">4</span></td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['penampilan']=='3'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg"><span class="badge bg-orange">3</span></td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['penampilan']=='2'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg"><span class="badge bg-red">2</span></td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['penampilan']=='1'){
      echo '
    <td class="tg-nrcg"><span class="badge bg-red">1</span></td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}

    ?>
  </tr>
  <tr>
    <td class="tg-h1da">Keterampilan komunikasi</td>
    <?php if($data['komunikasi']=='5'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg"><span class="badge bg-blue">5</span></td>
    ';}elseif($data['komunikasi']=='4'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg"><span class="badge bg-green">4</span></td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['komunikasi']=='3'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg"><span class="badge bg-orange">3</span></td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['komunikasi']=='2'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg"><span class="badge bg-red">2</span></td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['komunikasi']=='1'){
      echo '
    <td class="tg-nrcg"><span class="badge bg-red">1</span></td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}
?>
  </tr>
  <tr>
    <td class="tg-h1da">Sikap dan motivasi</td>
    <?php if($data['sikap']=='5'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg"><span class="badge bg-blue">5</span></td>
    ';}elseif($data['sikap']=='4'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg"><span class="badge bg-green">4</span></td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['sikap']=='3'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg"><span class="badge bg-orange">3</span></td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['sikap']=='2'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg"><span class="badge bg-red">2</span></td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['sikap']=='1'){
      echo '
    <td class="tg-nrcg"><span class="badge bg-red">1</span></td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}
?>
  </tr>
  <tr>
    <td class="tg-fefd">Pemahaman Terhadap Pekerjaan</td>
    <?php if($data['pemahaman']=='5'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg"><span class="badge bg-blue">5</span></td>
    ';}elseif($data['pemahaman']=='4'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg"><span class="badge bg-green">4</span></td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['pemahaman']=='3'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg"><span class="badge bg-orange">3</span></td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['pemahaman']=='2'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg"><span class="badge bg-red">2</span></td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['pemahaman']=='1'){
      echo '
    <td class="tg-nrcg"><span class="badge bg-red">1</span></td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}
?>
  </tr>
  <tr>
    <td class="tg-fefd">Komitmen dalam bekerja</td>
    <?php if($data['komitmen']=='5'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg"><span class="badge bg-blue">5</span></td>
    ';}elseif($data['komitmen']=='4'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg"><span class="badge bg-green">4</span></td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['komitmen']=='3'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg"><span class="badge bg-orange">3</span></td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['komitmen']=='2'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg"><span class="badge bg-red">2</span></td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['komitmen']=='1'){
      echo '
    <td class="tg-nrcg"><span class="badge bg-red">1</span></td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}
?>
  </tr>
  <tr>
    <td class="tg-fefd">Pengalaman yang sesuai pekerjaan</td>
    <?php if($data['pengalaman']=='5'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg"><span class="badge bg-blue">5</span></td>
    ';}elseif($data['pengalaman']=='4'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg"><span class="badge bg-green">4</span></td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['pengalaman']=='3'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg"><span class="badge bg-orange">3</span></td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['pengalaman']=='2'){
      echo '
    <td class="tg-nrcg">1</td>
    <td class="tg-nrcg"><span class="badge bg-red">2</span></td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}elseif($data['pengalaman']=='1'){
      echo '
    <td class="tg-nrcg"><span class="badge bg-red">1</span></td>
    <td class="tg-nrcg">2</td>
    <td class="tg-nrcg">3</td>
    <td class="tg-nrcg">4</td>
    <td class="tg-nrcg">5</td>
    ';}
?>
  </tr>
  <tr class="warning">
    <td class="tg-amwm">TOTAL</td>
    <td class="tg-davt ctr" colspan="5"> <?php
   
    echo $tot=($data['penampilan']+$data['komunikasi']+$data['sikap']+$data['pemahaman']+$data['komitmen']+$data['pengalaman']);
    ?>
     </td>
  </tr>
</table>
</div>



 <div class="col-md-8">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-th-large"></i>

              <h3 class="box-title">Skills</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-hover table-responsive ">
          <tr class="success"><td> Kemampuan Menggunakan Komputer </td><td>
                    <?php if ($data['komputer']=='Sangat Mahir'){
                      echo '<li class="glyphicon glyphicon-check"></li> Sangat Mahir</td><td><li class="glyphicon glyphicon-unchecked"></li> Cukup Mahir </td><td><li class="glyphicon glyphicon-unchecked"></li> Tidak Mahir ';
                      }elseif ($data['komputer']=='Cukup Mahir'){
                      echo '<li class="glyphicon glyphicon-unchecked"></li> Sangat Mahir </td><td><li class="glyphicon glyphicon-check"></li> Cukup Mahir </td><td><li class="glyphicon glyphicon-unchecked"></li> Tidak Mahir ';
                      }elseif ($data['komputer']=='Tidak Mahir'){
                      echo '<li class="glyphicon glyphicon-unchecked"></li> Sangat Mahir </td><td><li class="glyphicon glyphicon-unchecked"></li> Cukup Mahir </td><td><li class="glyphicon glyphicon-check"></li> Tidak Mahir ';
                      } ?>
          </td></tr>
          <tr class="success"><td> Kemampuan Bahasa Inggris </td><td>
            
            <?php if ($data['inggris']=='Baik'){
                      echo '<li class="glyphicon glyphicon-check"></li> Baik </td><td><li class="glyphicon glyphicon-unchecked"></li> Cukup Baik </td><td><li class="glyphicon glyphicon-unchecked"></li> Kurang ';
                      }elseif ($data['inggris']=='Cukup Baik'){
                      echo '<li class="glyphicon glyphicon-unchecked"></li> Baik </td><td><li class="glyphicon glyphicon-check"></li> Cukup Baik </td><td><li class="glyphicon glyphicon-unchecked"></li> Kurang ';
                      }elseif ($data['inggris']=='Kurang'){
                      echo '<li class="glyphicon glyphicon-unchecked"></li> Baik </td><td><li class="glyphicon glyphicon-unchecked"></li> Cukup Baik </td><td><li class="glyphicon glyphicon-check"></li> Kurang ';
                      } ?>
          </td></tr>
          
          </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

<div class="col-md-4">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-th-large"></i>

              <h3 class="box-title">Penilaian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <table class="table table-bordered table-hover table-responsive">
         <tr class="warning">
          <td ><b> Nilai Akhir </td><td>:</b>  <?php if($tot>=18){echo'Direkomendasikan';}elseif($tot=17){echo'Dipertimbangkan';}
          elseif($tot=16){echo'Dipertimbangkan';}elseif($tot<16){echo'Tidak Direkomendasikan';}?><br></td></tr>
          <tr class="warning"><td ><b> Tindak Lanjut </td><td>:</b>  Proses Lanjut<br></td></tr>
          <tr class="warning"><td ><b> Interviewer </td><td>:</b> PT. Sinar Jernih Sarana <br></td></tr>
          </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

    <div class="col-md-8">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-th-large"></i>

              <h3 class="box-title">Profil Kepribadian Berdasarkan Interview</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h4><i class="glyphicon glyphicon-plus-sign"></i> Kelebihan</h4>
                <br>
                <p><?php if(!empty($data['kl1'])){echo '1. '.$data['kl1'];} ?></p>
                <p><?php if(!empty($data['kl2'])){echo '2. '.$data['kl2'];} ?></p>
                <p><?php if(!empty($data['kl3'])){echo '3. '.$data['kl3'];} ?></p>
                <p><?php if(!empty($data['kl4'])){echo '4. '.$data['kl4'];} ?></p>
                <p><?php if(!empty($data['kl5'])){echo '5. '.$data['kl5'];} ?></p>
              </div>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h4><i class="glyphicon glyphicon-minus-sign"></i> Kekurangan</h4>
                <br>
                <p><?php if(!empty($data['kr1'])){echo '1. '.$data['kr1'];} ?></p>
                <p><?php if(!empty($data['kr2'])){echo '2. '.$data['kr2'];} ?></p>
                <p><?php if(!empty($data['kr3'])){echo '3. '.$data['kr3'];} ?></p>
                <p><?php if(!empty($data['kr4'])){echo '4. '.$data['kr4'];} ?></p>
                <p><?php if(!empty($data['kr5'])){echo '5. '.$data['kr5'];} ?></p>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>