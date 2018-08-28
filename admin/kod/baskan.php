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
			<div class="box-header with-border"><h2><?php echo $diller['siteAyarlari']; ?></h2>
			</div>
			<!-- /.box-header -->			
			<table class="table table-hover" >
				<tbody>
					<tr>
						<td> <div align="right"><?php echo $diller['baskanResim']; ?></div></td>
						<td>&nbsp;</td>
						<td>
							<?php
								$resim="../tcrt/baskan.jpg";															
								if(file_exists($resim))
								{
								?>
								<img src="<?php echo $resim; ?>" width="200">
								<p></p>
								<form action="index.php?islem=baskanresimsil" method="post">
									<button type="submit"  class="btn btn-block btn-danger btn-xs"><?php echo $diller['sil']; ?></button>
								</form>
								<?php 
									
								}
								else
								{
								?>
								<form name="yukleme" method="post" action="index.php?islem=baskanyukle" enctype="multipart/form-data">
									<input required class="form-control" accept="image/*" type="file" name="dosya"><br>
									<input class="btn btn-success" type="submit" name="yukle" value="<?php echo $diller['yukle']; ?>">
								</form> 
								<?php } 
							?>
						</td>
					</tr>
					<tr>
						<td width="168"><div align="right"></div></td>
						<td width="11">&nbsp;</td>
						<td width="321"><label for="mesaj"></label></td>
					</tr>
					<tr>
						<td><div align="right"><?php echo $diller['logo']; ?></div></td>
						<td>&nbsp;</td>
						<td><?php
							$resim="../tcrt/logo.jpg";
							
							
							if (file_exists($resim))
							{
							?>
							<img src="<?php echo $resim; ?>" width="200">
							<p></p>
							<form action="index.php?islem=logosil" method="post">
								<button type="submit" class="btn btn-block btn-danger btn-xs"><?php echo $diller['sil']; ?></button>
							</form>
							<?php 
								
							}
							else
							{
							?>
							<form name="yukleme" method="post" action="index.php?islem=logoyukle" enctype="multipart/form-data">
								<input required class="form-control" accept="image/*" type="file" name="dosya2">
								<br>
								<input class="btn btn-success" type="submit" name="yukle2" value="<?php echo $diller['yukle']; ?>">
							</form>
							<?php } 
						?></td>
					</tr>
					<tr>
						<td colspan="3">																					
						</td>
					</tr>
				</tbody>
			</table>
			<?php
				$query = $db->query("SELECT * FROM genel where id=1", PDO::FETCH_ASSOC);
				if ( $query->rowCount() ){
					foreach( $query as $row ){
						?> <form action="index.php?islem=baskankaydet" method="post">
						<table class="table table-hover">
							<tr>
								<th><?php echo $diller['baskanMesaj']; ?></th>
								<td><textarea name="mesaj" id="mesaj" class="ckeditor" cols="45" rows="5"><?php echo $row['baskanmesaj']?>
									
								</textarea></td>
							</tr>
							<tr>
								<th><?php echo $diller['siteUstBaslik']; ?></th>
								<td><input name="siteadi" width="500" type="text" class="form-control" value="<?php echo $row['siteadi']?>" /></td>
							</tr>
							<tr>
								<th><?php echo $diller['siteBannerAltBaslik']; ?></th>
								<td><input name="baslik" width="300" type="text" class="form-control" value="<?php echo $row['baslik']?>" /></td>
							</tr>
							<tr>
								<th><?php echo $diller['siteAltBaslik']; ?></th>
								<td><input name="altbaslik" width="300" type="text" class="form-control" value="<?php echo $row['altbaslik']?>" /></td>
							</tr>
							<tr>
								<th><?php echo $diller['anahtarKelimeler']; ?></th>
								<td><input name="anahtar" width="300" type="text" class="form-control" value="<?php echo $row['anahtar']?>" /></td>
							</tr>
							<tr>
								<th><?php echo $diller['dil']; ?></th>
								<td>
									<select class="form-control" name="dil" >
										<?php
											$sorgu=$db->query('SELECT * FROM diller',PDO::FETCH_ASSOC);
											if($sorgu->rowCount()){
												foreach($sorgu as $dil){
												?>
												<option value="<?php echo $dil['dilKodu']; ?>" <?php if($dil['dilKodu']==$row['dil']){ echo "selected"; } ?>><?php echo $dil['dilAdi']; ?></option>
												<?php
												}
											}											
										?>
									</select>
								</tr>
								<tr>
									<th><?php echo $diller['tel']; ?></th>
									<td><input name="tel" width="300" type="phone" class="telefon form-control" value="<?php echo $row['tel']?>" /></td>
								</tr>	
								<tr>
									<th><?php echo $diller['mail']; ?></th>
									<td><input name="mail" width="300" type="mail" class="form-control" value="<?php echo $row['mail']?>" /></td>
								</tr>
								<tr>
									<th><?php echo $diller['fax']; ?></th>
									<td><input name="fax" width="300" type="phone" class="telefon form-control" value="<?php echo $row['fax']?>" /></td>
								</tr>			
							<tr>
								<th><?php echo $diller['sehirSec']; ?></th>
								<td>
									<select class="form-control" name="sehirKodu" >
										<?php
											$sorgu=$db->query('SELECT * FROM iller',PDO::FETCH_ASSOC);
											if($sorgu->rowCount()){
												foreach($sorgu as $il){
												?>
												<option value="<?php echo $il['sehirKodu']; ?>" <?php if($il['sehirKodu']==$row['sehirKodu']){ echo "selected"; } ?>><?php echo $il['sehirAdi']; ?></option>
												<?php
												}
											}											
										?>
									</select>
								</tr>					
								<tr>
									<th><?php echo $diller['adres']; ?></th>
									<td><textarea name="adres" cols="30" rows="10" class="form-control" placeholder="Açık adres veya harita kodu"><?php echo $row['adres']?></textarea></td>
								</tr>
							</table>
							<div align="center">
								<input height="30px" width="150px" name="ekle" class="form-control btn btn-success" type="submit" value="<?php echo $diller['ekle']; ?>" />
							</p>
						</div>
					</form>
					
					<?php
					}}
			?>  </div>
			<!-- /.box-body -->
			
	</body>
</html> 		