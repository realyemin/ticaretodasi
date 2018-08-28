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
	<body>	<?php									
		$query = $db->query("SELECT * FROM genel where id=". $_GET["id"], PDO::FETCH_ASSOC);						
		if ( $query->rowCount() ){
			foreach( $query as $row1 ){				
				$sorguDil=$db->query("SELECT * FROM diller WHERE dilKodu='$row1[dil]'")->fetch();							
			?>
			<div class="box box-warning">
				<div class="box-header with-border"><h2>Dil Düzenle(<?php echo $sorguDil['dilAdi']; ?>)</h2>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div align="center">
						
						
						<form action="index.php?islem=dilduzenlekaydet" method="post">
							<table class="table table-bordered">
								
								<tr>
									<th>Başkanın Mesajı</th>
									<td><textarea class="ckeditor" name="mesaj" id="mesaj" cols="45" rows="5"><?php echo $row1['baskanmesaj']?></textarea></td>
								</tr>
								<tr>
									<th>Vizyon</th>
									<td><textarea class="form-control" name="vizyon" id="mesaj" cols="45" rows="5"><?php echo $row1['vizyon']?></textarea></td>
								</tr>
								<tr>
								<th>Misyon</th>
								<td><textarea class="form-control" name="misyon" id="mesaj" cols="45" rows="5"><?php echo $row1['misyon']?></textarea></td>
							</tr>
							<tr>
								<th>Site Üst  Başlık</th>
								<td><textarea class="form-control" name="siteadi" id="mesaj3" cols="45" rows="2"><?php echo $row1['siteadi']?></textarea></td>
							</tr>
							<tr>
								<th>Site Banner  Başlık<br>(Ust Banner Kısmında eklemek isterseniz ekleyiniz.)</th>
								<td><textarea class="form-control" name="baslik" id="siteadi" cols="45" rows="2"><?php echo $row1['baslik']?></textarea></td>
								</tr>
								<tr>
									<th>Site Alt Başlık<br>(Sayfanın Alt kısmında yazan başlık)</th>
									<td><textarea class="form-control" name="altbaslik" id="siteadi2" cols="45" rows="2"><?php echo $row1['altbaslik']?></textarea></td>
								</tr>
								<tr>
									<th>Anahtar Kelimeler<br>(Arama motorları aramalarında gereklidir.)</th>
									<td><textarea class="form-control" name="anahtar" id="mesaj2" cols="45" rows="2"><?php echo $row1['anahtar']?></textarea></td>
								</tr>
								<tr>
									<th>Dil</th>
									<td>	
										<select class="form-control" name="dil" disabled >
											<?php
												$sorgu=$db->query('SELECT * FROM diller',PDO::FETCH_ASSOC);
												if($sorgu->rowCount()){
													foreach($sorgu as $dil){
													?>
													<option value="<?php echo $dil['dilKodu']; ?>" <?php if($dil['dilKodu']==$row1['dil']){ echo "selected"; } ?>><?php echo $dil['dilAdi']; ?></option>
													<?php
													}
												}											
											?>
										</select>
									</td>
								</tr>
								<tr>
									<th>Haber Başlığı</th>
									<td><input class="form-control" name="haber" value="<?php echo $row1['haber']?>" type="text"/></td>
								</tr>
								<tr>
									<th>Duyuru Başlığı</th>
									<td><input class="form-control" name="duyuru" value="<?php echo $row1['duyuru']?>" type="text"/></td>
								</tr>
								<tr>
									<th>Etkinlik Başlığı </th>
									<td><input class="form-control" name="etkinlik" value="<?php echo $row1['etkinlik']?>" type="text"/></td>
								</tr>
								
								<tr>
									<th>Link Kategori 1 Başlığı</th>
									<td><input class="form-control" name="kategori1" value="<?php echo $row1['link1']?>"  type="text"/></td>
								</tr>
								<tr>
									<th>Link Kategori 2 Başlığı</th>
									<td><input class="form-control" name="kategori2" value="<?php echo $row1['link2']?>" type="text"/></td>
								</tr>
								
								<tr>
									<th>Link Kategori 3 Başlığı</th>
									<td><input class="form-control" name="kategori3" value="<?php echo $row1['link3']?>" type="text"/></td>
								</tr>
								
								<tr>
									<th>Link Kategori 4 Başlığı</th>
									<td><input class="form-control" name="kategori4" value="<?php echo $row1['link4']?>"  type="text"/></td>
								</tr>
								
								<tr>
									<th>Link Kategori 5 Başlığı</th>
									<td><input class="form-control" name="kategori5" value="<?php echo $row1['link5']?>"  type="text"/></td>
								</tr>
								
								<tr>
									<th>Tab Başlığı1 (Varsa Ekleyiniz. ) </th>
									<td><input class="form-control" name="tab1" value="<?php echo $row1['tabbaslik1']?>" type="text"/></td>
								</tr>
								
								<tr>
									<th>Tab Başlığı2 (Varsa Ekleyiniz. ) </th>
									<td><input class="form-control" name="tab2" value="<?php echo $row1['tabbaslik2']?>"  type="text"/></td>
								</tr>
								<tr>
									<th>Tab Başlığı3 (Varsa Ekleyiniz. ) </th>
									<td><input class="form-control" name="tab3" value="<?php echo $row1['tabbaslik3']?>"  type="text"/></td>
								</tr>
								<tr>
									<th>Tab Başlığı4 (Varsa Ekleyiniz. ) </th>
									<td><input class="form-control" name="tab4" value="<?php echo $row1['tabbaslik4']?>"  type="text"/></td>
								</tr>
							<input type="hidden" name="id" value="<?php echo $_GET['id']?>" id="hiddenField" /></td>
							
							
							</table>
							<br/>
							<input class="btn btn-info form-control" name="ekle" type="submit" value="<?php echo $diller['guncelle']; ?>" />
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