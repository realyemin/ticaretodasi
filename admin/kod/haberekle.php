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
		<div class="box">
			<div class="box-header with-border"><h2><?php echo $diller['haberEkle']; ?></h2></div>
			<div class="box-body">
				<div align="left">
					<form action="index.php?islem=haberkaydet" method="post">
						<table class="table table-hover">
							<tbody>
									<tr>
									<td><?php echo $diller['kategoriAdi']; ?></td>							
									<td>
										<select class="btn btn-success" name="kategoriID" >
										<?php
											$sorgu=$db->query('SELECT * FROM kategori Order By kategoriAd',PDO::FETCH_ASSOC);
											if($sorgu->rowCount()){
												foreach($sorgu as $kat){
												?>
												<option value="<?php echo $kat['id']; ?>" ><?php echo $kat['kategoriAd']; ?></option>
												<?php
												}
											}											
										?>
									</select> 
									<a href="?islem=yeniKategoriEkle" class="btn btn-info"><?php echo $diller['kategoriEkleme']; ?></a>
										</td>
								</tr>
								<tr>
									<td><?php echo $diller['baslik']; ?></td>							
									<td><input required class="form-control"  name="baslik" width="300" type="text" /></td>
								</tr>
								<tr>
									<td><?php echo $diller['aciklama']; ?></td>									
									<td><textarea class="ckeditor" name="detay" cols="150" rows="20"></textarea></td>
								</tr>
								<tr>
									<td><?php echo $diller['durum']; ?></td>					
									<td>
										<select class="form-control"  name="durum" id="durum">
											<option value="1"><?php echo $diller['aktif']; ?></option>
											<option value="0"><?php echo $diller['pasif']; ?></option>
										</select></td>
								</tr>
								<tr>
									<td><?php echo $diller['manset']; ?></td>								
									<td><select class="form-control"  name="manset" id="manset">										
										<option value="1"><?php echo $diller['evet']; ?></option>
										<option value="0"><?php echo $diller['hayir']; ?></option>
										<option value="2"><?php echo $diller['onManset']; ?></option>										
									</select></td>
								</tr>
							</tbody>
						</table>
						<br/>
						<input class="btn btn-success form-control" name="ekle" type="submit" value="<?php echo $diller['ekle']; ?>" />				
					</form>		
				</div>
			</div>
		</div>
	</body>
</html> 				