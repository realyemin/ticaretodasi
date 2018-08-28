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

	</head>
	<body>
		<div class="box box-warning">
			<div class="box-header with-border"><h2><?php if(isset($_GET["alt"])){ echo $diller['sayfaAltMenuEkle']; }else{ echo $diller['anaMenuEkle']; } ?></h2>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<form action="index.php?islem=kat1kaydet" method="post">
					<table class="table table-hover table-bordered">
						<tbody>
							<tr>
								<th><?php echo $diller['anaMenu']; ?></th>
								<td><input required class="form-control"  name="baslik" type="text" /></td>
							</tr>
							<tr>
								<th><?php echo $diller['yonlendirmeLinki']; ?></th>				
								<td><input name="link" class="form-control"  type="text" /></td>
							</tr>
						</tbody>
					</table>
					<?php  if(isset($_GET["alt"]))
						{?><input type="hidden" name="alt" id="hiddenField" value="<?php  echo $_GET["alt"];?>">
					<?php }?><br/>
					<input class="btn btn-success form-control" name="ekle" type="submit" value="<?php echo $diller['ekle']; ?>" />
				</p>
			</form>
			
		</div>
		<!-- /.box-body -->
	</div>
	<p class="alert alert-info" >Web sitenizde yer alan ana menü başlıklarınızı bu alandan ekleyiniz.</p>
</body>
</html> 