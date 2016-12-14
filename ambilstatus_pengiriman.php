<?php
mysql_connect("localhost","root","");
mysql_select_db("db_hrd");
$id = $_GET['id_kandidat'];
$stt = mysql_query("SELECT * FROM kandidat WHERE id_kandidat='$id'");

while($k = mysql_fetch_array($stt)){
    echo "<p>".$k['status_pengiriman ']."</p>";
}
$st = mysql_query("SELECT * FROM tmp_customer WHERE id_kandidat='$id'");

while($d = mysql_fetch_array($st)){
    echo "<p>".$d['status_pengiriman ']."</p>";
}
?>
