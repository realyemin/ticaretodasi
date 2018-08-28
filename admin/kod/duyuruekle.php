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
			<div class="box-header with-border"><h2><?php echo $diller['duyuruEkle']; ?></h2></div>  
			<div class="box-body">
				<form role="form" action="index.php?islem=duyurukaydet" method="post"  enctype="multipart/form-data" >
					<table class="table table-hover table-bordered">
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
								<th width="69"><?php echo $diller['baslik']; ?></th>
								<td width="917">
								<input required name="baslik" class="form-control"  width="300" type="text" /></td>
							</tr>
							<tr>
								<th><?php echo $diller['aciklama']; ?></th>				
								<td><textarea class="ckeditor" name="detay" cols="150" rows="20"></textarea></td>
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
								<td><input type="file" name="dosya" id="dosya" accept="application/pdf,application/vnd.ms-excel" /></td>
							</tr>
						</tbody>
					</table>
					<br/>					
				<input class="btn btn-success form-control" name="ekle" type="submit" value="<?php echo $diller['ekle']; ?>" />
				</form>  
				</div>			
				</div>
				</body>
				</html> 				