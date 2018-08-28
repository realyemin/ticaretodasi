<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 11.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<html>
	<head>
		<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="box box-warning">
			<div class="box-header with-border"><h2><?php echo $diller['duyuruGuncelle']; ?></h2></div>
			<div class="box-body">
				<div align="center">				
					<?php					
						$id=$_GET["id"];
						$query = $db->query("SELECT * FROM duyuru where id=". $id, PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row1 ){
							?>     
							<form name="duyuruDuzenle" action="index.php?islem=duyuruduzenlekaydet" method="post" enctype="multipart/form-data">								
								<table class="table table-hover table-bordered">
									<tbody>
										<tr>
											<td><?php echo $diller['kategoriAdi']; ?></td>							
											<td>
												<select required class="btn btn-info" name="kategoriID" >
													<?php
														$sorgu=$db->query('SELECT * FROM kategori Order By kategoriAd',PDO::FETCH_ASSOC);
														if($sorgu->rowCount()){
															foreach($sorgu as $kat){
															?>
															<option value="<?php echo $kat['id']; ?>" <?php if($kat['id']==$row1['kategoriID']){ echo "selected"; } ?> ><?php echo $kat['kategoriAd']; ?></option>
															<?php
															}
														}											
													?>
												</select>
											</td>
										</tr>
										<tr>
											<th width="69"><?php echo $diller['baslik']; ?></th>										
											<td>
												<input required class="form-control" value="<?php echo $row1['kisa']?>"  name="baslik" width="300" type="text" />
											<input type="hidden" name="id" value="<?php echo $_GET['id']?>" id="hiddenField" /></td>
										</tr>
										<tr>
											<th><?php echo $diller['aciklama']; ?></th>	
											<td><textarea class="ckeditor" name="detay" cols="150" rows="20"><?php echo $row1['uzun']?></textarea></td>
										</tr>
										<tr>
											<th><?php echo $diller['durum']; ?></th>
											<td>
												<select class="form-control"  name="durum" id="durum">
													<option value="1"><?php echo $diller['aktif']; ?></option>
													<option value="0"><?php echo $diller['pasif']; ?></option>
												</select>
											</td>
										</tr>
										<tr>
											<th><?php echo $diller['pdfDosya']; ?></th>	
											<td>												
												<?php													
													$resim="../tcrt/duyuru/duyuru_".$id.".pdf";																						
													if (file_exists($resim))													
													echo "Pdf mevcut";													
												?> 											
												
												<input type="file" name="dosya" accept="application/pdf,application/vnd.ms-excel"><br>
												<input class="btn btn-warning" type="submit" name="yukle" value="<?php echo $diller['pdfYukle']; ?>">												  
											</td>
										</tr>
									</tbody>
								</table>
								<br/>
								<input class="btn btn-info form-control" name="ekle" type="submit" value="<?php echo $diller['guncelle']; ?>" />
								
							</form>
							<?php 
							}
						}
					?>
					
				</div>
			</div>
		</div>
	</body>
</html> 																																																																		