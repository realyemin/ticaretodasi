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
			<div class="box-header with-border"><h2><?php echo $diller['dokumanEkle']; ?></h2></div>
			<!-- /.box-header -->
			<div class="box-body">
				<form action="index.php?islem=dokumankaydet" method="post">
					<table class="table table-bordered table-hover">
						<tbody>
							<tr>
								<th><?php echo $diller['baslik']; ?></th>
								<td><input required name="baslik" class="form-control" type="text" /></td>
							</tr>
							<tr>
								<th><?php echo $diller['dokumanNo']; ?></th>
								<td><input name="dokumanno" class="form-control" type="text" /></td>
							</tr>
							<tr>
								<th><?php echo $diller['yayinTarihi']; ?></th>   
								<td><input name="yayintarihi" class="form-control" type="text" /></td>
							</tr>
							<tr>
								<th><?php echo $diller['revizyonNo']; ?></th>
								<td><input name="revizyonno" class="form-control" type="text" /></td>
							</tr>
							<tr>
								<th><?php echo $diller['revizyonTarihi']; ?></th>
								<td><input name="revizyontarihi" class="form-control" type="text" /></td>
							</tr>
							<tr>
								<th><?php echo $diller['sayfa']; ?></th>
								<td><input name="sayfa" class="form-control" type="text" /></td>
							</tr>
							<tr>
								<th><?php echo $diller['surecAdi']; ?></th>
								<td><input name="surecadi" class="form-control" type="text" /></td>
							</tr>
							<tr>
								<th><?php echo $diller['surecSahibi']; ?></th>
								<td><input name="surecsahibi" class="form-control" type="text" /></td>
							</tr>
							<tr>
								<th><?php echo $diller['surecHedefi']; ?></th>
								<td><input name="surechedefi" class="form-control" type="text" /></td>
							</tr>
						</tbody>
					</table>
					<input type="hidden" name="isoid" value="<?php echo $_GET["id"]; ?>" id="hiddenField">
					<br/>
					<input class="btn btn-success form-control" name="ekle" type="submit" value="<?php echo $diller['ekle']; ?>" />
				</p>
			</form>
			
		</div>
		<!-- /.box-body -->
	</div>
</body>
</html> 