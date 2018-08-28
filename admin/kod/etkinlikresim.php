<?php
	/*
		-- =============================================
		-- Author		: EKOMURCU
		-- Create date	: 12.07.2018
		-- Description	: Güncelleme
		-- ============================================= 
	*/
?>
<div align="center">
	<div class="box">
		<div class="box-header with-border"><h2><?php echo $diller['etkinlikResim']; ?></h2>
			<a href="index.php?islem=etkinlikliste" class="btn btn-success"><?php echo $diller['etkinlikList']; ?></a>
			<div class="box-body">				
				<table class="table table-bordered table-hover">
					<tbody>
						<tr>
							<p><?php
								$id = $_GET["id"];
								
								for($k=1; $k<16; $k++)
								{									
									$resim="../tcrt/etkinlik/etkinlik".$id."_". $k.".jpg";									
									
									if (file_exists($resim))
									{
									?>
									<td>
										<?php if($k==1) echo "Bu Resim Manşet Resmidir"; ?><img src="<?php echo $resim; ?>" class="img-thumbnail img-responsive" style="max-height:150px; max-width:200px;">
										<p></p>
										<a href="index.php?islem=etkinlikresimsil&id=<?php echo $id;?>&resimid=<?php echo $k;	?>" class="btn btn-block btn-danger btn-xs"><?php echo $diller['sil']; ?></a>
										<p>
											<?php
												list($width, $height, $type, $attr) = getimagesize($resim);
												echo "En:".$width."px<br>";
												echo "Boy:".$height."px";
											?>
										</p>																		
									</td>									
									<?php 
									}
									else
									{
									?>    									
									<td><?php if($k==1) echo "Bu Resim Manşet Resmidir"; ?>
										<form name="yukleme" method="post" action="index.php?islem=yukleetkinlik&resimid=<?php echo $k; ?>&id=<?php echo $id;?>" enctype="multipart/form-data">
											<input class="alert-success" required type="file" name="dosya" accept="image/*"><br>
											<input class="btn btn-warning" type="submit" name="yukle" value="<?php echo $diller['resimYukle']; ?>">
										</form> 
									</td>
									<?php
									}
									if($k%4==0)
									{
										?>
									</tr>
									<tr>
									
									<?php
									}									
								}
							?></tr>
						</table>
					</div>					
				</div>
			</div>
		</div>
				