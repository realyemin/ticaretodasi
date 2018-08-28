<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 12.07.2018
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
			<div class="box-header with-border"><h2><?php echo $diller['egitimEkle']; ?></h2></div>
			<div class="box-body">
				<form role="form" action="index.php?islem=egitimkaydet" method="post">
					
					<div class="form-group">
						<table class="table table-hover" >
							<tbody>
								
								<tr>
									<th><?php echo $diller['egitimAdi']; ?></th>
									<td>
									<input required class="form-control" type="text" name="ad" id="ad"></td>
								</tr>
								<tr>
									<th><?php echo $diller['tarih']; ?></th>
									
									<td><div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input required name="tarih" id="tarih" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
									</div></td>
								</tr>
								<tr>
									<th><?php echo $diller['egitimYeri']; ?></th>
									<td><input class="form-control" type="text" name="yer" id="yer"></td>
								</tr>
								<tr>
									<th><?php echo $diller['gerceklestiren']; ?></th>
									<td><input class="form-control" type="text" name="gerceklestiren" id="gerceklestiren"></td>
								</tr>
								<tr>
									<th><?php echo $diller['suresi']; ?></th>
									
									<td><input class="form-control" type="text" name="sure" id="sure"></td>
								</tr>
								<tr>
									<th><?php echo $diller['katilanlar']; ?></th>
									
									<td><textarea class="form-control"  name="katilanlar" cols="50" rows="5"></textarea></td>
								</tr>
								<tr>
									<th><?php echo $diller['katilanlar']; ?> Personel <br>(Ctrl Tuşu ile çoklu seçim Yapabilirsiniz)</td>
									
									<td><label for="liste"></label>
										<select name="liste[]" size="7" multiple="MULTIPLE" class="form-control" id="liste">
											<?php
												$query = $db->query("SELECT id, adsoyad FROM kullanici ", PDO::FETCH_ASSOC);
												if ( $query->rowCount() ){
													foreach( $query as $row ){
													?>
													
													<option value="<?php echo $row['id']?>"><?php echo $row['adsoyad']?></option>
													<?php
													}}
											?>
										</select>
									</td>
								</tr>
								<tr>
									<th><?php echo $diller['gerceklesenTarih']; ?></th>
									<td><div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" id="datepicker" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" name="gerceklesen" data-mask>
									</div>
									</td>
								</tr>
								<tr>
									<th> <?php echo $diller['aciklama']; ?></th>
									
									<td><textarea class="ckeditor" name="detay" cols="150" rows="20"></textarea></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									
									<td><input class="btn btn-success form-control" name="ekle" type="submit" value="<?php echo $diller['ekle']; ?>" /></td>
								</tr>
							</tbody>
						</table>
					</div>
				</form>
			</div>
		</div>
	</body>
</html> 