

					
											<?php 
														$id = $_GET['id_kunci'];

														$query = mysql_query("select * from kunci where id_kunci='$id'") or die(mysql_error());

														$query = mysql_query("
										        SELECT * 

										        FROM kunci
										        where kunci.id_kunci='$id'") or die(mysql_error());

														$row = mysql_fetch_array($query);
														?>
												<form action="update-jawaban.php" method="post" class="form-horizontal" role="form">
												  <div class="form-group">
													<label class="col-sm-4 control-label">Nama Tes</label>
													<div class="col-sm-8">

													 <input name="nama_tes" type="text" class="form-control" placeholder="Text input" value="<?php echo $row['nama_tes'] ?>">
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-4 control-label">Kunci Jawaban</label>
													<div class="col-sm-8">
													  <input name="kunci_jawaban" type="text" class="form-control" value="<?php echo $row['kunci_jawaban'] ?>" placeholder="Text input">
													</div>
												  </div>
												   <input type="submit" value="Simpan" class="btn btn-info">
												   </form>
											</div> 