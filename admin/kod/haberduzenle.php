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
			<div class="box-header with-border"><h2><?php echo $diller['haberGuncelle']; ?></h2></div>
			<!-- /.box-header -->
			<div class="box-body">
				<div align="center">
					<?php
						
						$query = $db->query("SELECT * FROM haber where id=". $_GET["id"], PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row1 ){
							?>
							<form action="index.php?islem=haberduzenlekaydet" method="post">
								<table class="table table-hover">
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
											<td><?php echo $diller['baslik']; ?></td>
											<td><input required class="form-control" value="<?php echo $row1['kisa']?>"  name="baslik" width="300" type="text" />
											<input type="hidden" name="id" value="<?php echo $_GET['id']?>" id="hiddenField" /></td>
										</tr>
										<tr>
											<td><?php echo $diller['aciklama']; ?></td>
											<td><textarea class="ckeditor" name="detay" cols="150" rows="20"><?php echo $row1['uzun']?></textarea></td>
										</tr>
										<tr>
											<td><?php echo $diller['durum']; ?></td>
											<td>
												<select class="form-control"  name="durum" id="durum">
													<option value="1" <?php if($row1['onay']==1){ echo "selected"; } ?>><?php echo $diller['aktif']; ?></option>
													<option value="0" <?php if($row1['onay']==0){ echo "selected"; } ?>><?php echo $diller['pasif']; ?></option>
												</select></td>
										</tr>
										<tr>
											<td><?php echo $diller['manset']; ?></td>								
											<td><select class="form-control"  name="manset" id="manset">										
												<option value="1" <?php if($row1['manset']==1){ echo "selected"; } ?>><?php echo $diller['evet']; ?></option>
												<option value="0" <?php if($row1['manset']==0){ echo "selected"; } ?>><?php echo $diller['hayir']; ?></option>
												<option value="2" <?php if($row1['manset']==2){ echo "selected"; } ?>><?php echo $diller['onManset']; ?></option>										
											</select></td>
										</tr>
									</tbody>
									</table>
									<br/>
									<input name="ekle" type="submit" value="<?php echo $diller['guncelle']; ?>" class="btn btn-info form-control" />
									</p>
									</form>
									<?php 
									}
									}
									?>
									
									</div>
									</div>
									<!-- /.box-body -->
									</div>
									</body>
									</html> 																												