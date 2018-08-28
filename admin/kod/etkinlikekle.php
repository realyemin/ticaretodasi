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
			<div class="box-header with-border"><h2><?php echo $diller['etkinlikEkle']; ?></h2></div> 
			<div class="box-body">
				<form role="form" action="index.php?islem=etkinlikkaydet" method="post">
					<!-- text input -->
					<div class="form-group"></div>
					<div class="form-group"></div>
					<!-- textarea -->
					<div class="form-group">
						<table class="table table-hover table-bordered">
							<tbody>
								<tr>
									<th><?php echo $diller['tarih']; ?></th>
									<td><div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input required name="tarih" id="tarih" type="text" class="form-control" data-inputmask="'alias': 'dd.mm.yyyy'" data-mask>
									</div></td>
								</tr>
								<tr>
									<th><?php echo $diller['etkinlik']; ?></th>
									
									<td><input required class="form-control" name="baslik" width="300" type="text" /></td>
								</tr>
								<tr>
									<th><?php echo $diller['aciklama']; ?></th>       
									<td><textarea class="ckeditor" name="detay" cols="150" rows="20"></textarea></td>
								</tr>
								<tr>
									<th><?php echo $diller['linkEkle']; ?></th>
									<td><input class="form-control" name="link" width="300" type="text" /></td>
								</tr>
								<tr>
									<th><?php echo $diller['durum']; ?></th>					
									<td>
										<select class="form-control" name="onay" id="durum">
											<option value="1"><?php echo $diller['aktif']; ?></option>
											<option value="0"><?php echo $diller['pasif']; ?></option>
										</select></td>
								</tr>								
								<tr>									
									<td>&nbsp;</td>
									<td><input class="btn btn-success form-control" type="submit" name="a" id="a" value="<?php echo $diller['ekle']; ?>"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</form>
			</div>
		</div>
	</body>
</html> 