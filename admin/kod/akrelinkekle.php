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
			<div class="box-header with-border"><?php echo $diller['akreLinkEkle']; ?></div>
			<!-- /.box-header -->
			<div class="box-body">
				<form role="form" action="index.php?islem=akrelinkkaydet&id=<?php echo $_GET["id"];?>" method="post"  enctype="multipart/form-data" >
					<table id="tabloGenel" class="table table-hover">
						<tbody>
							<tr>
								<td><?php echo $diller['baslik'];?></td>
								<td>&nbsp;</td>
								<td><input required class="form-control" type="text" name="baslik" id="baslik2"></td>
							</tr>
							<tr>
								<td width="66"><?php echo $diller['linkler'];?></td>
								<td width="4">&nbsp;</td>
								<td><input required class="form-control" type="text" name="link" id="baslik"></td>
							</tr>
							<tr>
								<td><?php echo $diller['aciklama'];?></td>
								<td>&nbsp;</td>
								<td><textarea class="form-control" name="aciklama" id="aciklama" cols="45" rows="3"></textarea></td>
							</tr>
							<tr>
								<td><?php echo $diller['pdfDosya']; ?></td>
								<td>&nbsp;</td>
								<td><input type="file" name="dosya" id="dosya" /></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
						</tbody>
					</table>
				<br/>
				
				<input class="btn btn-success form-control" name="ekle" type="submit" value="<?php echo $diller['ekle']; ?>" /></p>
				</form>  </div>
				<!-- /.box-body -->
				</div>
				</body>
				</html> 										