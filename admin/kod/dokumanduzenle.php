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
			<div class="box-header with-border"><h2><?php echo $diller['dokumanDuzenle']; ?></h2></div>
			<!-- /.box-header -->
			<div class="box-body">
				
				<?php
					$query = $db->query("SELECT * FROM dokuman where id=".$_GET["id"], PDO::FETCH_ASSOC);
					if ( $query->rowCount() ){
						foreach( $query as $row ){
						?>
						<form action="index.php?islem=dokumanduzenlekaydet" method="post">
							<table class="table table-bordered table-hover">
								<tbody>
									<tr>
										<th><?php echo $diller['baslik']; ?></th>
										<td><input required name="baslik" class="form-control" value="<?php echo $row['baslik']?>" width="300" type="text" /></td>
									</tr>
									<tr>
										<th><?php echo $diller['dokumanNo']; ?></th>
										<td><input name="dokumanno" type="text"  class="form-control" value="<?php echo $row['dokumanno']?>" /></td>
									</tr>
									<tr>
										<th><?php echo $diller['yayinTarihi']; ?></th>    
										<td><input name="yayintarihi" type="text" class="form-control" value="<?php echo $row['yayintarihi']?>"  /></td>
									</tr>
									<tr>
										<th><?php echo $diller['revizyonNo']; ?></th>
										<td><input name="revizyonno" type="text" class="form-control" value="<?php echo $row['revizyonno']?>"  /></td>
									</tr>
									<tr>
										<th><?php echo $diller['revizyonTarihi']; ?></th>
										<td><input name="revizyontarihi" class="form-control" type="text"  value="<?php echo $row['revizyontarihi']?>"  /></td>
									</tr>
									<tr>
										<th><?php echo $diller['sayfa']; ?></th>
										<td><input name="sayfa" class="form-control" type="text"  value="<?php echo $row['sayfa']?>"  /></td>
									</tr>
									<tr>
										<th><?php echo $diller['surecAdi']; ?></th>
										<td><input name="surecadi" class="form-control" type="text"  value="<?php echo $row['surecadi']?>"  /></td>
									</tr>
									<tr>
										<th><?php echo $diller['surecSahibi']; ?></th>
										<td><input name="surecsahibi" class="form-control" type="text"  value="<?php echo $row['surecsahibi']?>"  /></td>
									</tr>
									<tr>
										<th><?php echo $diller['surecHedefi']; ?></th>
										<td><input name="surechedefi" class="form-control" type="text"  value="<?php echo $row['surechedefi']?>"  /></td>
									</tr>
								</tbody>
							</table>
							<input type="hidden" name="isoid" value="<?php echo $_GET["id"]; ?>" id="hiddenField">
							<input type="hidden" name="risk" value="<?php echo $_GET["risk"]; ?>" id="hiddenField2">
							<br/>
							<input class="btn btn-success form-control" name="ekle" type="submit" value="<?php echo $diller['guncelle']; ?>" />
						</p>
					</form>
					
					<?php 
					}}
			?>
			
		</div>
		<!-- /.box-body -->
	</div>
</body>
</html> 