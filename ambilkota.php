<?php
mysql_connect("localhost","root","");
mysql_select_db("db_hrd");
$propinsi = $_GET['propinsi'];
$kota = mysql_query("SELECT * FROM kabupaten WHERE id_provinsi='$propinsi' order by id_kabupaten");
echo "<option>-- Pilih Kabupaten/Kota --</option>";
while($k = mysql_fetch_array($kota)){
     echo "<option value=\"".$k['nama_kabupaten']."\">".$k['nama_kabupaten']."</option>\n";
}
?>
