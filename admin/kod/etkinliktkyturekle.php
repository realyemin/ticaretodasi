<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 12.07.2018 01:15
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
			<div class="box-header with-border">
				<div class="box-header with-border"><h2><?php echo $diller['etkinlikTurEkle']; ?></h2>
					<a class="btn btn-warning" href="index.php?islem=etkinliktkyturliste" ><?php echo $diller['etkinlikTurList']; ?></a>
				</div>
				<div class="box-body">
					<form action="index.php?islem=etkinliktkyturkaydet" method="post">
						<table class="table table-hover" width="600" border="0" cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<th width="118"><?php echo $diller['etkinlikTur']; ?></th>
									<td width="378"><input required class="form-control"  name="baslik" type="text" /></td>
								</tr>
								<tr>
									<td></td>
									<td><input class="btn btn-success form-control" name="ekle" type="submit" value="<?php echo $diller['ekle']; ?>" /></td>
								</tr>
							</tbody>
						</table>
					</form>
					
				</div>
				<!-- /.box-body -->
			</div>
			<p class="alert alert-info"> Tky etkinlik türü listesi için veri ekleyiniz.</p>
		</body>
	</html> 	