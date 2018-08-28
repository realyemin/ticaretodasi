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
				<h3 class="box-title"><strong><?php echo $diller['anketCevapEkle']; ?></strong></h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<form action="index.php?islem=anketcevapkaydet" method="post">
					<table class="table table-hover" >
						<tbody>
							<tr>
								<th><?php echo $diller['anketCevabi']; ?></th>          
								<td>
								<input required class="form-control" name="baslik" type="text" placeholder="Seçilen soru için cevap seçenekleri ekleyiniz"/>
								<input type="hidden" name="soruid" value="<?php echo $_GET["soruid"] ?>" id="hiddenField">
								<input type="hidden" name="anketid" value="<?php echo $_GET["anketid"] ?>" id="hiddenField2"></td>
							</tr>
						</tbody>
					</table>
					<br/>
					<input class="btn btn-success btn-block" name="ekle" type="submit" value="<?php echo $diller['ekle']; ?>" />
				</p>
			</form>
			
		</div>
		<!-- /.box-body -->
	</div>
</body>
</html> 