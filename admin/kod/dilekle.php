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
			<div class="box-header with-border"><h2>Dil Ekleme</h2></div>
			<!-- /.box-header -->
			<div class="box-body">
				<div align="left">      
					<form action="index.php?islem=dilkaydet" method="post">
						<table class="table table-bordered">
							<tr>
								<th>Başkanın Mesajı</th>
								<td><textarea class="ckeditor" name="mesaj" id="mesaj" cols="45" rows="5"></textarea></td>
							</tr>
							<tr>
								<th>Vizyon</th>
								<td><textarea class="form-control" name="vizyon" id="mesaj" cols="45" rows="5"></textarea></td>
							</tr>
							<tr>
								<th>Misyon</th>
								<td><textarea class="form-control" name="misyon" id="mesaj" cols="45" rows="5"></textarea></td>
							</tr>
							<tr>
								<th>Site Üst  Başlık</th>
								<td><textarea class="form-control" name="siteadi" id="mesaj3" cols="45" rows="2"></textarea></td>
							</tr>
							<tr>
								<th>Site Banner Başlık<br>(Ust Banner Kısmında eklemek isterseniz ekleyiniz.) </th>
								<td><textarea class="form-control" name="baslik" id="siteadi" cols="45" rows="2"></textarea></td>
							</tr>
							<tr>
								<th>Site Alt Başlık<br>(Sayfanın Alt kısmında yazan başlık)</th>
								<td><textarea class="form-control" name="altbaslik" id="siteadi2" cols="45" rows="2"></textarea></td>
							</tr>
							<tr>
								<th>Anahtar Kelimeler<br>(Arama motorları aramalarında gereklidir.)</th>
								<td><textarea class="form-control" name="anahtar" id="mesaj2" cols="45" rows="2"></textarea></td>
							</tr>
							<tr>
								<th>Dil</th>
								<td><select class="form-control" name="dil" >
										<?php
											$sorgu=$db->query('SELECT * FROM diller',PDO::FETCH_ASSOC);
											if($sorgu->rowCount()){
												foreach($sorgu as $dil){
												?>
												<option value="<?php echo $dil['dilKodu']; ?>" ><?php echo $dil['dilAdi']; ?></option>
												<?php
												}
											}											
										?>
									</select><br>
									<a href="?islem=yeniDilEkle" class="btn btn-info">Farklı bir dil Tanımla</a>
									</td>
							</tr>
							<tr>
								<th>Haber Başlığı</th>
								<td><input class="form-control" name="haber" width="300" type="text"/></td>
							</tr>
							<tr>
								<th>Duyuru Başlığı</th>
								<td><input class="form-control" name="duyuru" width="300" type="text"/></td>
							</tr>
							<tr>
								<th>Etkinlik Başlığı </th>
								<td><input class="form-control" name="etkinlik" width="300" type="text"/></td>
							</tr>
							
							<tr>
								<th>Link Kategori 1 Başlığı</th>
								<td><input class="form-control" name="kategori1" width="300" type="text"/></td>
							</tr>
							<tr>
								<th>Link Kategori 2 Başlığı</th>
								<td><input class="form-control" name="kategori2" width="300" type="text"/></td>
							</tr>
							
							<tr>
								<th>Link Kategori 3 Başlığı</th>
								<td><input class="form-control" name="kategori3" width="300" type="text"/></td>
							</tr>
							
							<tr>
								<th>Link Kategori 4 Başlığı</th>
								<td><input class="form-control" name="kategori4" width="300" type="text"/></td>
							</tr>
							
							<tr>
								<th>Link Kategori 5 Başlığı</th>
								<td><input class="form-control" name="kategori5" width="300" type="text"/></td>
							</tr>
							
							<tr>
								<th>Tab Başlığı1 (Varsa Ekleyiniz. ) </th>
								<td><input class="form-control" name="tab1" width="300" type="text"/></td>
							</tr>
							
							<tr>
								<th>Tab Başlığı2 (Varsa Ekleyiniz. ) </th>
								<td><input class="form-control" name="tab2" width="300" type="text"/></td>
							</tr>
							<tr>
								<th>Tab Başlığı3 (Varsa Ekleyiniz. ) </th>
								<td><input class="form-control" name="tab3" width="300" type="text"/></td>
							</tr>
							<tr>
								<th>Tab Başlığı4 (Varsa Ekleyiniz. ) </th>
								<td><input class="form-control" name="tab4" width="300" type="text"/></td>
							</tr>	
						</table>
						<div>
							<input class="btn btn-success btn-block" name="ekle" type="submit" value="<?php echo $diller['ekle']; ?>" />
						
					</div>
				</form>
				
			</div>
		</div>
		<!-- /.box-body -->
	</div>
</body>
</html> 