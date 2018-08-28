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
			<div class="box-header with-border">
				<h3 class="box-title"><strong><?php echo $diller['anketEkle']; ?></strong></h3>
				<p style="float:right">
					<a href="index.php?islem=anketliste" class="btn btn-info btn-md"><?php echo $diller['anketList']; ?></a>			
					
				</p>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<form action="index.php?islem=anketkaydet" method="post">
					<table class="table table-hover table-bordered">
						<tbody>
							<tr>
								<th><?php echo $diller['anketAdi']; ?></th>
								<td><input required class="form-control"  name="baslik" type="text" /></td>
							</tr>
							<tr>
								<th><?php echo $diller['anketKimlik']; ?></th>
								<td>
									Hayır:<input type="radio" checked  value="0"  name="kimlik"  />
									Evet: <input type="radio"  value="1" name="kimlik"  />
								</td>
							</tr>
						</tbody>
					</table>
					<br/>
					<input class="btn btn-success btn-block" name="ekle" type="submit" value="<?php echo $diller['ekle']; ?>" />
				</p>
			</form>			
		</div>
	</div>
</body>
</html> 