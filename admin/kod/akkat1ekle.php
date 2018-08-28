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
			<div class="box-header with-border"><h2><?php echo $diller['kategoriEkleme'];?></h2></div>
			<!-- /.box-header -->
			<div class="box-body">
				<div align="left">
					<h2>&nbsp;</h2>
					<form action="index.php?islem=akkat1kaydet" method="post">
						<table class="table table-hover">
							<tbody>
								<tr>
									<td width="115"><?php echo $diller['kategoriAdi']; ?></td>									
									<td width="381"><input required maxlength="100" class="form-control" name="baslik" type="text" /></td>
								</tr>
							</tbody>
						</table>
						<br/>
						<input class="btn btn-success form-control" name="ekle" type="submit" value="<?php echo $diller['ekle']; ?>" />
					</p>
				</form>
			</div>
		</div>
	</div>
	</body>
</html> 