<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Membuat Laporan Excel dengan PHP dan jQuery - ePlusGo</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    </head>
    
    <body>
        <div class="row" style="width:800px; margin:0 auto;">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <h2>Membuat Laporan Excel dengan PHP dan jQuery</h2>
                    <table id="tabelExport" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="7%">No.</th>
                                <th width="30%">Nama</th>
				<th width="40%">Kota Asal</th>
                                <th width="23%">No. Hp</th>
                            </tr>
	                </thead>
	                <tbody>
	                <?php 
			$i = 1;
	                $query = mysql_query("SELECT * FROM karyawan ");
	                while($fetch = mysql_fetch_array($query)) {
	                ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $fetch['nama_karyawan']; ?></td>
                                <td><?php echo $fetch['kota_asal']; ?></td>
                                <td><?php echo $fetch['hp']; ?></td>
                            </tr>
	                <?php 
                        $i++; 
			} ?>
	                </tbody>
                    </table>		  
	        </div>
                <button class="btn btn-primary" id="tombolExport">Export Excel</button>
            </div>
        </div><!-- /.row -->
	
	<script src="js/jquery-2.0.1.min.js"></script>
	<script src="js/jquery.base64.js"></script>
        <script src="js/jquery.btechco.excelexport.js"></script>
	<script>
            $(document).ready(function () {
                $("#tombolExport").click(function () {
                    $("#tabelExport").btechco_excelexport({
                        containerid: "tabelExport"
                       , datatype: $datatype.Table
                    });
                });
            });
	</script>
    </body>
</html>