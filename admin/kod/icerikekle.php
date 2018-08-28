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
		<script src="ckeditor/ckeditor.js"></script>
	</head>
	<body>
		<div class="box box-warning">
			<div class="box-header with-border"><h2><?php echo $diller['icerikEkle']; ?></h2>
				<form action="index.php?islem=icerikkaydet" method="post">
					<table class="table table-hover">
						<tbody>
							<tr>
								<th>
									<label for="aciklama"><?php echo $diller['aciklama']; ?></label>
								</th>
								<td>
									<input required class="form-control" type="text" name="baslik" id="aciklama">
								</td>
							</tr>
							<tr>
								<th><?php echo $diller['icerik']; ?></th>
								<td>
									<textarea name="detay" id="metin" class="ckeditor" cols="30" rows="30"></textarea>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input class="form-control btn btn-success" type="submit" name="Kaydet" id="Kaydet" value="<?php echo $diller['ekle']; ?>">
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</body>
		<script>
			CKEDITOR.replace('metin', {
				filebrowserBrowseUrl: 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
				filebrowserUploadUrl: 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
				filebrowserImageBrowseUrl: 'filemanager/dialog.php?type=1&editor=ckeditor&fldr='
			});
		</script>	
	</html>						