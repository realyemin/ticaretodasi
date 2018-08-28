<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 17.08.2018 
		-- Description	: Güncellendi
		-- ============================================= 
	*/
?>
<div align="center">
	<div class="box">
		<div class="box-header">
		    <h3 class="box-title"><?php echo $diller['resimYukle']; ?></h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">			
			<table class="table table-bordered table-hover">
				<tbody>
					<tr>
						<p><?php
							$id = $_GET["id"];													
							$resim="../tcrt/link/link".$id.".jpg";													
							if (file_exists($resim))
							{
							?>
							<td>
								<img src="<?php echo $resim; ?>" class="img-thumbnail"style="max-width:150px">
								<a href="index.php?islem=linkresimsil&id=<?php echo $id;?>" class="btn btn-block btn-danger btn-xs"><?php echo $diller['sil']; ?></a>																					
							</td>
							
							<?php 
							}
							else
							{
							?>    
							
							<td>
							<form name="yukleme" method="post" action="index.php?islem=linkresimyukle&id=<?php echo $id;?>" enctype="multipart/form-data">
								<input required class="form-control" type="file" name="dosya" accept="image/*">
								<br>
								<input type="submit" name="yukle" class="btn btn-warning" value="<?php echo $diller['resimYukle']; ?>">
							</form> </td>
							<?php
							}
							
						?></tr>
						<tr>
							<td colspan="5"></td>
						</tr>
					</table>&nbsp;</p>
					<p>&nbsp;</p>
			</div>
			<!-- /.box-body -->
		</div>
	</div>
