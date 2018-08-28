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
			<div class="box-header with-border"><h2><?php echo $diller['icerikGuncelle']; ?></h2>
				<div class="box-body">						
					<?php						
						
						$query = $db->query("SELECT * FROM icerik where id=". $_GET["id"], PDO::FETCH_ASSOC);
						if ( $query->rowCount() ){
							foreach( $query as $row1 ){
							?>
							<form action="index.php?islem=icerikduzenlekaydet" method="post">
								<table class="table table-hover">
									<tbody>
										<tr>
											<th>													 
												<label for="aciklama"><?php echo $diller['aciklama']; ?></label>
											</th>
											<td>
												<input required class="form-control" value="<?php echo $row1['aciklama']?>"  name="baslik" type="text" />
											</td>
										</tr>
										<tr>
											<th><?php echo $diller['icerik']; ?></th>
											<td>
												<textarea name="detay" id="metin" class="ckeditor" cols="30" rows="30"><?php echo $row1['detay']?></textarea>
												
												<input type="hidden" name="id" value="<?php echo $_GET['id']?>" id="hiddenField" />
											</td>
										</tr>
										<tr>
											<td></td>
											<td>
												<input class="btn btn-info form-control" type="submit" name="Kaydet" id="Kaydet" value="<?php echo $diller['guncelle']; ?>">
											</td>
										</tr>
									</table>
								</form> 
								<?php 
								}
							}
						?>
						
					</div>
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