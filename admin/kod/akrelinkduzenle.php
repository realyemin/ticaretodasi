<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 10.07.2018
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
			<div class="box-header with-border"><?php echo $diller['linkDuzenle']; ?></div>
			<!-- /.box-header -->
			<div class="box-body">
				
				<?php
					$query = $db->query("SELECT * FROM aklink where id=".$_GET["id"], PDO::FETCH_ASSOC);
					if ( $query->rowCount() ){
						foreach( $query as $row ){
						?>
						<form action="index.php?islem=akrelinkduzenlekaydet" enctype="multipart/form-data" method="post">
							<table width="1066" border="0" cellpadding="0" cellspacing="0" style="width: 500px;">
								<tbody>
									<tr>
										<td><?php echo $diller['baslik']; ?></td>
										<td>&nbsp;</td>
										<td><input class="form-control" width="400"  value="<?php echo $row["baslik"]; ?>" type="text" name="baslik" id="baslik2"></td>
									</tr>
									<tr>
										<td width="66"><?php echo $diller['linkler']; ?></td>
										<td width="4">&nbsp;</td>
										<td><input class="form-control"  value="<?php echo $row["link"]; ?>" width="350" type="text" name="link" id="baslik"></td>
									</tr>
									<tr>
										<td><?php echo $diller['aciklama']; ?></td>
										<td>&nbsp;</td>
										<td><textarea class="form-control" name="aciklama" id="aciklama" cols="45" rows="3"><?php echo $row["aciklama"]; ?></textarea></td>
									</tr>
									<tr>
										<td><?php echo $diller['pdfDosya']; ?></td>
										<td>&nbsp;</td>
										<td><input type="file" name="dosya" id="dosya" /></td>
									</tr>
								</tbody>
							</table>
							<input type="hidden" name="akid" value="<?php echo $_GET["akid"]; ?>" id="hiddenField">
							<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" id="hiddenField2">
							<br/>
							<input class="btn btn-info form-control" name="ekle" type="submit" value="<?php echo $diller['guncelle']; ?>" />
						</p>
					</form>
					
					<?php 
					}
				}
			?>
			
		</div>
		<!-- /.box-body -->
	</div>
</body>
</html> 									