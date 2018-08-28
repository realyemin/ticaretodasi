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
			<div class="box-header with-border">
				<h3 class="box-title"><strong><?php echo $diller['anketSorusuEkle']; ?></strong></h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<form action="index.php?islem=anketsorukaydet" method="post">
					<table class="table table-bordered table-hover">
						<tbody>
							<tr>
								<td><?php echo $diller['anketSorusu']; ?> :</td>
								<td><input required class="form-control" name="baslik" type="text" placeholder="Seçilen anket için soru ekleyiniz" />
									<input type="hidden" name="id" value="<?php echo $_GET["id"] ?>" id="hiddenField">
								</td>
							</tr>
							<tr>
								<td><?php echo $diller['ekMetin']; ?> :</td>            
								<td><input class="form-control"  name="baslik2" width="300" type="text" placeholder="(Soruya metinsel bir cevap isteniyorsa istenen metnin açıklaması buraya yazılır)" /></td>								
							</tr>						
						</tbody>
					</table>
					<br/>
					<input class="btn btn-block btn-success" name="ekle" type="submit" value="<?php echo $diller['ekle']; ?>" />
				</p>
			</form>
			
		</div>
		<!-- /.box-body -->
	</div>
</body>
</html> 